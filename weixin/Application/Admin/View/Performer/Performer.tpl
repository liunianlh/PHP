{extends file="../index.tpl"}
{block name=title}
    影人管理
{/block}
{block name=content}
<!-- BEGIN PAGE CONTAINER-->        

<div class="container-fluid">

<!-- BEGIN PAGE HEADER-->

<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN STYLE CUSTOMIZER -->

                <!-- END BEGIN STYLE CUSTOMIZER -->  

                <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                <h3 class="page-title">

                        影人列表 <small>影人列表管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">影人列表</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">影人列表管理</a>


                        </li>

                       

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

                                <div class="caption"><i class="icon-edit"></i>影人列表</div>
                               
                    

                        </div>
                    
                        <div class="portlet-body">
                             <div class="clearfix">

                                        <div class="btn-group">


                                        <button id="sample_editable_1_new" class="btn green">

                                        <i class="icon-user-md"></i> &nbsp;&nbsp;添加电影人

                                        </button>

                                        </div>

                                     

                                </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>影人id</th>
                                                        <th>影人名称</th>
                                                        <th>影人英文名称</th>
                                                        <th>影人头像</th>
                                                        <th>影人出生日期</th>
                                                        <th>影人地址</th>
                                                        <th>影人简介</th>
                                                        <th>操作</th>
                                                </tr>

                                        </thead>

                                        <tbody>
                                            {foreach from=$list key=k item=v}
                                                <tr class="">
                                                        <td>{$v["id"]}</td>
                                                        <td>{$v["name"]}</td>
                                                        <td>{$v["english"]}</td>
                                                        <td><img src="{$v["photo"]}" style="width: 69px;"></td>
                                                        <td>{$v["date"]}</td>
                                                        <td>{$v["city"]}</td>
                                                        <td style="width:200px;">{$v["abstract"]}</td>
                                                         <td><a data-id="{$v["id"]}" data-name="{$v["name"]}" data-english="{$v["english"]}" data-date="{$v["date"]}" data-city="{$v["city"]}" data-photo="{$v["photo"]}"  data-abstract="{$v["abstract"]}"  href="javascript:;"  style="margin-left:50px;"  class="btn green edix">修改</a><a href="javascript:;"  style="margin-left:50px;" class="btn red" onclick="deletes({$v["id"]})">删除</a></td>
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
{/block}
{block name=alert}
         {*  影人添加弹框操作*}
     <div  id="addPerformer" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#addPerformer').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">影人添加</h3>
                            <div class="modal-body" style="text-align: center;">
					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                            <form enctype="multipart/form-data">
                                                <div style="text-align: center;" id="photo">
                                                        <img src="Public/image/QQ20171118100223.png" style="width: 100px;display: block;margin: 0 auto;" id="img">
                                                        <input type="file" class="m-wrap" placeholder="装备图片保存地址" name="toolsUrl" style="visibility: hidden;display: block; position: absolute;top: -20px;"  />
                                                        <input type="text" class="m-wrap" placeholder="" id="upload-file" style="border:none;"/><br /> 
                                                </div>
                                        </form>
                                                <div class="control-group">

                                                    <label class="control-label">影人名称：</label>

                                                        <div class="controls">
                                                            <input  id="name">
                                                        </div>
                                                </div>
                                                <div class="control-group">

                                                    <label class="control-label">影人英文名称：</label>

                                                        <div class="controls">
                                                            <input  id="english">
                                                        </div>
                                                </div>
                                                <div class="control-group">

                                                    <label class="control-label">影人出生日期：</label>

                                                        <div class="controls">
                                                            <input  id="date">
                                                        </div>
                                                </div>
                                                <div class="control-group">

                                                    <label class="control-label">影人地址：</label>

                                                        <div class="controls">
                                                            <input  id="city">
                                                        </div>
                                                </div>
                                                <div class="control-group">

                                                    <label class="control-label">影人简介：</label>

                                                        <div class="controls">
                                                            <input  id="abstract">
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="addPerformer_button"><i class="icon-ok"></i> 添加<tton>
                                                    <button type="button" style='display: none;margin: 0 auto;' class="btn blue" id="xiugai_button"><i class="icon-ok"></i> 修改<tton>        
                                            </div>
                                        </form>
				</div>

			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
{/block}
{block name=js}
    <script>
        $("#sample_editable_1_new").click(function(){
            $('#addPerformer').show();
            $("#img").attr("src","Public/image/QQ20171118100223.png");
            $("#name").val("");
            $("#english").val("");
            $("#city").val("");
            $("#date").val("");
            $("#abstract").val("");
        }); 
         $(".edix").click(function (){
        var id=$(this).attr("data-id");
            $('#addPerformer').show();
            $("#img").attr("src",$(this).attr("data-photo"));
            $("#upload-file").val($(this).attr("data-photo"));
            $("#name").val($(this).attr("data-name"));
            $("#city").val($(this).attr("data-city"));
            $("#english").val($(this).attr("data-english"));
            $("#date").val($(this).attr("data-date"));
            $("#abstract").val($(this).attr("data-abstract"));
            $("#addPerformer_button").css("display","none");
            $("#xiugai_button").css("display","block");
$("#xiugai_button").click(function(){
            var name =$("#name").val();
            var english =$("#english").val();
            var date =$("#date").val();
            var city =$("#city").val();
            var abstract =$("#abstract").val();
            var photo =$("#upload-file").val();
            $.ajax({
                type:"post",
                url:"index.php?m=Admin&c=Performer&a=XiuGaiPerformer",
   {literal} data:{name:name,english:english,date:date,city:city,abstract:abstract,photo:photo,id:id},{/literal}
                success:function(data){
                    data = $.parseJSON(data);
                    if(data.code!=200){
                            alert(data.message);
                        }else{
                            location.reload();
                        }
                        
                    }
            })
        })
        });
      $("#upload-file").val("");
        $("#img").click(function(){
            $("input[type='file']").click();
        });
        
        $("input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfile",$("input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?m=Admin&c=Photo&a=addPhoto",
              {literal}   data:fd,{/literal}
                processData: false,
                contentType: false,
                success:function(e){
                    e = $.parseJSON(e);
                    $("#img").attr("src",e.data);
                    $("#upload-file").val(e.data);
                }
            });
        });
        $("#addPerformer_button").click(function(){
            var name =$("#name").val();
            var english =$("#english").val();
            var date =$("#date").val();
            var city =$("#city").val();
            var abstract =$("#abstract").val();
            var photo =$("#upload-file").val();
            
            $.ajax({
                type:"post",
                url:"index.php?m=Admin&c=Performer&a=addPerformer",
   {literal} data:{name:name,english:english,date:date,city:city,abstract:abstract,photo:photo},{/literal}
                success:function(data){
                    data = $.parseJSON(data);
                    if(data.code!=200){
                            alert(data.message);
                        }else{
                            location.reload();
                        }
                        
                    }
            })
        })
        //删除
        function deletes(num){
            $.get("index.php?m=Admin&c=Performer&a=DeletePerformer&id="+num, function(data){
                    data =$.parseJSON(data);
                    if(data.code!=200){
                        alert(data.message);
                    }else{
                       location.reload();
                    }
                });
        }
    
    </script>
{/block}