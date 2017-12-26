<?php
/* Smarty version 3.1.30, created on 2017-12-25 14:55:41
  from "F:\phpStudy\WWW\wangzhe\home\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40a0edc7e141_18186184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e62b80a90b7bef11013a41215287b2cbec777e3' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\home\\View\\index.tpl',
      1 => 1514184938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a40a0edc7e141_18186184 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>title</title>
        <meta charset="utf8" />
    </head>
    <body>
        <table border="1" width="600" align="center" style="text-align: center;">
              <th>管理员ID</th><th>管理员名称</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
             <tr>
             <td><?php echo $_smarty_tpl->tpl_vars['value']->value['admin_id'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['value']->value['admin_name'];?>
</td>
             </tr> 
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>
    </body>
</html>
<?php }
}
