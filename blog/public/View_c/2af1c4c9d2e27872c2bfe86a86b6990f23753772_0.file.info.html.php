<?php
/* Smarty version 3.1.30, created on 2018-01-08 10:29:38
  from "F:\phpStudy\WWW\web\Application\Home\view\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52d7920d15a7_59602805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af1c4c9d2e27872c2bfe86a86b6990f23753772' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\web\\Application\\Home\\view\\info.html',
      1 => 1515377428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a52d7920d15a7_59602805 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\phpStudy\\WWW\\web\\Framework\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>博文列表-详情</title>
        <link href="public/boostrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="public/boostrap/dist/css/style.css" />
        <style>
            .nav li.active{
                text-decoration: none;
                background-color: #eee;
            }
        </style>
    </head>
    <body>
        <!--导航-->
        <div id="nav">
            <!--<div class="navbar navbar-default">-->
            <div class="container">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php?c=Index&a=index&m=Home">首页</a></li>
                    <li><a href="index.php?c=List&a=hotList&m=Home">热点博文</a></li>
                    <li><a href="index.php?c=List&a=newList&m=Home">最新博文</a></li>
                </ul>
                <?php if ($_smarty_tpl->tpl_vars['user']->value != '') {?>
                <!-- Single button -->
                <div class="btn-group navbar-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/web/index.php?m=Home&c=Fabu&a=index">发表博客</a></li>
                        <li><a href="http://localhost/web/index.php?m=Home&c=Index&a=getUserList">博客列表</a></li>
                        <li><a href="http://localhost/web/index.php?m=Home&c=Index&a=quit">退出</a></li>
                    </ul>
                </div>
                <?php } else { ?>
                <a class="btn btn-default navbar-right" href="http://localhost/web/index.php?m=Home&c=Index&a=login">登录</a>
                <a class="btn btn-default navbar-right" href="http://localhost/web/index.php?m=Home&c=Index&a=register">注册</a>
                <?php }?>
            </div>
            <!--</div>-->
        </div>
        <!--最新新闻-->
        <div class="container">
            <div class="panel panel-default">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="panel-heading" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
                <div class="panel-body">
                    <div class="list-group">
                        <br>
                        发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
&nbsp;&nbsp;
                        点击率：<?php echo $_smarty_tpl->tpl_vars['v']->value['click'];?>

                        <div style="width: 80%;padding:20px 20px 20px 0px;">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

                        </div>
                        <span style="float: right;">作者:<?php echo $_smarty_tpl->tpl_vars['userInfo']->value[$_smarty_tpl->tpl_vars['v']->value['user_id']];?>
</span>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>


        <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/boostrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
