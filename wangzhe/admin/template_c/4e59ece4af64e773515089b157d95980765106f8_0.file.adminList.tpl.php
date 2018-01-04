<?php
/* Smarty version 3.1.30, created on 2017-12-28 11:20:00
  from "F:\phpStudy\WWW\wangzhe\admin\template\Admin\adminList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4462e0506600_47570864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e59ece4af64e773515089b157d95980765106f8' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Admin\\adminList.tpl',
      1 => 1514193231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4462e0506600_47570864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59335a4462e04d1062_42607761', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175065a4462e04f8e44_36306634', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107395a4462e05048c7_74200723', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_59335a4462e04d1062_42607761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
管理员管理-列表<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_175065a4462e04f8e44_36306634 extends Smarty_Internal_Block
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

							管理员列表

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
                                                                                           
                                                                            <button id="sample_editable_1_new" class="btn green" onclick="$('#addAdmin').show()">

										添加 <i class="icon-plus"></i>

										</button>

									</div>

									

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>
                                                                                        <th>ID</th>
											<th>用户名</th>

											<th>用户密码</th>

											<th>创建时间</th>
                                                                                          
                                                                                        <th>状态</th>
                                                                                        
											<th>操作</th>
                                                                                        
										</tr>

									</thead>

									<tbody>
                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">

											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
</td>

											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
</td>

											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_pwd'];?>
</td>

											<td class="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_time'];?>
</td>
                                                                                        <td class="center editStatus" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_status'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['admin_status'] == 1) {?>开启<?php } else { ?>关闭<?php }?></td>
                                                                                    
                                                                                        <td>                                                                                        
                                                                                            <a href="../admin/php/admin/adminUpdatepwd.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
">重置密码</a>

                                                                                             <a href="../admin/php/admin/adminDelete.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
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
class Block_107395a4462e05048c7_74200723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php echo '<script'; ?>
>
        $("#saveAdmin").click(function(){

            var name=$("input[name='add_admin_name']").val();
            var pwd=$("input[name='add_admin_pwd']").val();
            $.ajax({
                type:"post",
                url:"index.php?class=admin&action=add",
                data:{name:name,pwd:pwd},
                success:function(data){
                    data=$.parseJSON(data);
                    console.log(data.code);
                 if(data.code==200)
                    { 
                alert("添加成功");
                location.reload();
                    }
                   else{
                 alert("添加失败");
                location.reload();
                       }
            
                 }
            });
    });
    
    $(".editStatus").click(function(){
        var id=$(this).attr("id");
        var status=$(this).attr("status");
        
        
        $.ajax({
                type:"post",
                url:"index.php?class=admin&action=editStatus",
                data:{id:id,status:status},
                success:function(data){
                    data=$.parseJSON(data);
                    console.log(data.code);
                 if(data.code==200)
                    { 
                           location.reload();
                    }
                   else{
                  alert(data.message);
                       }
            
                 }
            });
            
    });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
