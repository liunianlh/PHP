
<?php
define("AppId", "wxd3edcf424494c425");//定义AppId，需要在微信公众平台申请自定义菜单后会得到
define("AppSecret", "c12b1e677b6afa05fa5ed329a38e4399");//定义AppSecret，需要在微信公众平台申请自定义菜单后

include("a.php");//引入微信类  
 
   
   
   //获取用户登录信息
  function login($url){
	   $wechatObj = new wechat();//实例化微信类  
		$creatMenu = $wechatObj->login($url); 
   }
  $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd3edcf424494c425"; 
  login($url);
  
  
  
  //自定义菜单
	function creatMenu(){
	$wechatObj = new wechat();//实例化微信类  		
	$creatMenu = $wechatObj->creatMenu();
	}			
	creatMenu();
	