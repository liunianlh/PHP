<?php
/* Smarty version 3.1.30, created on 2018-01-05 12:04:45
  from "F:\phpStudy\WWW\wangzhe\admin\template\Skin\skinList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ef95d837f75_31127477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1920868ae23643c530b33176113c3971f2288b' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Skin\\skinList.tpl',
      1 => 1515117132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4ef95d837f75_31127477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110125a4ef95d80e908_16875595', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145735a4ef95d82c848_72767131', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89945a4ef95d8371d9_06995854', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_110125a4ef95d80e908_16875595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
道具管理-列表<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_145735a4ef95d82c848_72767131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <div  id="addAdmin" style="width: 100%;height: 100%; display: none;background: rgba(0,0,0,0.5);position:absolute;top: 0px;left: 0px;z-index: 999;">
                        <div class="modal">

				<div class="modal-header">

                                    <button class="close" type="button" onclick="$('#addAdmin').hide();"></button>

					<h3>添加管理员</h3>

				</div>

				<div class="modal-body">

					<!-- BEGIN FORM-->

											<form action="#" class="form-horizontal">

												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">用户名：</label>

													<div class="controls">

                                                                                                            <input name="add_admin_name" type="text" placeholder="请输入用户名" class="m-wrap small" style=" height: 26px" />


													</div>

												</div>

												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">密码：</label>

													<div class="controls">

                                                                                                            <input name="add_admin_pwd" type="password" placeholder="请输入密码" class="m-wrap medium" style="height: 26px" />

													</div>

												</div>
                                                                                            <div class="control-group" style="text-align: center;">
                                                                                                <button type="button" class="btn blue" id="saveAdmin">添加</button>
                                                                                             </div>
											</form>

											<!-- END FORM-->  

				</div>

			</div>
    
                </div>

		<!-- BEGIN PAGE -->

		
		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->        

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

						皮肤管理

						</h3>

						

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->


							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">
                                                                            <a href="index.php?class=Skin&action=add">         
                                                                            <button id="sample_editable_1_new" class="btn green">

										添加 <i class="icon-plus"></i>

										</button>
                                                                            </a>
									</div>

									

								</div>

                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1" style="">

									<thead>

                                                                            <tr>
                                                                                         <th  style="text-align:center;width:50px;">编号</th>

											

											<th  style="text-align:center;">皮肤名称</th>
                                                                                          
                                                                                        <th  style="text-align:center;">英雄头像</th>
                                                                                        <th  style="text-align:center;">皮肤图片</th>
                                                                                        <th  style="text-align:center;">英雄</th>
                                                                                        <th  style="text-align:center;">操作</th>
										</tr>

									</thead>

									<tbody>
                                                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">

                                                                                    <td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>

											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>

											
                                                                                         <td style="text-align:center;padding-top: 10px;">
                                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" style="width: 80px;height: 80px;border: 1px solid sienna">
                                                                                        </td>
                                                                                        <td style="text-align:center;padding-top: 10px;">
                                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['big_image'];?>
" style="width: 80px;height: 80px;border: 1px solid sienna">
                                                                                        </td>
                                                                                   
											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['vocationList']->value[$_smarty_tpl->tpl_vars['v']->value['hero_id']];?>
</td>

                                                                                    
                   

                                                                                            
                                                                                   
                                                                       
                                                                                        <td style="text-align:center;padding-top: 40px;">                                                                                       
                                                                                            <a href="index.php?class=Skin&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
                                                                                       
                                                                                             <a href="index.php?class=Skin&action=Delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
                                                                                                
                                                                                                
                                                                                        </td>
										
                                                                           
										

									
                                                                                        </tr>
                                                                                <?php
}
} else {
?>

                                                                                    <tr>
                                                                                        暂无数据
                                                                                    </tr>
                                                                                <?php
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

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_89945a4ef95d8371d9_06995854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    

    
<?php
}
}
/* {/block 'js'} */
}
