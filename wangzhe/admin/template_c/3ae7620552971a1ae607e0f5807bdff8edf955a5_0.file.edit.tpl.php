<?php
/* Smarty version 3.1.30, created on 2017-12-25 20:00:48
  from "F:\phpStudy\WWW\wangzhe\admin\template\Vocation\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40e870a546c4_90482136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae7620552971a1ae607e0f5807bdff8edf955a5' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Vocation\\edit.tpl',
      1 => 1514203245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a40e870a546c4_90482136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77835a40e870a2e1f5_63403547', 'title');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10445a40e870a49f76_95466032', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12135a40e870a52008_69711427', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_77835a40e870a2e1f5_63403547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
职业员管理-修改<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_10445a40e870a49f76_95466032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="page-content">
    <div class="container-fluid">

  
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

                              <button data-dismiss="modal" class="close" type="button"><button>
                                             <h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

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

									<li class="color-black current color-default" data-

                                                                            style="default"></li>
                                                                        <li class="color-blue" data-style="blue"></li>

                                                                        <li class="color-brown" data-style="brown"></li>>

                                                                        <li class="color-purple" data-style="purple"></li>>

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

						<h3 class="page-title">
							英雄
							 <small>英雄职业添加</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">后台管理</a> 

								<span class="icon-angle-right"></span>
                                                        </li>

							<li>

								<a href="#">技能管理</a>

								<span class="icon-angle-right"></span>
                                                        </li>
                                                        <li><a href="#">英雄技能管理列表</a>
                                                        </li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue tabbable">

							<div class="portlet-title">

								<div class="caption">

									<i class="icon-reorder"></i>

									<span class="hidden-480">General Layouts</span>

								</div>

							</div>

                                                    
                                                    
                                                    

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">
										<li><a href="#portlet_tab3" data-toggle="tab">Inline</a></li>
									</ul>
									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['id'];?>
" name="id">
												<div class="control-group">
													<label class="control-label">职业名称：</label>
													<div class="controls">
                                                                                                            <input type="text" placeholder="请输入职业" class="m-wrap small"  name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['name'];?>
"/>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">英文名称：</label>
													<div class="controls">
                                                                                                            <input type="text" placeholder="请输入英文职业名称" class="m-wrap small" name="eng_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['eng_name'];?>
"/>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">上传图片：</label>
													<div class="controls" >
                                                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['image'];?>
" width="100" id="upload_img"/>
                                       
												            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['image'];?>
" id="upload_url" name="url"/>
													</div>
												</div>
												<div class="form-actions">
													<button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 修改</button>
													
												</div>

											</form>

											<!-- END FORM-->  

										</div>

										
									</div>

								</div>

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->
   </div>
</div>
    <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_12135a40e870a52008_69711427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
        
 
        $("#upload_img").click(function(){
            $("input[type='file']").click();
        })
        
        $("input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfile",$("input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?class=index&action=upload",
                data:fd,
                processData:false,
                contentType:false,
                success:function(e){
                    console.log(e);
                  var e=$.parseJSON(e);
                    if(e.code ==100){
                        alert("上传失败");
                    }else{
                        $("#upload_img").attr("src",e.data);
                        $("#upload_url").val(e.data);
                        $("#upload").hide();
                        $("#upload_img").show();
                    }
                }
            })
        });
        
        $("#form_submit").click(function(){
            var name = $("input[name='name']").val();
            var eng_name = $("input[name='eng_name']").val();
            var url = $("input[name='url']").val();
            var id=$("input[name='id']").val();
            console.log(url);
            $.ajax({
                type:"post",
                url:"index.php?class=Vocation&action=update",
                data:{name:name,eng_name:eng_name,url:url,id:id},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=Vocation&action=vocationList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        });
        
         
        
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}