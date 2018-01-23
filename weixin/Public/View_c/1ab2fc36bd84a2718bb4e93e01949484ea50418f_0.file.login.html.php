<?php
/* Smarty version 3.1.30, created on 2018-01-17 16:41:41
  from "C:\www\movie\Application\Admin\View\Login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f0c451ad8a2_52034522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab2fc36bd84a2718bb4e93e01949484ea50418f' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\Login\\login.html',
      1 => 1515916321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5f0c451ad8a2_52034522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="utf-8" />

	<title>登陆页面</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="Public/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="Public/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="Public/css/login.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="Public/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

	<!-- BEGIN LOGO -->

	<div class="logo">

		<img src="Public/image/logo-big.png" alt="" /> 

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->

		<div class="form-vertical login-form" action="index.html">

			<h3 class="form-title">Login to your account</h3>

                        <div class="alert alert-error hide" id="alert">

				<button class="close" data-dismiss="alert"></button>

                                <span style="text-align: center;"></span>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">Username</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

                                                <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username" id="name"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">Password</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

                                                <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password" id="pwd"/>

					</div>

				</div>

			</div>

			<div class="form-actions">

				<label class="checkbox">

				<input type="checkbox" name="remember" value="1"/> Remember me

				</label>

                            <button type="button" class="btn green pull-right" id="login_botton">

				Login <i class="m-icon-swapright m-icon-white"></i>

			    </button>            

			</div>


		</div>

		<!-- END LOGIN FORM -->        

		
		<!-- END REGISTRATION FORM -->

	</div>

	<!-- END LOGIN -->

	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2013 &copy; Metronic. Admin Dashboard Template.

	</div>

	<!-- END COPYRIGHT -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<?php echo '<script'; ?>
 src="Public/js/jquery-1.10.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="Public/js/jquery-migrate-1.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<?php echo '<script'; ?>
 src="Public/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>      

	<?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!--[if lt IE 9]>

	<?php echo '<script'; ?>
 src="Public/js/excanvas.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="Public/js/respond.min.js"><?php echo '</script'; ?>
>  

	<![endif]-->   

	<?php echo '<script'; ?>
 src="Public/js/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="Public/js/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>  

	<?php echo '<script'; ?>
 src="Public/js/jquery.cookie.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="Public/js/jquery.uniform.min.js" type="text/javascript" ><?php echo '</script'; ?>
>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<?php echo '<script'; ?>
 src="Public/js/jquery.validate.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<?php echo '<script'; ?>
 src="Public/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="Public/js/login.js" type="text/javascript"><?php echo '</script'; ?>
>      

	<!-- END PAGE LEVEL SCRIPTS --> 

	<?php echo '<script'; ?>
>

		jQuery(document).ready(function() {     

		  App.init();

		  Login.init();

		});
                
            
                
	<?php echo '</script'; ?>
>
        
	<!-- END JAVASCRIPTS -->
        <?php echo '<script'; ?>
>
                $("#login_botton").click(function(){
                var name = $("#name").val();
                var pwd = $("#pwd").val();
                $.ajax({
                type:"post",
                url:"index.php?m=Admin&c=Login&a=AdminLogin",
                data:{name:name,pwd:pwd},
                success:function(data){
                   data =  $.parseJSON(data);
                   if(data.code ==200){
                   window.location.href="index.php?m=Admin&c=Index&a=adminList";
                   }else{
                       $("#alert").show();
                       $("#alert").html(data.message);
                    }
                }
                
                })
                
                
                })
        <?php echo '</script'; ?>
>
         
</body>

<!-- END BODY -->

</html><?php }
}
