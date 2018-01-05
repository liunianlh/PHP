<?php
/* Smarty version 3.1.30, created on 2018-01-05 17:24:18
  from "F:\phpStudy\WWW\wangzhe\admin\template\Prop\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f4442b06f61_01882246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1438dbf764c97f958dd7f2c8d8fa52701bfe77c1' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Prop\\add.tpl',
      1 => 1514431479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4f4442b06f61_01882246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60115a4f4442ad39e3_64839513', 'title');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106485a4f4442aeff19_56607525', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138095a4f4442b01384_99218320', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_60115a4f4442ad39e3_64839513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
道具管理-添加<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_106485a4f4442aeff19_56607525 extends Smarty_Internal_Block
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
							道具    
							 <small>道具添加</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">后台管理</a> 

								<span class="icon-angle-right"></span>
                                                        </li>

							<li>

								<a href="#">道具管理</a>

								<span class="icon-angle-right"></span>
                                                        </li>
                                                        <li><a href="#">道具添加</a>
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
												<div class="control-group">
													<label class="control-label">道具名称：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具" class="m-wrap small"  name="name"/>
													</div>
												</div>
                                                                                                
                                                                                                <div class="control-group">
													<label class="control-label">上传图片：</label>
													<div class="controls" >
                                                                                                            <img src="" width="100" style="display:none" id="upload_img"/>
                                                                                                            <button type="button" id="upload">上传头像</button>
												            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                                            <input type="hidden" value="" id="upload_url" name="url"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">道具类型：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具类型" class="m-wrap small" name="leixing"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">道具售价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具售价" class="m-wrap small" name="shoujia"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">道具总价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具总价" class="m-wrap small" name="zongjia"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">道具属性：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具属性" class="m-wrap small" name="shuxing"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">道具描述：</label>
													<div class="controls">
														<input type="text" placeholder="请输入道具描述" class="m-wrap small" name="miaoshu"/>
													</div>
												</div>
												<div class="form-actions">
													<button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 添加</button>
													
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
class Block_138095a4f4442b01384_99218320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
        
        $("#upload").click(function(){
            $("input[type='file']").click();
        })
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
            var leixing = $("input[name='leixing']").val();
            var url = $("input[name='url']").val();
            var shoujia = $("input[name='shoujia']").val();
            var zongjia = $("input[name='zongjia']").val();
            var shuxing = $("input[name='shuxing']").val();
             var miaoshu = $("input[name='miaoshu']").val();
            console.log(url);
            $.ajax({
                type:"post",
                url:"index.php?class=Prop&action=insert",
                data:{name:name,url:url,leixing:leixing,shoujia:shoujia,zongjia:zongjia,shuxing:shuxing,miaoshu:miaoshu},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=Prop&action=propList"
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
