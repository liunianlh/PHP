<?php


class WechatController{

    //Token配置信息
    public function checkURL() {
		header('Content-Type: text/plain');
    //判断是为验证有效地址，还是传输数据
    if (isset($_GET["echostr"])) {//判断有效地址
        //获取传输的相关参数
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echoStr = $_GET["echostr"];
        //自己配置的token值
        $token ="liuchichi"; 
        //加密处理
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        //判断是否相等
        if ($tmpStr == $signature) {
            echo $echoStr; //相等输出echostr参数
            exit;
			}
	}else {//获取相关数据
        //接收传输的post数据
        $postData = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (empty($postData)) {
            exit;
        }
        //file_put_contents("1.txt",$postData."\n",FILE_APPEND);
        //将xml数据转化为对象
        $postObj = simplexml_load_string($postData);
        //通过msgType区分倒是消息还是事件推送
        switch ($postObj->MsgType) {
            case "text"://文本消息
            $date = time();
            //用户点击的按钮
            $xml=M("Wechat")->caidanDianji($postObj->Content,$postObj->FromUserName,$postObj->ToUserName,$date);
            echo $xml;
            break;
        case "event"://事件推送
            switch ($postObj->Event) {//通过事件类型区分具体的事件
                case "CLICK":case "VIEW"://菜单相关事件
                    file_put_contents("2.txt", "菜单事件推送\n", FILE_APPEND);
                    file_put_contents("2.txt", $postData . "\n", FILE_APPEND);
                    break;
                //接收关注事件
                case "subscribe":
                    $date = time();
                    $xml=M("Wechat")->guanzhuXml($postObj->FromUserName,$postObj->ToUserName,$date);
                    echo $xml;
                    break;
                //接收取消关注事件
                case "unsubscribe":
                    file_put_contents("2.txt", "取消关注事件\n", FILE_APPEND);
                    file_put_contents("2.txt", $postData . "\n", FILE_APPEND);
                    break;
            }
            break;
        }
        }
    }
        
	//用户授权
    public function loginUrl() {
        //拼接跳转所需要的url地址\
        //基本结构：
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd3edcf424494c425";
        //拼接回调的URL地址
		
        $tiaozhuan=urlencode($_GET['tiaozhuan']);
        $redirectUrl = urlencode("http://www.liuchichi.top/index.php/?m=Weixin&c=Wechat&a=getUserInfo&tiaozhuan=".$tiaozhuan);
        $url .= "&redirect_uri=".$redirectUrl;
        //拼接type&授权作用域&state参数没有参数可以不拼接&必须末尾参数(自己定义state参数的意义，此处的意义是获取的是用户的详细信息)
        $url .= "&response_type=code&scope=snsapi_userinfo&state=info#wechat_redirect";
		
	  echo "<script type='text/javascript'>window.location.href='{$url}';</script>";
    }
    //获取用户详情信息
    public function getUserInfo() {
        $tiaozhuan=$_GET["tiaozhuan"];
        $code = $_GET["code"];
        $state = $_GET["state"];
        //获取用户唯一标识的请求地址
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxd3edcf424494c425&secret=c12b1e677b6afa05fa5ed329a38e4399&code={$code}&grant_type=authorization_code";
        //发送请求给微信服务器采用curl方式
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url);//请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, FALSE);//https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1);//请求的结果以字符串返回

        //发送请求
        $output = curl_exec($wxCurl);

        //释放curl句柄
        curl_close($wxCurl);
        //插入到数据库中
        $json = $output;
        //json数据转化为数组
        $arr = json_decode($json, true);
         //获取用户详细信息
        $url = "https://api.weixin.qq.com/sns/userinfo?access_token={$arr["access_token"]}&openid={$arr["openid"]}&lang=zh_CN";
        //发送请求给微信服务器采用curl方式
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url);//请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, FALSE);//https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1);//请求的结果以字符串返回

        //发送请求
        $output = curl_exec($wxCurl);
        //释放curl句柄
        curl_close($wxCurl);
        $arr = json_decode($output, true);
        //查询用户信息
        $list=M("Wechat")->chaxunXinxin($arr["openid"]);
        if(empty($list)){
            $dizhi=$arr["province"].$arr["city"];
            //插入信息
            $fanhui=M("Wechat")->charuXinxin($arr["openid"],$arr["nickname"],$arr["headimgurl"],$dizhi,$arr["sex"]);
			$id=$fanhui["@@identity"];
        }else{
            $id=$list["id"];
        }
		//将用户的id上传setcookie
		setcookie("admin_id",$id,time()+60*60*24);
       echo "<script type='text/javascript'>window.location.href='{$tiaozhuan}';</script>";
	   
	   

    }
    //修改菜单  当数据库修改时调取此方法
    public function setMenu() {
        $token = M("Wechat")->Token();
        //设置请求地址
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$token;
        //设置请求的post参数(由于json_encode会将中文转义，所以通过urlencode转义一下)
        //合并时把这里换成数据库的数据进行循环
        $arr = M("Wechat")->caidanArr();
        //将菜单转化为json数据
        $data = json_encode($arr);
        $data = urldecode($data); //将中文转义胡来
        //发送请求给微信服务器采用curl方式
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url); //请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false); //https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1); //请求的结果以字符串返回
        // post数据
        curl_setopt($wxCurl, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($wxCurl, CURLOPT_POSTFIELDS, $data);
        //发送请求
        $output = curl_exec($wxCurl);
        //释放curl句柄
        curl_close($wxCurl);
	$output=json_decode($output,true);
        //输出结果
        if($output["errmsg"]=="ok"){
                echo "菜单插入或修改成功,errmsg:".$output["errcode"];
        }else{
                echo "菜单插入或修改失败<br/>详情：";
                var_dump($output);
        }
    }
    //删除菜单
    public function delMenu() {
        $token = M("Index")->Token();
        //设置请求地址
        $url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=".$token;
        //发送请求给微信服务器采用curl方式
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url);//请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false);//https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1);//请求的结果以字符串返回
        //发送请求
        $output = curl_exec($wxCurl);
        //释放curl句柄
        curl_close($wxCurl);
        //输出结果
        $output=json_decode($output,true);
        if($output["errmsg"]=="ok"){
                echo "菜单删除成功,errmsg:".$output["errcode"];
        }else{
                echo "菜单删除失败<br/>详情：";
                var_dump($output);
        }
    }
    
    //获取菜单
    public function getMenu() {
        $token = M("Wechat")->Token();
        //设置请求地址
        $url = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=" . $token;
        //发送请求给微信服务器采用curl方式
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url); //请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false); //https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1); //请求的结果以字符串返回
        //发送请求
        $output = curl_exec($wxCurl);
        //释放curl句柄
        curl_close($wxCurl);
        //输出结果
        $output=json_decode($output,true);
        var_dump($output);
        foreach ($output as $a=>$b){
			foreach($b["button"] as $c=>$d){
				echo $d["name"]."<br/>";
				foreach($d["sub_button"] as $e=>$f){
					echo "&nbsp;&nbsp;&nbsp;".$f["name"]."<br/>";
				}
			}
        }
    }
    //获取地理位置
   
	public function jsSDk(){
		
			$token = M("Wechat", "Weixin")->Token();
			//拼接url地址
			$url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token={$token}&type=jsapi";

			//发送请求给微信服务器采用curl方式
			//初始化
			$wxCurl = curl_init();
			//设置选项
			curl_setopt($wxCurl, CURLOPT_URL, $url);//请求的url地址
			curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false);//https请求方式
			curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1);//请求的结果以字符串返回

			//发送请求
			$output = curl_exec($wxCurl);

			//释放curl句柄
			curl_close($wxCurl);
			$arr = json_decode($output, true);

			$noncestr = "asuiw3232ujasdfuwehad";//随机字符串
			$ticket = $arr["ticket"];
			$timestamp = time();//当前时间戳
			//注意 URL 一定要动态获取，不能 hardcode.
			
			$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
			$url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			//拼接成字符串
			$str = "jsapi_ticket={$ticket}&noncestr={$noncestr}&timestamp={$timestamp}&url={$url}";
			//echo $str;
			//加密生成签名
			$signature = sha1($str);
			//echo $signature;
			$arr=array($timestamp,$noncestr,$signature);
			return $arr;
			
		
		}
   
   
   
   
   
   
   
   
   
   
    //回复消息(乱码暂时就不用了)
    public function huifu() {
        $token = M("Wechat")->Token();
        //设置请求地址
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$token;
        //scene_id自定义的数字
        $data = '{"touser":"oToHY0UA0AFVyXqEaQE64BKpVCZE","msgtype":"text","text":{"content":"有一而是"}}';
        //初始化
        $wxCurl = curl_init();
        //设置选项
        curl_setopt($wxCurl, CURLOPT_URL, $url); //请求的url地址
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false); //https请求方式
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1); //请求的结果以字符串返回
        // post数据
        curl_setopt($wxCurl, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($wxCurl, CURLOPT_POSTFIELDS, $data);
        //发送请求
        $output = curl_exec($wxCurl);
        //释放curl句柄
        curl_close($wxCurl);
        //将结果转化为数组
        var_dump($output);
        
    }
	
    
}
