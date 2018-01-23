<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:48:22
  from "C:\www\movie\Application\Home\View\Orderlist\orderlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ffce6544c49_99670450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc8c66ce04b7e134b39e1615a8933eadd8375ad' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Orderlist\\orderlist.html',
      1 => 1516240097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ffce6544c49_99670450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>订单列表</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/public.css"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<style>
		    *{
			
			}
			body{
			margin:0;
			padding:0;
				width: 100%;
				background-color: #E3E3E3;
			}
			.main{
				width: 100%;
			}
			.content{
				width: 100%;
				color: #D3D3D3;
				background: #fff;
				text-indent:20px;
				display: inline-block;
				position: relative;
				margin-bottom: 5%;
			}
			.content>h3{
				font-weight: bold;
				width: 75%;
			}
			.content>h3>span{
				font-size: 18px;
			}
			.content>div:nth-of-type(1){
				width: 75%;
				margin: 0;
			}
			.content>p{
				width: 75%;
			}
			.money{
				position: absolute;
				top: 25%;
				right: 5%;
				color: red;
				font-size: 2em;
				display: inline-block;
			}
		</style>
	</head>
	<body>
		
		<div class="main">
                    <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<div class="content">
                            <a href="?m=Home&c=Dingdan&a=DingdanInfo&m_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['list']['m_id'];?>
&seat=<?php echo $_smarty_tpl->tpl_vars['v']->value['seat'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['v']->value['list']['date'];?>
&time=<?php echo $_smarty_tpl->tpl_vars['v']->value['list']['time'];?>
" style="text-decoration: none;color:black;display: block;">
				<h3><?php echo $_smarty_tpl->tpl_vars['v']->value['list']['list']["name"];?>
 &nbsp;<span>1张</span></h3>
				<div>
					<span><?php echo $_smarty_tpl->tpl_vars['v']->value['list']["date"];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['list']["time"];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['list']['list']["language"];?>
2D)</span>
				</div>
				<p><?php echo $_smarty_tpl->tpl_vars['v']->value['list']["t_id"];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['list']["h_id"];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['list']["people_row"];?>
排 <?php echo $_smarty_tpl->tpl_vars['v']->value['list']["people_line"];?>
座</p>
				<div class="money">
					<?php echo $_smarty_tpl->tpl_vars['v']->value['list']["money"];?>

				</div>
                                </a>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php } else { ?>
                        <div style="text-align:center;width: 100%;color: #D3D3D3;background: #fff;display: inline-block;position: relative;margin-bottom: 5%;color:red;">
				<h1>您还没有购买电影票哦</h1>
			</div>
                        <?php }?>
			
		</div>
		
	</body>
</html>
<?php }
}
