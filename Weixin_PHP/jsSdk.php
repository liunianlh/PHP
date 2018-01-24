<?php
//引入文件获取token
include("./getToken.php");//将获取token封装为函数

$token = getToken();

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
?>
<html>
    <head>
        <title>经纬度</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="format-detection" content="telephone=no" />
        <meta name="applicable-device" content="mobile">
    </head>
    <body>
	
	经度:<input type="text" value="" id="jingdu">
	<br/>
	纬度:<input type="text" value="" id="weidu">
	<br/>
	两地相差(米):<input type="text" value="" id="cha">
 		

    </body>
</html>
<!--引入js文件-->
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script type="text/javascript">

window.onload=function(){
	 wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxd3edcf424494c425', // 必填，公众号的唯一标识
        timestamp: <?php echo $timestamp;?>, //生成签名的时间戳,保证和生成签名的一致
        nonceStr: '<?php echo $noncestr;?>', // 生成签名的随机串,保证和生成签名的一致
        signature: '<?php echo $signature;?>',// 签名,保证和生成签名的一致
        jsApiList: ['onMenuShareTimeline',"chooseImage","previewImage","uploadImage","downloadImage","getNetworkType","scanQRCode"] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
    //ready接口处理 
	
    /*wx.ready(function(){
      //获取地理位置		  
		  document.getElementById("weizhi").onclick = function(){
           
			wx.getLocation({  
				   type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'  
				   success: function (res) {  					 
					   var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。  
					    var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90  
					   var speed = res.speed; // 速度，以米/每秒计  
					   var accuracy = res.accuracy; // 位置精度  
					
					   diaoyong(longitude,latitude);
					 
				   }  
				});
		 }
    });*/
	wx.ready(function(){
      //获取地理位置		  
		 
           
			wx.getLocation({  
				   type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'  
				   success: function (res) {  					 
					   var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。  
					    var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90  
					   var speed = res.speed; // 速度，以米/每秒计  
					   var accuracy = res.accuracy; // 位置精度  
					
						
					   diaoyong(longitude,latitude);
							
					 GetDistance(longitude,latitude,115.545735,38.874696)	 
					 
				   }  
				});
		 
    });
	
				//115.475494,38.88271
				function diaoyong(longitude,latitude){
					 document.getElementById("jingdu").value=longitude;
					 document.getElementById("weidu").value=latitude;
						}
											
								
				function Rad(d){
						   return d * Math.PI / 180.0;//经纬度转换成三角函数中度分表形式。
							}
							
						//计算距离，参数分别为第一点的纬度，经度；第二点的纬度，经度
						function GetDistance(lat1,lng1,lat2,lng2){
						//	Lat1 Lung1 表示A点纬度和经度，Lat2 Lung2 表示B点纬度和经度；
						//a=Lat1 – Lat2 为两点纬度之差  b=Lung1 -Lung2 为两点经度之差；
						//6378.137为地球半径，单位为公里；计算出来的结果单位为公里；
							var radLat1 = Rad(lat1);
							var radLat2 = Rad(lat2);
							var a = radLat1 - radLat2;
							var  b = Rad(lng1) - Rad(lng2);
							var s = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) +
							Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
							s = s *6378.137 ;// EARTH_RADIUS;
							s = Math.round(s * 10000) / 10; //输出为公里
							document.getElementById("cha").value=s;
							//s=s.toFixed(4);
							return s;
						}		
					
					 
					
								
		
	
	
	
}


    //配置相关配置
   	
    //分享错误提示
 
/* wx.error(function(res){
        alert(res);
    });*/
	
					
</script>
