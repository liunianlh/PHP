<?php
/* Smarty version 3.1.30, created on 2018-01-08 10:34:15
  from "F:\phpStudy\WWW\web\Application\Home\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52d8a7d4eb16_05806592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e687247846200764e0e26f935b40c102404379fa' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\web\\Application\\Home\\view\\login.html',
      1 => 1515377428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a52d8a7d4eb16_05806592 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="container" style="margin-top: 200px;">




            <form>
                <div class="form-group">
                    <label>用户名</label>
                    <input type="email" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="pwd" class="form-control" placeholder="password">
                </div>

                <button type="button" class="btn btn-default" id="submit">登录</button>
            </form>
        </div>
        <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/boostrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php echo '<script'; ?>
>
    
    $("#submit").click(function () {
        var name = $("input[name='name']").val();
        var pwd = $("input[name='pwd']").val();
        $.ajax({
            type: "post",
            url: "index.php?c=Index&a=checkLogin&m=Home",
            data: {name: name, pwd: pwd},
            success: function (data) {
                data = $.parseJSON(data);
                if (data.code == 100) {
                    alert(data.message);
                } else {
                    window.location.href = 'index.php?c=Index&a=index&m=Home';
                }
            }
        });
    });
    
<?php echo '</script'; ?>
><?php }
}
