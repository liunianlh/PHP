<?php
/* Smarty version 3.1.30, created on 2018-01-17 17:04:22
  from "C:\www\movie\Application\Admin\View\Buy\buy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f1196479256_03494889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ef12618defef7235d5d124262a4bfe4f74bc31' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\Buy\\buy.tpl',
      1 => 1515499682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../index.tpl' => 1,
  ),
),false)) {
function content_5a5f1196479256_03494889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92175a5f119644c2c0_29191229', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319955a5f11964716f6_01908050', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271175a5f1196476556_72174129', 'alert');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292835a5f1196478476_69677646', 'js');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_92175a5f119644c2c0_29191229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    用户管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_319955a5f11964716f6_01908050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- BEGIN PAGE CONTAINER-->        

<div class="container-fluid">

<!-- BEGIN PAGE HEADER-->

<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN STYLE CUSTOMIZER -->

                <!-- END BEGIN STYLE CUSTOMIZER -->  

                <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                <h3 class="page-title">

                        订单详情 <small>订单详情管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">订单详情</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">订单详情管理</a>


                        </li>

                       

                </ul>

                <!-- END PAGE TITLE & BREADCRUMB-->

        </div>

</div>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->

<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN EXAMPLE TABLE PORTLET-->

                <div class="portlet box blue">

                        <div class="portlet-title">

                                <div class="caption"><i class="icon-edit"></i>订单详情列表</div>

                    

                        </div>
                        <div class="portlet-body">
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>订单详情id</th>
                                                        <th>用户名</th>
                                                        <th>电影名称</th>
                                                        <th>订单信息</th>
                                                </tr>

                                        </thead>

                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                <tr class="">
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["u_id"];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["m_id"];?>
</td>
                                                        <?php if ($_smarty_tpl->tpl_vars['v']->value["schedule"] == 1) {?>
                                                        <td>订票成功</td>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["schedule"] == 2) {?>
                                                        <td>付款成功</td>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["schedule"] == 3) {?>
                                                        <td>退票中</td>
                                                        <?php } else { ?>
                                                        <td>退票成功</td>  
                                                        <?php }?>
                                                </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>

                                </table>

                        </div>

                </div>

                <!-- END EXAMPLE TABLE PORTLET-->

        </div>

</div>

<!-- END PAGE CONTENT -->
<?php
}
}
/* {/block 'content'} */
/* {block 'alert'} */
class Block_271175a5f1196476556_72174129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'alert'} */
/* {block 'js'} */
class Block_292835a5f1196478476_69677646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
   
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
