<?php
header("Content-type: text/html; charset=utf-8"); 
//由于微信对于同一个网页会请求多次的bug，所以部分代码是用来做排重的(多次请求，多次请求的ip不同，将数据存储在数据库中或者存储在缓存中，来做校验)
//授权成功后，根据回调地址跳转到本页面
//接收相关参数
$code = $_GET["code"];
$state = $_GET["state"];

//数据库结构，存在三个字段id和code还有json就可以了，数据库名称test
//连接数据库排重处理
$con = mysql_connect("localhost", "root", "root");
if($con == false) {
    exit();
}
mysql_select_db("weixin", $con);
mysql_set_charset("uft8", $con);

//获取数据库中的记录
$sql = "select * from getuser where code='{$code}'";
$result = mysql_query($sql, $con);
//获取一条记录
$row = mysql_fetch_assoc($result);

$json = "";
//判断code是否请求过
if(empty($row)) {
     //拼接跳转地址
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

        //将结果写入数据库中
         $sql = "insert into getuser(code,json) values('{$code}','{$output}')";

        //插入到数据库中
        mysql_query($sql, $con);
        $json = $output;
}else {
    $json = $row["json"];
}
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


$output = json_decode($output, true);

?>
<html>
    <head>
        <title>用户信息</title>
        <meta charset="utf-8">
    </head>
    <body>
      <div>
	  <p>用户标识：<?php echo $output["openid"]; ?></p>
	  <p>用户名：<?php echo $output["nickname"]?></p>
	  <p>性别：<?php if($output["sex"]==1){echo "男";}else{echo "女";}?></p>
	  <p>头像：</p><img src="<?php echo $output["headimgurl"]?>">
	  <p>地址：<?php echo $output["country"]?><?php echo $output["province"]?>省<?php echo $output["city"]?>市</p>
	  
	  </div>
    </body>
</html>


