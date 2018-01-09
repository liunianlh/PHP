<?php
/* Smarty version 3.1.30, created on 2018-01-08 10:32:43
  from "F:\phpStudy\WWW\web\Application\Home\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52d84b312f30_29825979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6124bc15c1962e580381364ddfc47b7ba9c68f' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\web\\Application\\Home\\view\\index.html',
      1 => 1515377428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a52d84b312f30_29825979 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>博文首页</title>
        <link href="./public/boostrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./public/boostrap/dist/css/style.css" />
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
                    <li class="active"><a href="index.php?c=Index&a=index&m=Home">首页</a></li>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">最新博文</div>
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['List']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {?>
                                <a class="list-group-item" href="index.php?c=List&a=info&m=Home&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div>热点博文</div>
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['List']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 2) {?>
                                    <a class="list-group-item" href="index.php?c=List&a=info&m=Home&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./public/boostrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
