{extends file="../index.tpl"}
{block name=title}
    电影场次管理
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

                        电影场次 <small>电影场次管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">电影场次</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">电影场次管理</a>


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

                                <div class="caption"><i class="icon-edit"></i>电影场次列表</div>

                    

                        </div>
                        <div class="portlet-body">
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                     <div class="clearfix">

                                        <div class="btn-group">


                                        <button id="addfield" class="btn green">

                                        <i class="icon-user-md"></i> &nbsp;&nbsp;添加电影场次

                                        </button>

                                        </div>
                                </div>
                                        <thead>

                                                <tr>
                                                        <th>电影场次id</th>
                                                        <th>影院名称</th>
                                                        <th>电影名称</th>
                                                        <th>大厅信息</th>
                                                        <th>座位数</th>
                                                        <th>已选座位</th>
                                                        <th>播放日期</th>
                                                        <th>时间段</th>
                                                        <th>票价</th>
                                                </tr>

                                        </thead>

                                        <tbody>
                                            {foreach from=$list key=k item=v}
                                                <tr class="">
                                                        <td>{$v["id"]}</td>
                                                        <td>{$v["t_id"]}</td>
                                                        <td data-id="{$v["id"]}" class="move">{$v["m_id"]}</td>
                                                        <td data-id="{$v["id"]}" class="hall">{$v["h_id"]}</td>
                                                        <td data-id="{$v["id"]}" class="seat">{$v["seat"]}</td>
                                                        <td data-id="{$v["id"]}">{$v["people"]}</td>
                                                        <td data-id="{$v["id"]}" class="date">{$v["date"]}</td>
                                                        <td data-id="{$v["id"]}" class="time">{$v["time"]}</td>
                                                        <td data-id="{$v["id"]}" class="money">{$v["money"]}</td>
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
    
    {*  电影场次添加弹框操作*}
     <div  id="field" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

					
				<div class="modal-header">

					<button class="close" type="button" onclick="$('#field').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">电影场次选择</h3>
				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请选择影院：</label>

                                                        <div class="controls">
                                                            <select name="field" id="select6">
                                                                {foreach from=$movieTheatre key=k item=v}
                                                                    <option value="{$v["id"]}">{$v["name"]}</option>
                                                                {/foreach}
                                                            <select>
                                                                
                                                        </div>
                                                </div>

                                                
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="field_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>

				</div>

			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
    
    
    
{*  电影弹框操作*}
     <div  id="movie" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

					
				<div class="modal-header">

					<button class="close" type="button" onclick="$('#movie').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">电影选择</h3>
				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请选择电影：</label>

                                                        <div class="controls">
                                                            <select name="movie" id="select">
                                                                
                                                            <select>
                                                        </div>
                                                </div>

                                                
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="movie_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>

				</div>

			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
{*  影院大厅弹框操作*}
     <div  id="hall" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

					
				<div class="modal-header">

					<button class="close" type="button" onclick="$('#hall').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">大厅选择</h3>
				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请选择大厅：</label>

                                                        <div class="controls">
                                                            <select name="movie" id="select1">
                                                                
                                                            <select>
                                                        </div>
                                                </div>

                                                
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="hall_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
     
     {*  影院大厅座位数弹框操作*}
     <div  id="seat" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#seat').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">大厅座位数修改</h3>
				<div class="modal-body">
					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请填写座位数：</label>

                                                        <div class="controls">
                                                            <input name="seat" id="select2">
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="seat_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>
				</div>

			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
     
        {*票价弹框操作*}
     <div  id="money" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#money').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">票价修改</h3>
				<div class="modal-body">
					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请填电影票价：</label>

                                                        <div class="controls">
                                                            <input name="money" id="select3">
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="money_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>
				</div>

			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
        
              {*日期弹框操作*}
     <div  id="date" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#date').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">日期修改</h3>
				<div class="modal-body">
					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请选择日期：</label>

                                                        <div class="controls">
                                                             <select name="date" id="select4">
                                                                 <option value="{$date}{$date1+1}">{$date}{$date1+1}</option>
                                                                 <option value="{$date}{$date1+2}">{$date}{$date1+2}</option>
                                                                 <option value="{$date}{$date1+3}">{$date}{$date1+3}</option>
                                                                 <option value="{$date}{$date1+4}">{$date}{$date1+4}</option>
                                                                 <option value="{$date}{$date1+5}">{$date}{$date1+5}</option>
                                                                 <option value="{$date}{$date1+6}">{$date}{$date1+6}</option>
                                                                 <option value="{$date}{$date1+7}">{$date}{$date1+7}</option>
                                                            <select>
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="date_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>
				</div>
                                                            
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
                                                                 
 {*日期弹框操作*}
     <div  id="time" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#time').hide()"><tton>
				</div>
                            <h3 style="text-align: center;">时间修改</h3>
				<div class="modal-body">
					<form action="#" class="form-horizontal">
                                            <input type="hidden" value="" name="levelid">
                                                <div class="control-group">

                                                    <label class="control-label">请选择时间：</label>

                                                        <div class="controls">
                                                            
                                                                 <input id="select5" type="text" placeholder="06:26-08:00格式">
                                                            
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="time_button"><i class="icon-ok"></i> 修改<tton>
                                            </div>
                                        </form>
				</div>
                        
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    </div>
{/block}
{block name=js}
    <script>
       $(".move").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $.get("index.php?m=Admin&c=Field&a=MovieList", function(data){
                    data =$.parseJSON(data);
                    if(data.code!=200){
                        alert(data.message);
                    }else{
                        var str = "";
                        for(var i=0;i<data.data.length;i++){
                            str=str+'<option value='+data.data[i].id+'>'+data.data[i].name+'</option>';
                        }
                        $("#select").html(str);
                        $("#movie").show();
                    }
                });
            $("#movie_button").click(function(){
                var m_id= $("#select").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=MovieRevise",
             {literal} data:{id:id,m_id:m_id},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        });
{*        影院大厅的选择*}
 $(".hall").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $.get("index.php?m=Admin&c=Field&a=HallList", function(data){
                    data =$.parseJSON(data);
                    if(data.code!=200){
                        alert(data.message);
                    }else{
                        var str = "";
                        for(var i=0;i<data.data.length;i++){
                            str=str+'<option value='+data.data[i].id+'>'+data.data[i].name+'</option>';
                        }
                        $("#select1").html(str);
                        $("#hall").show();
                    }
                });
            $("#hall_button").click(function(){
                var hall= $("#select1").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=HallRevise",
             {literal} data:{id:id,hall:hall},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        });
        
        {*        影院大厅座位数的选择*}
 $(".seat").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#seat").show();
            $("#seat_button").click(function(){
                var seat= $("#select2").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=SeatRevise",
             {literal} data:{id:id,seat:seat},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        });
        {*        票价的选择*}
 $(".money").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#money").show();
            $("#money_button").click(function(){
                var money= $("#select3").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=MoneyRevise",
             {literal} data:{id:id,money:money},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        });
               {*        日期的选择*}
 $(".date").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#date").show();
            $("#date_button").click(function(){
                var date= $("#select4").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=DateRevise",
             {literal} data:{id:id,date:date},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        }); 
                       {*        时间的选择*}
 $(".time").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#time").show();
            $("#time_button").click(function(){
                var time= $("#select5").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=TimeRevise",
             {literal} data:{id:id,time:time},{/literal}
                        success:function(data){
                            data = $.parseJSON(data);
                                if(data.code!=200){
                                    alert(data.message);
                                }else{
                                    location.reload();
                                }
                            }
                        });
            }); 
        }); 
        
        
{*        添加电影场次*}
        $("#addfield").click(function(){
            $("#field").show();
        });
        $("#field_button").click(function(){
            var id = $("#select6").val();
            $.get("index.php?m=Admin&c=Field&a=addField&id="+id, function(data){
                    data =$.parseJSON(data);
                    if(data.code!=200){
                        alert(data.message);
                    }else{
                       location.reload();
                    }
                });
    
        })
    
    </script>
{/block}

