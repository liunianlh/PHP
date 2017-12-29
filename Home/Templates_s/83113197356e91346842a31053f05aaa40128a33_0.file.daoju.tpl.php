<?php
/* Smarty version 3.1.30, created on 2017-12-29 18:04:16
  from "F:\phpStudy\WWW\Home\View\daoju.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46132097bed7_10273181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83113197356e91346842a31053f05aaa40128a33' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\Home\\View\\daoju.tpl',
      1 => 1514528707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public.tpl' => 1,
  ),
),false)) {
function content_5a46132097bed7_10273181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205575a4613208ec579_28938887', "header");
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222745a4613209690e1_85869229', "content");
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225475a46132097a0b4_21982797', "js");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "header"} */
class Block_205575a4613208ec579_28938887 extends Smarty_Internal_Block
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
class Block_222745a4613209690e1_85869229 extends Smarty_Internal_Block
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
					<li class="dangqian">
						<a href="#">局内道具</a>
					</li>
					<li>
						<a href="http://localhost/Home/index.php?c=Zhsjineng&a=index">召唤师技能</a>
					</li>
				</ul>
			</div>
			<div class="content-three">
				<div class="content-three-top">
					<div class="clearfix herolist-types clearbox" style="background-color: transparent">
						<ul class="clearfix types-ms">
							<li class="current" data-type="0">
								<span class="ms-radio"><i class="i"></i></span>
								<label>全部</label>
							</li>
							<li data-type="3">
								<span class="ms-radio"><i class="i"></i></span>
								<label>攻击</label>
							</li>
							<li data-type="1">
								<span class="ms-radio"><i class="i"></i></span>
								<label>法术</label>
							</li>
							<li data-type="4">
								<span class="ms-radio"><i class="i"></i></span>
								<label>防御</label>
							</li>
							<li data-type="2">
								<span class="ms-radio"><i class="i"></i></span>
								<label>移动</label>
							</li>
							<li data-type="5">
								<span class="ms-radio"><i class="i"></i></span>
								<label>打野</label>
							</li>
							<li data-type="6">
								<span class="ms-radio"><i class="i"></i></span>
								<label>辅助</label>
							</li>
						</ul>
						<div class="herosearch" style="top:0px;">
							<input type="text" class="herosearch-input" placeholder="请输入你想要搜索的英雄名">
							<a href="" class="herosearch-icon"></a>
						</div>
					</div>
				</div>
				<div class="content-three-bottom">
					<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'b', false, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['b']->value) {
?>
						<li class="daoju" leixing="<?php echo $_smarty_tpl->tpl_vars['b']->value['type'];?>
">
							<a href="#">
								<a class="list" style="position: relative;"><img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
">
									<div style="display: none;position: absolute;top:0px;left: 0px;background: rgba(0,0,0,0.5);color:aliceblue;z-index:999;border: 1px solid #258DF2;width: 280px;">
										<div><img style="width: 75px;height: 75px;position: absolute;left: 30px;top: 20px;" src="<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
" />
											<div style="position: absolute;top: 20px;left: 130px;text-align: left;">
                                                                                            <span style="font-size: 18px;font-weight: bold;color: #23ff28;"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</span>
                                                                                            <span style="display:block;font-size: 14px;color: #da951c;line-height: 30px;">售价：<?php echo $_smarty_tpl->tpl_vars['b']->value['price'];?>
</span>
                                                                                            <span style="font-size: 14px;color: #da951c;line-height: 30px;">总价：<?php echo $_smarty_tpl->tpl_vars['b']->value['total'];?>
</span>
                                                                                        </div>
										</div>
										<div style="position: absolute;top: 100px;padding: 12px 0;color: #369ff9;font-size: 14px;margin-left: 30px;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['b']->value['attribute'];?>
</div>
										<div style="margin:0px 30px;margin-top: 180px;margin-bottom: 30px;text-align: left;color: #369ff9"><?php echo $_smarty_tpl->tpl_vars['b']->value['describe'];?>
</div>
									</div>
								</a><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</a>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_225475a46132097a0b4_21982797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="public/js/daoju.js"><?php echo '</script'; ?>
>
	<?php
}
}
/* {/block "js"} */
}
