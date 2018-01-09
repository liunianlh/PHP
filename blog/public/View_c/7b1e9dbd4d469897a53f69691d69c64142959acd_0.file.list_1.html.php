<?php
/* Smarty version 3.1.30, created on 2018-01-08 10:32:40
  from "F:\phpStudy\WWW\web\Application\Home\view\list_1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52d8486b26c4_75231151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1e9dbd4d469897a53f69691d69c64142959acd' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\web\\Application\\Home\\view\\list_1.html',
      1 => 1515377428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a52d8486b26c4_75231151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>博文列表</title>
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
                    <li class="active"><a href="index.php?c=List&a=hotList&m=Home">热点博文</a></li>
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
                <div class="panel-heading">热点博文</div>
                <div class="panel-body">
                    <div class="list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['List']->value, 'v', false, NULL, 'foo', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null) < 6) {?>
                        <a class="list-group-item" href="index.php?c=List&a=info&m=Home&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['v']->value['click'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
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
<!--            分页 -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                   <?php if ($_smarty_tpl->tpl_vars['List']->value["all"] > $_smarty_tpl->tpl_vars['List']->value["num"]) {?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                    <li>
                        <a href="index.php?c=List&a=hotList&m=Home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['List']->value["countpage"]+1 - (1) : 1-($_smarty_tpl->tpl_vars['List']->value["countpage"])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <li><a href="index.php?c=List&a=hotList&m=Home&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                    <?php }
}
?>

                    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['List']->value["countpage"]) {?>
                    <li>
                        <a href="index.php?c=List&a=hotList&m=Home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php }?>
                </ul>
            </nav>
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
