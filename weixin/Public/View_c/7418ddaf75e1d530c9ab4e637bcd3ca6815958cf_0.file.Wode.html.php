<?php
/* Smarty version 3.1.30, created on 2018-01-18 10:10:05
  from "C:\www\movie\Application\Home\View\Wode\Wode.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6001fd280e49_87701708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7418ddaf75e1d530c9ab4e637bcd3ca6815958cf' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Wode\\Wode.html',
      1 => 1516241400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6001fd280e49_87701708 (Smarty_Internal_Template $_smarty_tpl) {
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
			.top{
	
	
				background:url("Public/img/80g58PICT2p.jpg") no-repeat;
				width: 100%;
				background-size:cover;
				margin: 0 auto;
				text-align: center;
				display: inline-block;
			}
		</style>
		
	</head>
	<body>
		<!--顶部头像-->
		<div class="top">
                    <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
			<div><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"/></div>
			<p><?php echo $_smarty_tpl->tpl_vars['list']->value["name"];?>
</p>
                        <?php } else { ?>
                        <div><img src="Public/img/wode.png"/></div>
			<p>未登录</p>
                        <?php }?>
		</div>
		
		<!--我的操作-->
		<div class="center">
			<div class="">
				<img src="Public/img/hot.png"/>
                                <a href="index.php?m=Home&c=Order&a=OrderList">电影票</a>
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
