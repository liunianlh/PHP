<?php

require_once './Framework/Model.class.php';

class WechatModel extends Model {

    //获取Token
    public function Token() {
        $sql = "select * from wx_config";
        $row = $this->link->query($sql);
        if (empty($row) || (time() - $row["wx_time"] >= $row["wx_expires"])) {
            //没有设置，或者过期，重启获取token
            //定义请求地址：
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . APPID . "&secret=" . APPSECRET;

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

            if ($output == null) {
                return false;
            }

            //将获取的数据转化为数组
            $token = json_decode($output, true);

            //清空数据库
            if ($this->link->delete("delete from wx_config")) {
                //将token存储在数据库中（也可以存储在缓存中）
                $sql = "insert into wx_config values('" . $token['access_token'] . "'," . $token["expires_in"] . "," . time() . ")";

                //插入到数据库中
                $this->link->add($sql);
            }
            //返回token
            return $token["access_token"];
        } else {
            return $row["wx_token"];
        }
    }
    
    
    
        
    //用户点击的菜单
    public function caidanDianji($dianji,$FromUserName,$ToUserName,$date){
        $sql = "select * from title_type where name like '%{$dianji}%'";
        $row = $this->link->query($sql);
        if(empty($row)){
            $xml = <<<xml
                <xml>
                    <ToUserName><![CDATA[{$FromUserName}]]></ToUserName>
                    <FromUserName><![CDATA[{$ToUserName}]]></FromUserName>
                    <CreateTime>{$date}</CreateTime>
                    <MsgType><![CDATA[text]]></MsgType>
                    <Content><![CDATA[没有查找到该电影，敬请期待！！！]]></Content>
                </xml>
xml;
        }else{
            //跳转的页面
                $tiaozhuan=urlencode($row["url"]);
                //回复消息
                $xml = <<<xml
                <xml>
    <ToUserName><![CDATA[{$FromUserName}]]></ToUserName>
    <FromUserName><![CDATA[{$ToUserName}]]></FromUserName>
    <CreateTime>{$date}</CreateTime>
    <MsgType><![CDATA[news]]></MsgType>
    <ArticleCount>1</ArticleCount>
    <Articles>
        <item>
            <Title><![CDATA[{$row["name"]}]]></Title> 
            <Description><![CDATA[{$row["about"]}]]></Description>
            <PicUrl><![CDATA[{$row["img"]}]]></PicUrl>
            <Url><![CDATA[]></Url>
        </item>
    </Articles>
</xml> 
xml;
        }
        return $xml;
    }
    //菜单详情
    public function caidanArr() {
        //查询娱乐项目的信息
		$tiao="http://www.liuchichi.top/index.php?m=Home&c=Index&a=Index";
      $g = str_replace("&","/",$tiao);
        $arr = array(
    "button"=>array(//一级菜单
        array(
            "type"=>"view",
            "name"=>urlencode("购票"),
           "url"=>"http://www.liuchichi.top/index.php/?m=Weixin&c=Wechat&a=loginUrl&tiaozhuan={$g}",
        ),
        array(
            "name"=>urlencode("与影有约"),
            "sub_button"=>array(//二级菜单
                array(
                    "type"=>"view",
                    "name"=>urlencode("豆瓣电影"),
                    "url"=>"https://movie.douban.com/",
                ),
               

            )
        )
    )
);
        return $arr;
    }

    //查询是否存在用户信息
    public function chaxunXinxin($openid) {
        $sql = "select * from user where openid='{$openid}'";
        $row = $this->link->query($sql);
        return $row;
    }

    //插入信息
    public function charuXinxin($openid, $name, $url, $stress, $sex) {
        $sql = "insert into user(openid,name,url,stress,sex)values('{$openid}','{$name}','{$url}','{$stress}',{$sex})";
        $row = $this->link->add($sql);
        if (!empty($row)) {
            $sql = "select @@identity";
            $row = $this->link->query($sql);
            return $row;
        }
    }

    //自动回复
    public function guanzhuXml($FromUserName, $ToUserName, $date) {
        $xml = <<<xml
                <xml>
                    <ToUserName><![CDATA[{$FromUserName}]]></ToUserName>
                    <FromUserName><![CDATA[{$ToUserName}]]></FromUserName>
                    <CreateTime>{$date}</CreateTime>
                    <MsgType><![CDATA[text]]></MsgType>
                    <Content><![CDATA[既然关注了，从此你就是本公的人了！]]></Content>
                </xml>
xml;
        return $xml;
    }
	
	

}
