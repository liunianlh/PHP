<?php
/* Smarty version 3.1.30, created on 2018-01-14 15:36:38
  from "D:\phpStudy\WWW\php\Movie\movie\Application\Home\View\Yingyuan\yingyuan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5b08869ff913_42365237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b3227f818bb790bdddccffc1616bc86a3b719e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Movie\\movie\\Application\\Home\\View\\Yingyuan\\yingyuan.html',
      1 => 1515915395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b08869ff913_42365237 (Smarty_Internal_Template $_smarty_tpl) {
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
				<div class="juli">3.5km</div>
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
		
		
		<?php echo '<script'; ?>
>
			$(".yingyuan").click(function(){
				var id = $(this).attr("id");
				window.location.href="index.php?m=Home&c=Index&a=Yyxq&id="+id;
			});
		<?php echo '</script'; ?>
>
		
	</body>
</html>
<?php }
}
