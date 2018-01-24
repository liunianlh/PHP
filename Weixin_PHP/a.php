<?php
header("Content-type: text/html; charset=utf-8"); 

class wechat{
	
	
	
	private function getAccessToken() //获取access_token
			{
				
			$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".AppId."&secret=".AppSecret;
			
			$data = $this->getCurl($url); //通过自定义函数getCurl得到https的内容
			
			$resultArr = json_decode($data, true); //转为数组
			return $resultArr["access_token"]; //获取access_token
			}
				
	
	public function setMenu($arr){
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$token;
		
		$data = json_encode($arr );
		$data = urldecode($data);//将中文转义胡来

		$this->dataPost($data,$url);

	}
	
		function getCurl($url){//get https的内容
			 $ch = curl_init();
			 curl_setopt($ch, CURLOPT_URL,$url);
			 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//不输出内容
			 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			 $result = curl_exec($ch);
			 curl_close ($ch);
			 return $result;
			}
			
			
		function dataPost($post_string, $url) {//POST方式提交数据
			$context = array ('http' => array ('method' => "POST", 'header' => "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) \r\n Accept: */*", 'content' => $post_string ) );
			$stream_context = stream_context_create ( $context );
		$data = file_get_contents ( $url, FALSE, $stream_context );
		
		return $data;

		}
	
	
	
	
	
	
	//获取用户的信息
	public function login($url){
		
    //拼接跳转所需要的url地址
    //基本结构：
    //拼接回调的URL地址
    $redirectUrl = urlencode("http://www.liuchichi.top/getLogin.php");
    $url .= "&redirect_uri=".$redirectUrl;

    //拼接type
    $url .= "&response_type=code";
    //拼接授权作用域
    $url .= "&scope=snsapi_userinfo";
    //拼接state参数没有参数可以不拼接
    $url .= "&state=info";//自己定义state参数的意义，此处的意义是获取的是用户的详细信息
    //拼接必须末尾参数
    $url .= "#wechat_redirect";
	
    echo '<a href="'.$url.'">微信打开确认授权url地址</a>';
	}
	
	
	//创建菜单
	public function creatMenu() //创建菜单
				{
				$accessToken = $this->getAccessToken(); //获取access_token
				
			$menuPostString  = array(
				"button"=>array(//一级菜单
		array(
            /*"type"=>"click",
            "name"=>urlencode("影院订票"),
            "key"=>"1001_recommend",//自己定义
			"url"=>"https://www.baidu.com",*/
			
			
			"type"=>"view",
            "name"=>urlencode("最新电影"),
            "url"=>"https://www.baidu.com",
        ),
        array(
            "name"=>urlencode("与影有约"),
            "sub_button"=>array(//二级菜单
                array(
                    "type"=>"view",
                    "name"=>urlencode("最新电影"),
                    "url"=>"https://www.baidu.com",
                ),
                array(
                    "type"=>"view",
                    "name"=>urlencode("最热电影"),
                    "url"=>"https://www.sogou.com/",
                ),
                array(
                    "type"=>"view",
                    "name"=>urlencode("往期精彩"),
                    "url"=>"https://www.so.com/",
							),
						)
					)
				)
			);
			
			$menuPostUrl = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$accessToken;//POST的url
				$menu = $this->dataPost($menuPostString, $menuPostUrl);//将菜单结构体POST给微信服务器
				echo $menu;
				
				
				}
				
			/*public function getToken(){
					
					//连接数据库
					$con = mysql_connect("localhost", "root", "root");
					if($con == false) {
						return "";
					}
					mysql_select_db("weixin", $con);
					mysql_set_charset("uft8", $con);
					
					//获取数据库中的记录
					$sql = "select * from wx_config";
					$result = mysql_query($sql, $con);
					//获取一条记录
					$row = mysql_fetch_assoc($result);
					 //判断数据库中是否存在微信的配置，或者是否过期
					if(empty($row) || (time()-$row["wx_time"] >= $row["wx_expires"])) {
						//没有设置，或者过期，重启获取token
						//定义请求地址：
						$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET;

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

						if($output == null) {
							return false;
						}

						//将获取的数据转化为数组
						$token = json_decode($output, true);

						//清空数据库
						if(mysql_query("delete from wx_config", $con)) {
							//将token存储在数据库中（也可以存储在缓存中）
							$sql = "insert into wx_config values('".$token['access_token']."',".$token["expires_in"].",".time().")";

							//插入到数据库中
							mysql_query($sql, $con);
							
						}
						//返回token
						return $token["access_token"];
						
					}else {
						return $row["wx_token"];
					}
					
				}*/
								
								
								
				
}
	
	
	

	
	 





?>