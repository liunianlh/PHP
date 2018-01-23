<?php
/* Smarty version 3.1.30, created on 2018-01-14 16:01:48
  from "E:\phpstudy\www\movie\Application\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5b0e6cb95498_54162661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa64ecc5af13c15e4ab9f29beb70bc5d856864c5' => 
    array (
      0 => 'E:\\phpstudy\\www\\movie\\Application\\Home\\View\\Index\\index.html',
      1 => 1515916902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b0e6cb95498_54162661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/lunbo.js" ><?php echo '</script'; ?>
>
		<style type="text/css">
			.example {
				width: 100%;
				height: 150px;
				font-size: 40px;
				text-align: center;
				margin-top: 3px;
				background-color: #464576;
			}
			.carousel-item{
				line-height:141px;
				color: #fff;
				font-family:  Arial Black;
			}

		</style>
	</head>
	
	<body>
		<!--顶部导航-->
		<div class="header">
			<div class="diqu">
				<img src="Public/img/tubiao.png"/>
				<a href="#">保定<span>∨</span></a>
			</div>
			<div class="top_nav">
				<div class="hot hongxian">
					<a href="javascript:;" class="hongzi">正在热映</a>
				</div>
				<div class="noshow">
					<a href="javascript:;">即将上映</a>
				</div>
			</div>
		</div>
            
		<!--轮播-->
		<div class="example">
			<div class="ft-carousel" id="carousel_1">
				<ul class="carousel-inner">
					<li class="carousel-item" style="width:100% !important;"><img src="Public/img/lunbo/banner1.jpg" /></li>
					<li class="carousel-item"><img src="Public/img/lunbo/banner2.jpg" /></li>
					<li class="carousel-item"><img src="Public/img/lunbo/banner1.jpg" /></li>
					<li class="carousel-item"><img src="Public/img/lunbo/banner4.jpg" /></li>
					<li class="carousel-item"><img src="Public/img/lunbo/banner2.jpg" /></li>
					<li class="carousel-item"><img src="Public/img/lunbo/banner4.jpg" /></li>
				</ul>
			</div>
		</div>
		
		<!--影片列表-->
		<div class="main" id="show">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MovieList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<div  data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
"/>
				<div class="main_content">
					<h5><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h5>
					<div>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<span><?php echo $_smarty_tpl->tpl_vars['v']->value['score']["score"];?>
</span>
					</div>
					<p>导演:<?php echo $_smarty_tpl->tpl_vars['v']->value['director'];?>
</p>
					<p>主演:<?php echo $_smarty_tpl->tpl_vars['v']->value['performer_id'];?>
</p>
				</div>
				<div class="goupiao">
					<a href="index.php?m=Home&c=Index&a=yingyuan&m_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">购票</a>
					<p>特惠</p>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
		</div>
                
                <!--未上映-->
                <div class="main" id="noshow">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soonMovie']->value, 'm', false, 'z');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['z']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
			<div  data-id="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['m']->value['photo'];?>
"/>
				<div class="main_content">
					<h5><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</h5>
					<div>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<img src="Public/img/wujiao.png"/>
						<span><?php echo $_smarty_tpl->tpl_vars['m']->value['score']["score"];?>
</span>
					</div>
					<p>导演:<?php echo $_smarty_tpl->tpl_vars['m']->value['director'];?>
</p>
					<p>主演:<?php echo $_smarty_tpl->tpl_vars['m']->value['performer_id'];?>
</p>
				</div>
				<div class="goupiao">
					<a href="index.php?m=Home&c=Index&a=yingyuan?m_id=<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
">购票</a>
					<p>特惠</p>
				</div>
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
					<img src="Public/img/hotred.png"/>
					<p class="color">热映</p>
				</div>
			</a>
			<a href="index.php?m=Home&c=Index&a=yingyuan">
				<div class="">
					<img src="Public/img/yingyuan.png"/>
					<p>影院</p>
				</div>
			</a>
			<a href="index.php?m=Home&c=Wode&a=WodeInfo">
				<div class="wode">
					<img src="Public/img/wode.png"/>
					<p>我的</p>
				</div>
			</a>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript">
		//热映上映转换
		$(".noshow").click(function(){
			$(".example").hide();
                        $("#show").hide();
			$(".hot").removeClass("hongxian");
			$(".hot").find("a").removeClass("hongzi");
			$(this).addClass("hongxian");
			$(this).find("a").addClass("hongzi");
                        $("#noshow").show();
		});
		$(".hot").click(function(){
			$(".example").show();
                        $("#show").show();
			$(".noshow").removeClass("hongxian");
			$(".noshow").find("a").removeClass("hongzi");
			$(this).addClass("hongxian");
			$(this).find("a").addClass("hongzi");
                         $("#noshow").hide();
		});
		
		//跳转影片详情页面
		$(".main div").click(function(){
			var id = $(this).attr("data-id");
			window.location.href="index.php?m=Home&c=Xiangqing&a=XiangqingInfo&m_id="+id;
		});
		
		
		$("#carousel_1").FtCarousel();
	
		$("#carousel_2").FtCarousel({
			index: 1,
			auto: false
		});
	
		$("#carousel_3").FtCarousel({
			index: 0,
			auto: true,
			time: 3000,
			indicators: false,
			buttons: true
		});
	<?php echo '</script'; ?>
>
</html>
<?php }
}
