<?php
/* Smarty version 3.1.30, created on 2018-01-03 17:18:41
  from "F:\phpStudy\WWW\wangzhe\admin\template\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4c9ff17bf238_11652253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1825365255a33eab12065efea3f2b829bea37e7' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\layout.tpl',
      1 => 1514971097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4c9ff17bf238_11652253 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258855a4c9ff166e217_26145288', 'title');
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

						<span class="username"><?php echo $_COOKIE['admin_name'];?>
</span>

						<i class="icon-angle-down"></i>

						</a>

	
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

				

				

				 <?php if (@constant('CLASS') == "index") {?>
                                        <li class="start active">
                                <?php } else { ?>
                                         <li class="start">  
                                <?php }?>                                
					<a href="index.php?class=Index&action=shoye">

					<i class="icon-home"></i> 
                             

					<span class="title">首页</span>

					<span class="selected"></span>

					</a>

				</li>
                                
                                <?php if (@constant('CLASS') == "Admin") {?>
                                        <li class="start active">
                                <?php } else { ?>
                                         <li class="start">  
                                <?php }?> 

					<a href="index.php?class=Admin&action=adminList">

					<i class="icon-home"></i> 

					<span class="title">管理员管理</span>

					<span class="selected"></span>

					</a>

                                        </li>
                      		<li class="start ">

					<a href="index.php?class=Hero&action=HeroList">

					<i class="icon-home"></i> 

					<span class="title">英雄管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <li class="start ">

					<a href="index.php?class=Vocation&action=vocationList">

					<i class="icon-home"></i> 

					<span class="title">职业管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <li class="start ">

					<a href="index.php?class=Prop&action=propList">

					<i class="icon-home"></i> 

					<span class="title">道具管理</span>

					<span class="selected"></span>

					</a>

				</li>
                                <li class="start ">

					<a href="index.php?class=Skill&action=SkillList">

					<i class="icon-home"></i> 

					<span class="title">技能管理</span>

					<span class="selected"></span>

					</a>

				</li>
				
                                <li class="start ">
                                    <a href="index.php?class=Posy&action=PosyList">
					<i class="icon-home"></i>                                           
					<span class="title">铭文管理</span>
					<span class="selected"></span>
					</a>
				</li>
                                
                                 <li class="start ">
                                    <a href="index.php?class=yx_Skill&action=yx_Skill_List">
					<i class="icon-home"></i>                                           
					<span class="title">英雄技能管理</span>
					<span class="selected"></span>
					</a>
				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50105a4c9ff175c300_96721294', 'content');
?>

		<!-- BEGIN PAGE -->

		

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

		</div>

		<!-- END PAGE -->

	</div>

                                
                                
                             
	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

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

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3555a4c9ff1762d09_82570987', 'js');
?>

<?php }
/* {block 'title'} */
class Block_258855a4c9ff166e217_26145288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_50105a4c9ff175c300_96721294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_3555a4c9ff1762d09_82570987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
