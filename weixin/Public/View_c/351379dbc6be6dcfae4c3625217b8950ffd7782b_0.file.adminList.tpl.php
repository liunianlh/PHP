<?php
/* Smarty version 3.1.30, created on 2018-01-17 16:43:27
  from "C:\www\movie\Application\Admin\View\Admin\adminList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f0caf280e70_52830883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '351379dbc6be6dcfae4c3625217b8950ffd7782b' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\Admin\\adminList.tpl',
      1 => 1515554282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
  ),
),false)) {
function content_5a5f0caf280e70_52830883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5455a5f0caf235423_34468396', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187615a5f0caf26a178_32367815', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109875a5f0caf27ac94_57716964', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_5455a5f0caf235423_34468396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    管理员管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_187615a5f0caf26a178_32367815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div  id="addAdmin" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

				<div class="modal-header">

					<button class="close" type="button" onclick="$('#addAdmin').hide()"></button>

					<h3>添加管理员</h3>

				</div>

				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                                <div class="control-group">

                                                        <label class="control-label">用户名：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写用户名称" class="m-wrap small" name="add_admin_name">
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label">密码：</label>
                                                        <div class="controls">
                                                                <input type="password" placeholder="请填写密码" class="m-wrap medium" name="add_admin_pwd">
                                                        </div>

                                                </div>
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="saveAdmin"><i class="icon-ok"></i> 添加</button>
                                            </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
    

     <div  id="level" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

				<div class="modal-header">

					<button class="close" type="button" onclick="$('#level').hide()"></button>

					<h3>管理员等级选择</h3>

				</div>

				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                        <label class="control-label">请选择等级：</label>

                                                        <div class="controls">
                                                            <select name="level" class="levels">
                                                                
                                                            </select>
                                                        </div>
                                                </div>

                                                
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="saveLevel"><i class="icon-ok"></i> 修改</button>
                                            </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
    
    
     <div class="page-container row-fluid">


		<!-- BEGIN PAGE -->
			
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

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">后台管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">管理员</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">管理员列表</a></li>

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

								<div class="caption"><i class="icon-edit"></i>Editable Table</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

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
											<th>id</th>
											<th>管理员名称</th>
											<th>密码</th>
											<th>状态</th>
                                                                                        <th>等级</th>
                                                                                        <th>操作</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['pwd'];?>
</td>
											<td state="<?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="state"><?php if ($_smarty_tpl->tpl_vars['v']->value['state'] == 1) {?>开启<?php } else { ?>关闭<?php }?></td>     
                                                                                        <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="level" rank="<?php echo $_smarty_tpl->tpl_vars['v']->value['rank'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['rank'] == 0) {?>普通管理员<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['rank'] == 1) {?>高级管理员<?php } else { ?>超级管理员<?php }?></td> 
                                                                                        <td><button class="reset" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">重置密码</button><button class="delete" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rank="<?php echo $_smarty_tpl->tpl_vars['v']->value['rank'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['rank'] == 2) {?>/No/<?php } else { ?>Delete<?php }?></button></td>
										
										</tr>
                                                                            <?php
}
} else {
?>

                                                                                <tr>
                                                                                    <td>暂无数据</td>
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
				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>
 <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_109875a5f0caf27ac94_57716964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
         $("#saveAdmin").click(function(){
            var name = $("input[name='add_admin_name']").val();
            var pwd = $("input[name='add_admin_pwd']").val();
            
                $.ajax({
                    type:"post",
                    url:"index.php?m=Admin&c=Index&a=addAdmin",
                    data:{name:name,pwd:pwd},
                    success:function(data){
                        data = $.parseJSON(data);
                        if(data.code==200){
                            alert("添加成功！");
                            history.go(0);
                        }else{
                            alert("添加失败！");
                        }
      
                    }
                });
            
         })
         
         //修改状态
         $(".state").click(function(){
             var id = $(this).attr("id");
             var state = $(this).attr("state");
             $.ajax({
                 type:"post",
                 url:"index.php?m=Admin&c=Index&a=state",
                 data:{id:id,state:state},
                 success:function(data){
                     data = $.parseJSON(data);
                        if(data.code==200){
                            alert("修改成功！");
                            history.go(0);
                        }else{
                            alert("修改失败,请重试！");
                            history.go(0);
                        }
      
      
                 }
             })
         })
         
         
          //修改管理员等级
         $(".level").click(function(){
             var id = $(this).attr("id");
             var level = $(this).attr("level");
             $("#level input[name='levelid']").val(id);
             $.ajax({
                 type:"post",
                 url:"index.php?m=Admin&c=Index&a=level",
                 data:{id:id,level:level},
                 success:function(data){
                     data = $.parseJSON(data);
                     console.log(data.data[0]);
                     if(data.code=200){
                         for(var i=0;i<data.data.length;i++){
                             $(".levels").append("<option id='"+id+"'>"+data.data[i].rank+"</option>");
                         }
                         $("#level").show();
                         $("#saveLevel").click(function(){
                             var id = $("#level input[name='levelid']").val();
                             var rank = $("#level select[name='level']").val();
                             $.ajax({
                                type:"post",
                                url:"index.php?m=Admin&c=Index&a=saveLevel",
                                data:{id:id,rank:rank},
                                success:function(data){  
                                     data = $.parseJSON(data);
                                     if(data.code=200){
                                         alert("修改成功！");
                                         history.go(0);
                                     }else{
                                         alert("修改失败，请重试");
                                     }
                                }
                             })
                         })
                     }
                 }
             })
         })
         
         //重置密码
          $(".reset").click(function(){
              var id = $(this).attr("id");
                $.ajax({
                    type:"get",
                    url:"index.php?m=Admin&c=Index&a=reset&resetid="+id,
                    success:function(data){
                        data = $.parseJSON(data);
                        if(data.code=200){
                            alert("修改成功！");
                            history.go(0);
                        }else{
                            alert("修改失败，请重试");
                        }
                        
                    }
                });
            
         })
         
         //删除管理员  （超级管理员除外）
         $(".delete").click(function(){
             var id = $(this).attr("id");
                  $.ajax({
                    type:"get",
                    url:"index.php?m=Admin&c=Index&a=delete&adminid="+id,
                    success:function(data){
                        data = $.parseJSON(data);
                        console.log(data);
                        if(data.code==200){
                            alert(data.message);
                            history.go(0);
                        }else{
                            alert(data.message);
                            history.go(0);
                        }
                    }
                })
         })

          
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
