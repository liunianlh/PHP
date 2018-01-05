{extends file="../layout.tpl"}
{block name=title}英雄管理-列表{/block}

{block name=content}

{*添加的弹框*}
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

							英雄管理

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
                                                                            <a href="index.php?class=Hero&action=add">         
                                                                            <button id="sample_editable_1_new" class="btn green">

										添加 <i class="icon-plus"></i>

										</button>
                                                                            </a>
									</div>

									

								</div>

                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1" style="">

									<thead>

                                                                            <tr>
                                                                                <th  style="text-align:center;">编号</th>

											

											<th  style="text-align:center;">英雄名称</th>
                                                                                         <th  style="text-align:center;">英雄头像</th> 
                                                                                         <th  style="text-align:center;">英雄介绍图</th>
                                                                                        <th  style="text-align:center;">英雄职业</th>
                                                                                        <th  style="text-align:center;">是否本周免费</th>
                                                                                        <th  style="text-align:center;">新手推荐</th>                                                                                       
                                                                                        <th  style="text-align:center;">生存能力</th>
                                                                                        <th  style="text-align:center;">攻击伤害</th>
                                                                                        <th  style="text-align:center;">技能效果</th>
                                                                                        <th  style="text-align:center;">上手难度</th>
                                                                                        <th  style="text-align:center;">英雄故事</th>
                                                                                        <th  style="text-align:center;">历史上的它</th>
                                                                                        <th  style="text-align:center;">主升/副升</th>
                                                                                      
                                                                                        <th  style="text-align:center;">召唤师技能</th>
                                                                                        
                                                                                    
                                                                                         
                                                                                         <th  style="text-align:center;">最佳搭档</th>                                                                                     
                                                                                        <th  style="text-align:center;">压制英雄</th>
                                                                                         <th  style="text-align:center;">被压制英雄</th>
                                                                                          <th  style="text-align:center;">出装推荐</th>
                                                                                        <th  style="text-align:center;">操作</th>
										</tr>

									</thead>

									<tbody>
                                                                           {foreach from=$list item=v}
										<tr class="">

                                                                                    <td style="text-align:center;padding-top: 40px;">{$v.id}</td>
                                                                                            
                                                                                    
											<td style="text-align:center;padding-top: 40px;">{$v.name}</td>

											<td style="text-align:center;padding-top: 40px;">
                                                                                            
                                                                                            <img src="{$v.photo}">
                                                                                        </td>
                                                                                         <td style="text-align:center;padding-top: 40px;">
                                                                                             <img src="{$v.image}">
                                                                                             
                                                                                             
                                                                                         </td>
                                                                                    <td style="text-align:center;padding-top: 40px;">
                                                                                           {$vocationList[$v.vocation_id]}
                                                                                             
                                                                                         {*{$v.vocation_id}*}
                                                                                         </td>
                                                                                         
                                                                                        {* {foreach from=$vocationList item=value}
                                                                                             {if $value[0].id==$v[0].vocation_id}
											<td style="text-align:center;padding-top: 40px;">{$value.name}</td>
                                                                                            {/if}
                                                                                         {/foreach}*}
                                                                                        
                                                                                         
                                                                                        {*  <td class="center editStatus" id="{$v.admin_id}" status="{$v.admin_status}">{if $v.admin_status==1}开启{else}关闭{/if}</td>
                                                                                    
                                                                                        <td> 
                                                                                         *}
                                                                                         
                                                                                        
                                                                                        <td class="editStatus" id="{$v.id}" status="{$v.free_week}"  style="text-align:center;padding-top: 40px;">
                                                                                            {if $v.free_week==1}
                                                                                                是
                                                                                             {else}
                                                                                                    否
                                                                                             {/if}
                                                                                         
                                                                                            
                                                                                        </td>
                                                                                         <td class="editStatus2" style="text-align:center;padding-top: 40px;"  id="{$v.id}" status="{$v.new_recommend}">
                                                                                            
                                                                                               {if $v.new_recommend==1}
                                                                                                是
                                                                                               {else}
                                                                                                    否
                                                                                                {/if}
                                                                                             
                                                                                            
                                                                                         </td>

											<td style="text-align:center;padding-top: 40px;">{$v.live}</td>

											<td style="text-align:center;padding-top: 40px;">{$v.hurt}</td>
                                                                                        <td style="text-align:center;padding-top: 40px;">{$v.effect}</td>

											<td style="text-align:center;padding-top: 40px;">{$v.difficulty}</td>
                                                                                        <td style="text-align:center;padding-top: 40px;">{$v.story}</td>

											<td style="text-align:center;padding-top: 40px;">{$v.history}</td>
                                                                                        <td class="skill" data-id='{$v.id}' style="text-align:center;padding-top: 40px;">{$v.sm_name}/{$v.ss_name}</td>
                                                                                
                                                                                        
                                                                                        <td class="summoner_skill" style="text-align:center;padding-top: 40px;">{$v.summoner_skill}</td>

                                                                                        {*<td style="text-align:center;padding-top: 10px;">
                                                                                            <img src="{$v.image}" style="width: 80px;height: 80px;border: 1px solid sienna">
                                                                                        </td>
                                                                                            *}
                                                                                        <td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="{$v.id}" data-type="1">{$v.good}</td>
											<td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="{$v.id}" data-type="2">{$v.repress}</td>
                                                                                        <td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="{$v.id}" data-type="3">{$v.berepress}</td>
                                                                                        
                                                                                        
                                                                                        <td class="tools" data-id="{$v.id}" style="text-align:center;padding-top: 40px;">出装推荐</td>
                                                                                        <td style="text-align:center;padding-top: 40px;">                                                                                       
                                                                                            <a href="index.php?class=Hero&action=edit&id={$v.id}">修改</a>
                                                                                       
                                                                                             <a href="index.php?class=Hero&action=Delete&id={$v.id}">删除</a>
                                                                                                
                                                                                                
                                                                                        </td>
										
                                                                           
										

									
                                                                                        </tr>
                                                                                {foreachelse}
                                                                                    <tr>
                                                                                        暂无数据
                                                                                    </tr>
                                                                                {/foreach}								

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
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                {*主升副升技能选择*}
        <div  id="selecySkill" style="width: 100%;height: 100%; display: none;background: rgba(0,0,0,0.5);position:absolute;top: 0px;left: 0px;z-index: 999;">
                        <div class="modal">

				<div class="modal-header">

                                    <button class="close" type="button" onclick="$('#selecySkill').hide();"></button>

					<h3>选择技能</h3>

				</div>

				<div class="modal-body">

					<!-- BEGIN FORM-->

                                        <form action="#" class="form-horizontal" id="skillForm">
                                                                                            <input type="hidden" value="" name="id">
												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">主升技能：</label>

													<div class="controls">
                                                                                                            <select name="sm_suggest">
                                                                                                                
                                                                                                            </select>
													</div>

												</div>

												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">副升技能：</label>

													<div class="controls">
                                                                                                            <select name="ss_suggest">
                                                                                                                
                                                                                                            </select>
                                                                                                          
													</div>

												</div>
                                                                                            <div class="control-group" style="text-align: center;">
                                                                                                <button type="button" class="btn blue" id="saveSkill">确认</button>
                                                                                               </div>
											</form>

											<!-- END FORM-->  

				</div>

			</div>
    
                </div>

                
              
                
{*               召唤师技能*}
   {*   <div  id="Summoner_Skill" style="width: 100%;height: 100%; display: none;background: rgba(0,0,0,0.5);position:absolute;top: 0px;left: 0px;z-index: 999;">
                        <div class="modal">

				<div class="modal-header">

                                    <button class="close" type="button" onclick="$('#selecySkill').hide();"></button>

					<h3>选择技能</h3>

				</div>

				<div class="modal-body">

					<!-- BEGIN FORM-->

                                        <form action="#" class="form-horizontal" id="skillForm">
                                                                                            <input type="hidden" value="" name="id">
												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">主升技能：</label>

													<div class="controls">
                                                                                                            <select name="sm_suggest">
                                                                                                                
                                                                                                            </select>
													</div>

												</div>

												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">副升技能：</label>

													<div class="controls">
                                                                                                            <select name="ss_suggest">
                                                                                                                
                                                                                                            </select>
                                                                                                          
													</div>

												</div>
                                                                                            <div class="control-group" style="text-align: center;">
                                                                                                <button type="button" class="btn blue" id="saveSkill">确认</button>
                                                                                               </div>
											</form>

											<!-- END FORM-->  

				</div>

			</div>
    
            </div>*}
         
            
               {*最佳搭档、压制英雄、被压制英雄选择*}
        <div  id="selectTouch" style="width: 100%;height: 100%; display: none;background: rgba(0,0,0,0.5);position:absolute;top: 0px;left: 0px;z-index: 999;">
                        <div class="modal">

				<div class="modal-header">

                                    <button class="close" type="button" onclick="$('#selectTouch').hide();"></button>

					<h3>选择技能</h3>

				</div>

				<div class="modal-body">

					<!-- BEGIN FORM-->

                                        <form action="#" class="form-horizontal" id="skillForm">
                                                                                            <input type="hidden" value="" name="id">
                                                                                            <input type="hidden" value="" name="type">
												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">英雄选择1:</label>

													<div class="controls">
                                                                                                            <select name="hero1">
                                                                                                                <option value="0">--选择英雄--</option>
                                                                                                                {foreach from=$list key=k item=v}
                                                                                                                    <option value="{$v.id}" >{$v.name}</option>
                                                                                                                {/foreach}
                                                                                                            </select>
													</div>

												</div>
                                                                                               <div class="control-group">
													<label class="control-label" style="font-size: 20px;">推荐理由</label>
													<div class="controls">
                                                                                                            <textarea name="remark1" class="m-wrap"></textarea>                                                                
													</div>

												</div>
												<div class="control-group">

													<label class="control-label" style="font-size: 20px;">英雄选择2:</label>

													<div class="controls">
                                                                                                            <select name="hero2">
                                                                                                                <option value="0">--选择英雄--</option>
                                                                                                                {foreach from=$list key=k item=v}
                                                                                                                    <option value="{$v.id}" >{$v.name}</option>
                                                                                                                {/foreach}
                                                                                                            </select>
                                                                                                          
													</div>

												</div>
                                                                                                            
												<div class="control-group">
													<label class="control-label" style="font-size: 20px;">推荐理由</label>
													<div class="controls">
                                                                                                            <textarea name="remark2" class=" m-wrap"></textarea>                                                                
													</div>

												</div>
                                                                                            <div class="control-group" style="text-align: center;">
                                                                                                <button type="button" class="btn blue save" id="">确认</button>
                                                                                               </div>
											</form>

											<!-- END FORM-->  

				</div>

			</div>
    
                </div>

                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
            
                                                                                                            
                                                                                                            
                                                                                                            
                  
               {*出装推荐*}
        <div  id="selectTools" style="width: 100%;height: 100%; display: none;background: rgba(0,0,0,0.5);position:absolute;top: 0px;left: 0px;z-index: 999;">
                        <div class="modal">

				<div class="modal-header">

                                    <button class="close" type="button" onclick="$('#selectTools').hide();"></button>

					<h3>出装推荐</h3>

				</div>

				<div class="modal-body">

					<!-- BEGIN FORM-->

                                        <form action="#" class="form-horizontal" id="skillForm">
                                            <p style="color:red; margin-left:200px;" >提示:必须选择6个装备</p>
                                                                                            <input type="hidden" value="" name="id">
                                                                                         
                                                                                            <div class="control-group" id="tools1">

													<label class="control-label" style="font-size: 20px;">出装选择1:</label>

													<div class="controls">
                                                                                                            <select name="tools1" multiple="multiple" style="width:100px;">
                                                                                                                {foreach from=$toolsList key=k item=v}
                                                                                                                    <option value="{$v.id}">{$v.name}</option>
                                                                                                                {/foreach}
                                                                                                            </select>
                                                                                                            <div style="display:inline-block;">
                                                                                                                <a class="add">=></a>
                                                                                                                <br/>
                                                                                                                 <a class="delete"><=</a>
                                                                                                            </div>
                                                                                                            <select name="selectTools1" multiple="multiple" style="width:100px;">

                                                                                                            </select>
													</div>

												</div>
                                                                                               <div class="control-group">
													<label class="control-label" style="font-size: 20px;">推荐理由</label>
													<div class="controls">
                                                                                                            <textarea name="miaosu1" class="m-wrap"></textarea>                                                                
													</div>

												</div>
												<div class="control-group" id="tools2">

													<label class="control-label" style="font-size: 20px;">出装选择2:</label>

													<div class="controls">
                                                                                                           <select name="tools2" multiple="multiple" style="width:100px;">
                                                                                                                {foreach from=$toolsList key=k item=v}
                                                                                                                    <option value="{$v.id}">{$v.name}</option>
                                                                                                                {/foreach}
                                                                                                            </select>
                                                                                                            <div style="display:inline-block;">
                                                                                                                <a class="add">=></a>
                                                                                                                <br/>
                                                                                                                 <a class="delete"><=</a>
                                                                                                            </div>
                                                                                                            <select name="selectTools2" multiple="multiple" style="width:100px;">

                                                                                                            </select>
                                                                                                          
													</div>

												</div>
                                                                                                            
												<div class="control-group">
													<label class="control-label" style="font-size: 20px;">推荐理由</label>
													<div class="controls">
                                                                                                            <textarea name="miaosu2" class=" m-wrap"></textarea>                                                                
													</div>

												</div>
                                                                                                            <div class="control-group" style="text-align: center;" id="queren">
                                                                                                <button type="button" class="btn blue" id="queren">确认</button>
                                                                                               </div>
											</form>

											<!-- END FORM-->  

				</div>

			</div>
    
                </div>
                                                                                          
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                
{/block}

{block name=js}
    
    <script>
{*        出装推荐*}
    
    
    $(".tools").click(function(){

        $("#selectTools").show();
           var id=$(this).attr("data-id");
         $("#selectTools input[name='id']").val(id);
    });
   
       
    var arr1=new Array();
      var arr2=new Array();
    $("#tools1 .add").click(function(){       
            $("select[name='tools1'] option").each(function(){          
            if($(this).attr("selected")=="selected"){           
            var val=$(this).val();
            var text=$(this).html();
            $("select[name='selectTools1']").append("<option value='"+val+"'>"+text+"</option>");
           $(this).remove();
            arr1.unshift(text);
            console.log(arr1);
                }               
            })
            });

    
     $("#tools1 .delete").click(function(){       
            $("select[name='selectTools1'] option").each(function(){           
            if($(this).attr("selected")=="selected"){
            var val=$(this).val();
            var text=$(this).html();
            $("select[name='tools1']").append("<option value='"+val+"'>"+text+"</option>");
           $(this).remove();
        }   
           
        
            })  
            });
    
    
    
    
    
       $("#tools2 .add").click(function(){       
            $("select[name='tools2'] option").each(function(){          
            if($(this).attr("selected")=="selected"){           
            var val=$(this).val();
            var text=$(this).html();
            $("select[name='selectTools2']").append("<option value='"+val+"'>"+text+"</option>");
           $(this).remove();
             arr2.unshift(text);
   
                }
                  
            })
            });

    
     $("#tools2 .delete").click(function(){       
            $("select[name='selectTools2'] option").each(function(){           
            if($(this).attr("selected")=="selected"){
            var val=$(this).val();
            var text=$(this).html();
            $("select[name='tools2']").append("<option value='"+val+"'>"+text+"</option>");
           $(this).remove();
        }   
            })  
            });
    
    
    
         $("#queren").click(function(){
         var id=$("#selectTools input[name='id']").val();
    
         var Tools1=arr1;
         var Tools2=arr2;
         var miaosu1=$("textarea[name='miaosu1']").val();
         var miaosu2=$("textarea[name='miaosu2']").val();
                     $.ajax({
                         type:"post",
                         url:"index.php?class=Hero&action=selectTools",
                         data:{literal}{id:id,Tools1:Tools1,Tools2:Tools2,miaosu1:miaosu1,miaosu2:miaosu2}{/literal},
                         success:function(data){
                          if(data.code==100)
                            { 
                            alert(data.message);   
                                 } else{
                                 
                     history.go(0); 
                                    }
                                 }
                            });  
         
         
                });
           
    
            

 
    
    
    
    
       
        
        
        
{*        英雄关系选择*}
    $(".heroTouch").click(function(){
       
        var type=$(this).attr("data-type");
        if(type==1){
        $("#selectTouch h3").html("最佳搭档选择");
        }else if(type==2){
        $("#selectTouch h3").html("压制英雄选择");
        }else{
        $("#selectTouch h3").html("被压制英雄选择");
        }
        
           var id=$(this).attr("data-id");
         $("#selectTouch input[name='id']").val(id);
       $("#selectTouch input[name='type']").val(type);
      
{*        去除当前默认英雄*}
        $("select[name='hero1'] option").show;
        $("select[name='hero1'] option[value='"+id+"']").hide();
        $("select[name='hero2'] option").show;
        $("select[name='hero2'] option[value='"+id+"']").hide();
        
{*        获取当前英雄对应的数据*}
    
    
             var id=$("#selectTouch input[name='id']").val();
{*     alert(id);*}
            var type=$("#selectTouch input[name='type']").val();
    $.get("index.php?class=Hero&action=getTouch&id="+id+"&type="+type,function(data){
        data=$.parseJSON(data);
        console.log(data);
        var heroOne=data.data[0];
        var heroTwo=data.data[1];
        
       $("select[name='hero1']").val(heroOne["zhu_hero_id"]);
        $("textarea[name='remark1']").val(heroOne["miaosu"]);
        $("select[name='hero2'] option[value='"+heroOne["hero_id"]+"']").hide();
        
        
         $("select[name='hero2']").val(heroOne["zhu_hero_id"]);
        $("textareaname='remark2']").val(heroOne["miaosu"]);
        $("select[name='hero1'] option[value='"+heroOne["hero_id"]+"']").hide();
        
        $("#selectTouch").show();
    });
    
           $("#selectTouch").show();
        
        
                


    });
        
        
        $("#selectTouch select[name='hero1']").change(function(){
        var val=$(this).val();
        var id=$("#selectTouch input[name='id']").val();
        $("select[name='hero2'] option").show;
        if(val !=0){
       $("select[name='hero2'] option[value='"+val+"']").hide();
          }
           $("select[name='hero2'] option[value='"+id+"']").hide();
        });
    
    
          $("#selectTouch select[name='hero2']").change(function(){
        var val=$(this).val();
        var id=$("#selectTouch input[name='id']").val();
        $("select[name='hero1'] option").show;
        if(val !=0){
       $("select[name='hero1'] option[value='"+val+"']").hide();
          }
           $("select[name='hero1'] option[value='"+id+"']").hide();
        });
    
    
{*    英雄推荐入库*}
     
        $("#selectTouch .save").click(function(){
          
             var id=$("#selectTouch input[name='id']").val();
     
            var type=$("#selectTouch input[name='type']").val();
   
            var hero1=$("select[name='hero1']").val();
            var remark1=$("textarea[name='remark1']").val();
            var hero2=$("select[name='hero2']").val();
             var remark2=$("textarea[name='remark2']").val();
               $.ajax({
                         type:"post",
                         url:"index.php?class=Hero&action=saveTouch",
                         data:{literal}{id:id,type:type,hero1:hero1,hero2:hero2,remark1:remark1,remark2:remark2}{/literal},
                         success:function(data){
                           
                                   {*     console.log(data.code);*}
                          if(data.code==100)
                            { 
                            alert(data.message);   
                                 } else{
                                 
                           history.go(0); 
                                    }
                                 }
                            });             
             }); 
        
    
    
    
    
    
{*        主升和副升技能选择*}
    $(".skill").click(function(){
        
{*        获取点击的英雄ID*}
        var id=$(this).attr("data-id");
    
{*        ajax的简便写法*}
    $.get("index.php?class=Hero&action=getSkillById&id="+id,function(data){

        data=$.parseJSON(data);
        
        var list=data.data;
      {*   console.log(list);*}
        var str="";
         {*console.log(str);*}
               for(var i=0;i<list.length;i++)
                {
                  str=str+"<option value='"+list[i]["id"]+"'>"+list[i]["name"]+"</option>";
                }

            $("#selecySkill select[name='ss_suggest']").html(str);
            $("#selecySkill select[name='sm_suggest']").html(str);
            $("#selecySkill input[name='id']").val(id);
            
             $("#selecySkill").show();
            }); 
                });
                
                
                
                
                $("#saveSkill").click(function(){
               
              $.ajax({
             type:"post",
             url:"index.php?class=Hero&action=saveSkill",
             data:$("#skillForm").serializeArray(),
             success:function(data){
             data=$.parseJSON(data);
              if(data.code==100){
                     alert(data.msg);
                }else{
            history.go(0);    
                     }
                 }
        
                         }); 
                            }); 
                            
                            
                            
{*                   是否周免*}

                  $(".editStatus").click(function(){
                      
                        var id=$(this).attr("id");
                        var status=$(this).attr("status");
                      
                              $.ajax({
                                type:"post",
                                url:"index.php?class=Hero&action=editStatus",
                                data:{literal}{id:id,status:status}{/literal},
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
                         
{*                         是否新手推荐*}
                         $(".editStatus2").click(function(){
                      
                        var id=$(this).attr("id");
                        var status=$(this).attr("status");
                      
                              $.ajax({
                                type:"post",
                                url:"index.php?class=Hero&action=editStatus2",
                                data:{literal}{id:id,status:status}{/literal},
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


    
 

    </script>
    
{/block}