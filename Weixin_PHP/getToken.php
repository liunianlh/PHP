<?php
//定义appid和appsecret
define("APPID", "wxd3edcf424494c425");
define("APPSECRET", "c12b1e677b6afa05fa5ed329a38e4399");
/**
 * 获取微信验证的token
 */
function getToken(){
    
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
    
}