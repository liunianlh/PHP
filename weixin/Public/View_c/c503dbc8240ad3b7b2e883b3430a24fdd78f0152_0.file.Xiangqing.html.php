<?php
/* Smarty version 3.1.30, created on 2018-01-18 14:29:00
  from "C:\www\movie\Application\Home\View\Xiangqing\Xiangqing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a603eac5c1eb5_11245111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c503dbc8240ad3b7b2e883b3430a24fdd78f0152' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Xiangqing\\Xiangqing.html',
      1 => 1516256931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a603eac5c1eb5_11245111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>影片详情</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/xiangqing.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		
		<!--头部影片介绍-->
		<div class="top">
			<div class="top_left">
				<h4><?php echo $_smarty_tpl->tpl_vars['list']->value["name"];?>
<span><a>3D</a><img src="Public/img/IMAX.png"/></span></h4>
				<p><?php echo $_smarty_tpl->tpl_vars['list']->value["english"];?>
</p>
				<div><?php echo $_smarty_tpl->tpl_vars['list']->value["type"];?>
</div>
				<div class="">
					<span>中国大陆</span> | <span><?php echo $_smarty_tpl->tpl_vars['list']->value["duration"];?>
分钟</span>
				</div>
				<a href="#">
					<span><?php echo $_smarty_tpl->tpl_vars['list']->value["shows"];?>
</span>&nbsp;<span>在中国大陆上映<img src="Public/img/sanjiaoright.png"></span>
				</a>
			</div>
			<div class="top_right">
				<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['photo'];?>
"/>
			</div>
		</div>
		
		<div class="main">
			
			<!--影片内容介绍-->
			<div class="content">
				<div class="content_top">
					<div class="content_top_left">
						<h4>
							<?php echo $_smarty_tpl->tpl_vars['list']->value['score'];?>

							<img src="Public/img/wujiao.png"/>
							<img src="Public/img/wujiao.png"/>
							<img src="Public/img/wujiao.png"/>
							<img src="Public/img/wujiao.png"/>
							<img src="Public/img/wujiao.png"/>
						</h4>
						<p>观众评分<?php echo $_smarty_tpl->tpl_vars['list']->value['comment'];?>
人 <img src="Public/img/sanjiaoright.png"/></p>
					</div>
					<div class="content_top_right">
						<h4><?php echo $_smarty_tpl->tpl_vars['list']->value['look'];?>
</h4><span>想看人数</span>
					</div>
				</div>
				<div class="content_bottom">
					<div>
						<?php echo $_smarty_tpl->tpl_vars['list']->value["abstract"];?>

					</div>
					<span class="quanbu">全部</span>
				</div>
			</div>
			
			<!--观影提示-->
			<div class="tishi">
				<h4>观影提示</h4>
				<p><span></span><?php echo $_smarty_tpl->tpl_vars['list']->value["hint"];?>
</p>
			</div>
			
			<!--演职人员-->
			<div class="tishi">
				<h4>演职人员</h4>
				<div class="">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value["list"], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['k']->value < 4) {?>
                        <a href="?m=Home&a=RenInfo&c=Ren&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" style="height:150px;" />
						<h5><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</h5>
						<p>饰 <?php echo $_smarty_tpl->tpl_vars['v']->value["people"];?>
</p>
                                            </a>
						<?php } else { ?>
						<?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</div>
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value["list"], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value > 3) {?>
				<a id='morer' href="index.php?m=Home&c=Index&a=yingren&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">显示全部演职人员</a>
                                <?php }?>
                               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		
		</div>
		
		<?php echo '<script'; ?>
>
			$(".content_bottom div").click(function(){
				$(".content_bottom div").css("-webkit-line-clamp","3");
				$(".quanbu").show();
			});
			$(".quanbu").click(function(){
				$(".content_bottom div").css("-webkit-line-clamp","1000");
				$(this).hide();
			});
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
