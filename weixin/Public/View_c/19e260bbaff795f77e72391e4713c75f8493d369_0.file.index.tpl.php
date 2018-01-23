<?php
/* Smarty version 3.1.30, created on 2018-01-14 14:49:15
  from "D:\phpStudy\WWW\php\Movie\movie\Application\Admin\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5afd6bb1cc55_03699192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e260bbaff795f77e72391e4713c75f8493d369' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Movie\\movie\\Application\\Admin\\View\\index.tpl',
      1 => 1515730622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5afd6bb1cc55_03699192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173625a5afd6ba99011_11627466', 'title');
?>
</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="public/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="public/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="public/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="public/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="public/image/favicon.ico" />
        

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="public/image/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="public/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="public/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="./public/image/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="./public/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="public/image/avatar1_small.jpg" />

						<span class="username">admin</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

                                                    <li  id="loginOut"><a><i class="icon-user"></i>quit</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">
                                <li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
                            
                               

                                <?php if (@constant('ACTION') == "Index") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?c=Index&a=adminList&m=Admin">

					<i class="icon-home"></i> 

					<span class="title">管理员管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "userList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?m=Admin&c=User&a=UserList">

					<i class="icon-home"></i> 

					<span class="title">用户管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "movieList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?c=Index&a=movieList&m=Admin">

					<i class="icon-home"></i> 

					<span class="title">电影管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "cinemaList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?c=Cinema&a=cinemaList&m=Admin">

					<i class="icon-home"></i> 

					<span class="title">影院管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "screenList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?m=Admin&c=Field&a=MovieField">

					<i class="icon-home"></i> 

					<span class="title">电影场次</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "orderList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?m=Admin&c=Buy&a=BuyList">

					<i class="icon-home"></i> 

					<span class="title">订单管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <?php if (@constant('ACTION') == "orderList") {?> 
                                    <li class="start active ">
                                <?php } else { ?>
                                     <li class="start">
                                <?php }?>
					<a href="index.php?m=Admin&c=Performer&a=PerformerList">

					<i class="icon-home"></i> 

					<span class="title">影人详情</span>

					<span class="selected"></span>

					</a>

				</li>
                                
			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32355a5afd6baf1653_02467996', 'alert');
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152645a5afd6baf56b5_40459165', 'content');
?>

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

                        
                        
                        
                        
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			
		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<?php echo '<script'; ?>
 src="public/js/jquery-1.10.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery-migrate-1.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<?php echo '<script'; ?>
 src="public/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>      

	<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!--[if lt IE 9]>

	<?php echo '<script'; ?>
 src="public/js/excanvas.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/respond.min.js"><?php echo '</script'; ?>
>  

	<![endif]-->   

	<?php echo '<script'; ?>
 src="public/js/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>  

	<?php echo '<script'; ?>
 src="public/js/jquery.cookie.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.uniform.min.js" type="text/javascript" ><?php echo '</script'; ?>
>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.js" type="text/javascript"><?php echo '</script'; ?>
>   

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.russia.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.world.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.europe.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.germany.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.usa.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.vmap.sampledata.js" type="text/javascript"><?php echo '</script'; ?>
>  

	<?php echo '<script'; ?>
 src="public/js/jquery.flot.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.flot.resize.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.pulsate.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/date.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/daterangepicker.js" type="text/javascript"><?php echo '</script'; ?>
>     

	<?php echo '<script'; ?>
 src="public/js/jquery.gritter.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/fullcalendar.min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.easy-pie-chart.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/jquery.sparkline.min.js" type="text/javascript"><?php echo '</script'; ?>
>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<?php echo '<script'; ?>
 src="public/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="public/js/index.js" type="text/javascript"><?php echo '</script'; ?>
>        

	<!-- END PAGE LEVEL SCRIPTS -->  

	<?php echo '<script'; ?>
>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $("#loginOut").click(function (){
                $.get("index.php?m=Admin&c=Login&a=LoginOut", function(data){
                    data =$.parseJSON(data);
                    if(data.code==200){
                        location.reload();
                    }
                });
            
    
            })
        <?php echo '</script'; ?>
>
	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213375a5afd6bb07a97_56437742', 'js');
}
/* {block 'title'} */
class Block_173625a5afd6ba99011_11627466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'alert'} */
class Block_32355a5afd6baf1653_02467996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
}
}
/* {/block 'alert'} */
/* {block 'content'} */
class Block_152645a5afd6baf56b5_40459165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_213375a5afd6bb07a97_56437742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
