<?php
/* Smarty version 3.1.30, created on 2018-01-14 15:37:05
  from "D:\phpStudy\WWW\php\Movie\movie\Application\Home\View\Wode\Wode.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5b08a12f8107_05373913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756024dcdb61ce8fd336b99810fb524a6eb681e0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Movie\\movie\\Application\\Home\\View\\Wode\\Wode.html',
      1 => 1515915421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b08a12f8107_05373913 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的页面</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/wode.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

		<style type="text/css">
			body{
				background: #f5f4f6;
			}
		</style>
		
	</head>
	<body>
		<!--顶部头像-->
		<div class="top">
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['photo'];?>
"/></div>
			<p><?php echo $_smarty_tpl->tpl_vars['list']->value["name"];?>
</p>
		</div>
		
		<!--我的操作-->
		<div class="center">
			<div class="">
				<img src="Public/img/hot.png"/>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['b_id'];?>
">电影票</a>
			</div>
			<div class="">
				<img src="Public/img/youhui.png"/>
				<span>优惠卷</span>
			</div>
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
					<img src="Public/img/yingyuan.png"/>
					<p>影院</p>
				</div>
			</a>
			<a href="index.php?m=Home&c=Wode&a=WodeInfo">
                            <div class="">
					<img src="Public/img/wodered.png"/>
					<p class="color">我的</p>
				</div>
			</a>
		</div>
		
	</body>
</html>
<?php }
}
