<?php
/* Smarty version 3.1.30, created on 2017-12-29 18:04:24
  from "F:\phpStudy\WWW\Home\View\zhsJineng.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a461328ad5d94_01718123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27a99556297231b4cba6636b74de22147d4a675' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\Home\\View\\zhsJineng.tpl',
      1 => 1514510763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public.tpl' => 1,
  ),
),false)) {
function content_5a461328ad5d94_01718123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6565a461328a86a96_84794445', "header");
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101215a461328acfad8_55035882', "content");
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172945a461328ad5153_51989906', "js");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "header"} */
class Block_6565a461328a86a96_84794445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title></title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="c/images/qita/t.ico" />
<link rel="stylesheet" href="public/css/header.css" />
<link rel="stylesheet" href="public/css/index.css" />
<link rel="stylesheet" href="public/css/footer.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_101215a461328acfad8_55035882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="zong">
	<div class="header">
		<div class="header-top">
			<img src="public/images/qita/tengxunyouxi.png" />
		</div>
		<div class="header-bottom">
			<div class="header-bottom-content">
				<ul class="clearbox">
					<li>
						<img src="public/images/qita/logo.png" />
					</li>
					<li>
						<a href="">
							官方首页
							<span>HOME</span>
						</a>
					</li>
					<li>
						<a href="">
							游戏资料
							<span>DATA</span>
						</a>
					</li>
					<li>
						<a href="">
							攻略中心
							<span>RAIDERS</span>
						</a>
					</li>
					<li>
						<a href="">
							赛事中心
							<span>MATCH</span>
						</a>
					</li>
					<li>
						<a href="">
							商城/合作
							<span>STORE</span>
						</a>
					</li>
					<li>
						<a href="">
							社区互动
							<span>COMMUNITY</span>
						</a>
					</li>
					<li>
						<a href="">
							玩家支持
							<span>PLAYER</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="public/images/qita/denglu2.png" /> 欢迎登录
							<span>登录后查看游戏战绩</span>
						</a>
					</li>
				</ul>
				<div class="header-bottom-content-bottom clearbox">
					<div class="header-bottom-left">
						<p>周免英雄(<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)</p>
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zhoumian']->value, 'b', false, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['b']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['a']->value == 0) {?>
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="zhoumian"><img class="block" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['photo'];?>
" /><img class="none" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
" /></a>
							</li>
							<?php } else { ?>
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="zhoumian"><img class="block" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['photo'];?>
" /><img class="none" style="display: none;" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
" /></a>
							</li>
							<?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</ul>
						<a href="">更多英雄</a>
					</div>
					<div class="header-bottom-right">
						<a href="">
							<img src="" />
						</a>
						<div>
							亲爱的召唤师,欢迎
							<a href="">登录</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="content-div">
			<div class="content-one">
				<i></i>
				<a href="">王者荣耀首页</a>
				<span>></span>
				<label>英雄介绍</label>
			</div>
			<div class="content-two">
				<h3>英雄介绍</h3>
				<ul class="herolist-nav">
					<li>
						<a href="http://localhost/Home/index.php?c=Index&a=index">英雄</a>
					</li>
					<li>
						<a href="http://localhost/Home/index.php?c=Daoju&a=index">局内道具</a>
					</li>
					<li class="dangqian">
						<a href="#">召唤师技能</a>
					</li>
				</ul>
			</div>
			<div class="content-three">

				<div class="content-three-bottom clearbox">
					<ul style="width: 465px;margin: 0px;display: inline-block;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'b', false, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['b']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['a']->value == 0) {?>
						<li>
							<a id="diyige" href="javascript:;" class="xiangqing" xiangqingtu="<?php echo $_smarty_tpl->tpl_vars['b']->value['big_image'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" dengji="<?php echo $_smarty_tpl->tpl_vars['b']->value['unlock_level'];?>
" cd="<?php echo $_smarty_tpl->tpl_vars['b']->value['decribe'];?>
"><img class="biankuang" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</a>
						</li><?php } else { ?>
						<li>
							<a href="javascript:;" class="xiangqing" xiangqingtu="<?php echo $_smarty_tpl->tpl_vars['b']->value['big_image'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" dengji="<?php echo $_smarty_tpl->tpl_vars['b']->value['unlock_level'];?>
" cd="<?php echo $_smarty_tpl->tpl_vars['b']->value['decribe'];?>
"><img class="biankuang" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</a>
						</li><?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
					<div style="float: right;">
						<div style="width: 610px;"><img id="datu" style="width: 550px;height: 342px;margin-left:20px;" src="//game.gtimg.cn/images/yxzj/img201606/summoner/80104-big.jpg" />
							<h4 id="name" style="margin-left:20px;color: #00A383;font-size: 16px;"></h4>
							<p style="margin-left:20px;margin-top: 10px;color: #9A9A9A;font-size: 14px;">LV.<span id="dengji"></span>解锁</p>
						</div>
						<div id="shuxing" style="color:#333;margin-left:20px;margin-top: 20px;font-size: 14px;"></div>
                                                
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_172945a461328ad5153_51989906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="public/js/zhsjineng.js"><?php echo '</script'; ?>
>
	<?php
}
}
/* {/block "js"} */
}
