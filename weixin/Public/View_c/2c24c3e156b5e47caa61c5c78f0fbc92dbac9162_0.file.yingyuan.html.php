<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:10:34
  from "C:\www\movie\Application\Home\View\Yingyuan\yingyuan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ff40a599988_55205995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c24c3e156b5e47caa61c5c78f0fbc92dbac9162' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Yingyuan\\yingyuan.html',
      1 => 1516237830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ff40a599988_55205995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>影院</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/yingyuan.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		
		<style type="text/css">
		
		</style>
	</head>
		
	<body>
		<!--影院列表-->
		<div class="main">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CinemaList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<div class="yingyuan" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="padding-top: 5%;">
				<div class="mingzi">
					<h4><font><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</font><span><a><?php echo $_smarty_tpl->tpl_vars['v']->value['money']["money"];?>
</a>元起</span></h4>
				</div>
				<p><?php echo $_smarty_tpl->tpl_vars['v']->value['abstract'];?>
</p>
				<div class="biaoqian">
					<span>退票</span><span>改签</span><span>realD厅</span>
				</div>
				<div class="cu">
					<a>促</a><span>星球大战：最后的绝地武士</span></span>特惠
				</div>
				<div class="hui">
					<a>惠</a><span>星球大战：最后的绝地武士</span></span>特惠
				</div>
				<div class="juli" id="juli<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['distance'];?>
km</div>
			</div>
			
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
		</div>
		
		<!--底部导航-->
		<div class="bottom_nav">
			<a href="index.php?m=Home&c=Index&a=Index">
				<div class="">
					<img src="Public/img/hot.png"/>
					<p>热映</p>
				</div>
			</a>
			<a href="index.php?m=Home&c=Index&a=yingyuan">
				<div class="">
					<img src="Public/img/yingyuanred.png"/>
					<p class="color">影院</p>
				</div>
			</a>
			<a href="index.php?m=Home&c=Wode&a=WodeInfo">
				<div class="wode">
					<img src="Public/img/wode.png"/>
					<p>我的</p>
				</div>
			</a>
		</div>
			<input type="hidden" value="" id="jingdu">
			<br/>
			<input type="hidden" value="" id="weidu">
			<br/>
			<input type="hidden" value="" id="cha">
		
		<?php echo '<script'; ?>
>
			$(".yingyuan").click(function(){
				var id = $(this).attr("id");
				window.location.href="index.php?m=Home&c=Index&a=Yyxq&id="+id;
			})
			
		<?php echo '</script'; ?>
>	
			<!--引入js文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

window.onload=function(){

	 wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxd3edcf424494c425', // 必填，公众号的唯一标识
        timestamp: '<?php echo $_smarty_tpl->tpl_vars['wx']->value[0];?>
', //生成签名的时间戳,保证和生成签名的一致
        nonceStr: '<?php echo $_smarty_tpl->tpl_vars['wx']->value[1];?>
', // 生成签名的随机串,保证和生成签名的一致
        signature: '<?php echo $_smarty_tpl->tpl_vars['wx']->value[2];?>
',// 签名,保证和生成签名的一致
        jsApiList: ['onMenuShareTimeline',"chooseImage","previewImage","uploadImage","downloadImage","getNetworkType","scanQRCode"] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
	
    //ready接口处理 
	wx.ready(function(){
      //获取地理位置		  
		
          
			wx.getLocation({  
			
				   type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'  
				   success: function (res) {  					 
					   var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。  
					   var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90  
					   var speed = res.speed; // 速度，以米/每秒计  
					   var accuracy = res.accuracy; // 位置精度  
					
					   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jwd']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					    var jingdu = <?php echo $_smarty_tpl->tpl_vars['v']->value["jwd"][0];?>
;
						var weidu = <?php echo $_smarty_tpl->tpl_vars['v']->value["jwd"][1];?>
;
						var id= <?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
;
						if(jingdu!=""){
						GetDistance(longitude,latitude,weidu,jingdu,id);
						}
					    
					   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


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
						function GetDistance(lat1,lng1,lat2,lng2,id){
						//	Lat1 Lung1 表示A点纬度和经度，Lat2 Lung2 表示B点纬度和经度；
						//a=Lat1 – Lat2 为两点纬度之差  b=Lung1 -Lung2 为两点经度之差；
						//6378.137为地球半径，单位为公里；计算出来的结果单位为公里；
						    var hok=lat1-lat2;
						
							var radLat1 = Rad(lat1);
							var radLat2 = Rad(lat2);
							var a = radLat1 - radLat2;
							var  b = Rad(lng1) - Rad(lng2);
							var s = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) +
							Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
							s = s *6378.137 ;// EARTH_RADIUS;
							s =Math.round(s * 10000) / 10; //输出为公里
							s=s/1000;
							
							
							  
							document.getElementById("cha").value=s;
							document.getElementById("juli"+id).value=s;
							//s=s.toFixed(4);
							
							$.ajax({
							   type:"post",
							   data:{s:s,id:id},
							   url:"index.php?m=Home&c=Index&a=dis",
							   success:function(data){
							   }
							})
							
							return s;
						}			
}


    //配置相关配置
   	
    //分享错误提示
 
/* wx.error(function(res){
        alert(res);
    });*/
	
					
<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
