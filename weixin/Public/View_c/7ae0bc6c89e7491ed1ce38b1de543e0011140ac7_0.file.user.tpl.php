<?php
/* Smarty version 3.1.30, created on 2018-01-17 16:45:38
  from "C:\www\movie\Application\Admin\View\User\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f0d32745361_98334313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae0bc6c89e7491ed1ce38b1de543e0011140ac7' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\User\\user.tpl',
      1 => 1516178731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../index.tpl' => 1,
  ),
),false)) {
function content_5a5f0d32745361_98334313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29355a5f0d32725827_14607089', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314405a5f0d3273e6a8_04980957', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312765a5f0d32742f31_55543102', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_29355a5f0d32725827_14607089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    用户管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_314405a5f0d3273e6a8_04980957 extends Smarty_Internal_Block
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

                        用户列表 <small>用户列表管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">用户列表</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">用户列表管理</a>


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

                                <div class="caption"><i class="icon-edit"></i>用户列表</div>

                    

                        </div>
                        <div class="portlet-body">
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>用户id</th>
                                                        <th>用户名称</th>
                                                        <th>用户头像</th>
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
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</td>
                                                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value["url"];?>
" style="width: 69px;"></td>
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
/* {block 'js'} */
class Block_312765a5f0d32742f31_55543102 extends Smarty_Internal_Block
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
