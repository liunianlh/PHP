<?php
/* Smarty version 3.1.30, created on 2018-01-16 15:19:42
  from "E:\phpstudy\www\movie\Application\Home\View\Qupiao\qupiao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5da78e3f4d58_33721541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0345895e719357605bebd28ce3a2e53efa66bbc' => 
    array (
      0 => 'E:\\phpstudy\\www\\movie\\Application\\Home\\View\\Qupiao\\qupiao.html',
      1 => 1516087179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5da78e3f4d58_33721541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>取票二维码</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<style>
			.head{
				width: 100%;
				padding: 0 5%;
			}
			.main{
				margin: 5% 0;
				width: 100%;
				text-align: center;
				padding-bottom: 5%;
				border-bottom: 1px solid #E3E3E3;
			}
			img{
				width: 60%;
			}
			.text{
				width: 100%;
				padding: 5%;
			}
			h3,h4{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="head">
			<h3>取票二维码</h3>
		</div>
		<div class="main">
			<img src="Public/img/ma.png"/>	
		</div>
		<div class="text">
			<h4>注意事项</h4>
			<p>1、这是一个测试项目</p>
			<p>2、不用于任何商业用途</p>
			<p>3、如有侵权请勿介意</p>
			<p>4、不侵犯用户任何信息</p>
		</div>
            <a href="index.php?m=Home&a=Index&c=Index" style="margin: 0 auto;display: block;font-size: 20px; background-color: red;text-align: center;width: 200px;color: black;">返回首页</a>
	</body>
</html>
<?php }
}
