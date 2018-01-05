<?php
/* Smarty version 3.1.30, created on 2018-01-05 12:20:38
  from "F:\phpStudy\WWW\wangzhe\admin\template\Admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4efd169cb8e3_25223577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11396af88e2b0c7be9134275a9ea986457ff1815' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Admin\\index.tpl',
      1 => 1513933522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4efd169cb8e3_25223577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120885a4efd169c88f7_11868006', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233135a4efd169cabd8_48208064', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_120885a4efd169c88f7_11868006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
首页<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_233135a4efd169cabd8_48208064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="page-content">
    <div class="container-fluid">
        欢迎进入！
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
