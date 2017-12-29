<?php
/* Smarty version 3.1.30, created on 2017-12-29 15:14:38
  from "F:\phpStudy\WWW\Home\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a45eb5e9e27d0_58321592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74339794343bf6801cdcbc708e8c4f364b80483b' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\Home\\View\\index.tpl',
      1 => 1514528834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public.tpl' => 1,
  ),
),false)) {
function content_5a45eb5e9e27d0_58321592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314665a45eb5e9a8736_90950285', "header");
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209555a45eb5e9d4fd9_80024679', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175285a45eb5e9e1221_36746899', "js");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "header"} */
class Block_314665a45eb5e9a8736_90950285 extends Smarty_Internal_Block
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
class Block_209555a45eb5e9d4fd9_80024679 extends Smarty_Internal_Block
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
?> 
                                                            <?php if ($_smarty_tpl->tpl_vars['a']->value == 0) {?>
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
							<?php }?> 
                                                        <?php
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
					<li class="dangqian">
						<a href="#">英雄</a>
					</li>
					<li>
						<a href="http://localhost/Home/index.php?c=Daoju&a=index" ">局内道具</a>
							</li>
							<li>
								<a href="http://localhost/Home/index.php?c=Zhsjineng&a=index ">召唤师技能</a>
							</li>
						</ul>
					</div>
					<div class="content-three ">
						<div class="content-three-top ">
							<div class="clearfix herolist-types clearbox ">
								<ul class="types-left ">
									<li>综合</li>
									<li>定位</li>
								</ul>
								<ul class="clearfix types-ms ">
									<li data-ptype="10">
										<span class="ms-radio "><i class="i "></i></span>
										<label>本周免费</label>
									</li>
									<li data-ptype="11">
										<span class="ms-radio "><i class="i "></i></span>
										<label>新手推荐</label>
									</li>
								</ul>
								<ul class="clearfix types-ms ">
									<li class="current " data-type="0">
										<span class="ms-radio "><i class="i "></i></span>
										<label>全部</label>
									</li>
									<li data-type="3">
										<span class="ms-radio "><i class="i "></i></span>
										<label>坦克</label>
									</li>
									<li data-type="1">
										<span class="ms-radio "><i class="i "></i></span>
										<label>战士</label>
									</li>
									<li data-type="4">
										<span class="ms-radio "><i class="i "></i></span>
										<label>刺客</label>
									</li>
									<li data-type="2">
										<span class="ms-radio "><i class="i "></i></span>
										<label>法师</label>
									</li>
									<li data-type="5">
										<span class="ms-radio "><i class="i "></i></span>
										<label>射手</label>
									</li>
									<li data-type="6">
										<span class="ms-radio "><i class="i "></i></span>
										<label>辅助</label>
									</li>
								</ul>
								<div class="herosearch ">
									<input type="text " class="herosearch-input " placeholder="请输入你想要搜索的英雄名 ">
									<a href=" " class="herosearch-icon "></a>
								</div>
							</div>
						</div>
						<div class="content-three-bottom ">
							<ul>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'b', false, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['b']->value) {
?>
                                                                
                                                            <li class="yingxiong " leixing="<?php echo $_smarty_tpl->tpl_vars['leixing']->value[$_smarty_tpl->tpl_vars['b']->value['vocation_id']];?>
" zhoumian="<?php echo $_smarty_tpl->tpl_vars['b']->value['free_week'];?>
" xinshou="<?php echo $_smarty_tpl->tpl_vars['b']->value['new_recommend'];?>
" >
									<a href="http://localhost/Home/index.php?c=Info&a=index&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['photo'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
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
class Block_175285a45eb5e9e1221_36746899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/index.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
