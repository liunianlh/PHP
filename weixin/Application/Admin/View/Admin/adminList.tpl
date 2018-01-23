
{extends file='index.tpl'}
{block name=title}
    管理员管理
{/block} 

{block name=content}
{*    添加管理员*}
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
    
{*    //修改管理员等级*}
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
                                                                            {foreach from=$adminList item=v}
										<tr class="">
											<td>{$v.id}</td>
											<td>{$v.name}</td>
											<td>{$v.pwd}</td>
											<td state="{$v.state}" id="{$v.id}" class="state">{if $v.state ==1}开启{else}关闭{/if}</td>     
                                                                                        <td id="{$v.id}" class="level" rank="{$v.rank}">{if $v.rank ==0}普通管理员{else if $v.rank==1}高级管理员{else}超级管理员{/if}</td> 
                                                                                        <td><button class="reset" id="{$v.id}">重置密码</button><button class="delete" id="{$v.id}" rank="{$v.rank}">{if $v.rank==2}/No/{else}Delete{/if}</button></td>
										
										</tr>
                                                                            {foreachelse}
                                                                                <tr>
                                                                                    <td>暂无数据</td>
                                                                                </tr>
                                                                            {/foreach}
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
 {/block}
 
 
 {block name=js}
     
     <script>
         {literal}
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

          {/literal}
     </script>
 
 {/block}