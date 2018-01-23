<?php
/* Smarty version 3.1.30, created on 2018-01-18 14:40:31
  from "C:\www\movie\Application\Home\View\Yingren\yingren.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60415f4d2c04_72064501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86d9b703371bbd7da01046ab67efbfc1b3aa09b' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Yingren\\yingren.html',
      1 => 1516257629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60415f4d2c04_72064501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>演职人员</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
			.fenlei{
				width: 100%;
				padding: 3% 5%;
			}
			.ren{
				width: 100%;
				padding: 5% 0;
				background: #fff;
				display: inline-block;
			}
			.ren>img{
				width: 20%;
				float: left;
				margin-right: 5%;
			}
			.ren>p{
				font-size: 13px;
				color: #AAAAAA;
			}
			.bottom{
				width: 100%;
				padding: 3% 5%;
			}
			.yanyuan{
				border-bottom: 1px solid #AAAAAA;
			}
		</style>
	
	</head>
	<body>
		
		<!--导演-->
		<div class="top fenlei">
			导演（<span>1</span>）
		</div>
		<div class="daoyan ren" renid="1" style="width: 100%; padding: 5%;">
			<img src="<?php echo $_smarty_tpl->tpl_vars['MenList']->value["english"]["photo"];?>
"/>
			<h4><?php echo $_smarty_tpl->tpl_vars['MenList']->value["director"];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['MenList']->value["english"]["english"];?>
</p>
		</div>
		<!--演员-->
		<div class="bottom fenlei">
			演员（<span>3</span>）
		</div>
		<div style="width: 100%; padding: 5%;background: #fff;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MenList']->value["yanyuan"], 's', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['s']->value) {
?>
			<div class="yanyuan ren" style="padding-top: 0;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['s']->value["photo"];?>
"/>
				<h4><?php echo $_smarty_tpl->tpl_vars['s']->value["name"];?>
</h4>
				<p><?php echo $_smarty_tpl->tpl_vars['s']->value["english"];?>
</p>
				<p>饰 <span><?php echo $_smarty_tpl->tpl_vars['s']->value["shiyan"]["people"];?>
</span></p>
			</div>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		
		<?php echo '<script'; ?>
>
			$(".ren").click(function(){
				var renid = $(this).attr("renid");
				window.location.href="ren.html?renid="+renid;
			});
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
