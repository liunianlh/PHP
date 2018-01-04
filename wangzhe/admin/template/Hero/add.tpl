
{block name=title}英雄管理-添加{/block}

{extends file="../layout.tpl"}

{block name=content}

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
							 <small>英雄添加</small>

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
												<div class="control-group">
													<label class="control-label">英雄名称：</label>
													<div class="controls">
														<input type="text" placeholder="请输入英雄名称" class="m-wrap small"  name="name"/>
													</div>
												</div>
                                                                                              
                                                                                                <div class="control-group">
													<label class="control-label">上传图片：</label>
													<div class="controls" >
                                                                                                            <img src="" width="100" style="display:none" id="upload_img"/>
                                                                                                            <button type="button" id="upload">上传头像</button>
												            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                                            <input type="hidden" value="" id="upload_url" name="photo"/>
													</div> 
												</div>
                                                                                            
                                                                                            
                                                                                            
                                                                                                
                                                                                                 <div class="control-group">
													<label class="control-label">英雄职业：</label>
													<div class="controls">
													<select  name='vocation_id'>
                                                                                                            {foreach from=$vocationList key=k item=v}
                                                                                                                <option value="{$v.id}">{$v.name}</option>
                                                                                                             {/foreach}
                                                                                                        </select>
													</div>
												</div>
                                                                                                 <div class="control-group">
													<label class="control-label">生存能力：</label>
													<div class="controls">
														<input type="text" placeholder="请输入生存能力" class="m-wrap small"  name="live"/>
													</div>
												</div>
                                                                                                        <div class="control-group">
													<label class="control-label">攻击伤害：</label>
													<div class="controls">
														<input type="text" placeholder="请输入伤害能力" class="m-wrap small"  name="hurt"/>
													</div>
												</div>
                                                                                                  <div class="control-group">
													<label class="control-label">技能效果：</label>
													<div class="controls">
														<input type="text" placeholder="上手难度" class="m-wrap small"  name="effect"/>
													</div>
												</div>       
                                                                                                 <div class="control-group">
													<label class="control-label">上手难度：</label>
													<div class="controls">
														<input type="text" placeholder="上手难度" class="m-wrap small"  name="difficulty"/>
													</div>
												</div>
                                                                                                 <div class="control-group">
													<label class="control-label">本周免费：</label>
													<div class="controls">
                                                                                                            <input type="radio" name="free_week" value="1" class="m-wrap small" />否
                                                                                                            <input type="radio" name="free_week" value="2" class="m-wrap small" />是
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">新手推荐：</label>
													<div class="controls">
                                                                                                            <input type="radio" name="new_recomment" value="1" class="m-wrap small" />否
                                                                                                            <input type="radio" name="new_recomment" value="2" class="m-wrap small" />是
													</div>
												</div>
                                                                                                 <div class="control-group">
													<label class="control-label">英雄故事：</label>
													<div class="controls">
                                                                                                            <textarea name="story" class="m-wrap large" name="story"></textarea>
													</div>
                                                                                                 </div>
                                                                                                        
												<div class="form-actions">
                                                                                                    <div class="controls">
													<button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 添加</button>
                                                                                                    </div>
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
    {/block}
 
 
 {block name=js}
     
     <script>
        {literal}
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
            $.ajax({
                type:"post",
                url:"index.php?class=Hero&action=insert",
                data:$("form").serializeArray(),
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                         window.location.href="index.php?class=Hero&action=HeroList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        });
        
         
        {/literal}
     </script>
 
 {/block}
