<?php
/* Smarty version 3.1.30, created on 2018-01-17 17:04:15
  from "C:\www\movie\Application\Admin\View\Field\field.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f118fa302f3_79219010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22fadc66316c74e2ddc7aa218e0f555b187bc438' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\Field\\field.tpl',
      1 => 1515640219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../index.tpl' => 1,
  ),
),false)) {
function content_5a5f118fa302f3_79219010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218395a5f118f9a05e3_86167990', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242485a5f118f9cede3_33043573', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_317005a5f118fa00513_30695185', 'alert');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38865a5f118fa29b35_84420337', 'js');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_218395a5f118f9a05e3_86167990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    电影场次管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_242485a5f118f9cede3_33043573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                <tr class="">
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["t_id"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="move"><?php echo $_smarty_tpl->tpl_vars['v']->value["m_id"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="hall"><?php echo $_smarty_tpl->tpl_vars['v']->value["h_id"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="seat"><?php echo $_smarty_tpl->tpl_vars['v']->value["seat"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["people"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="date"><?php echo $_smarty_tpl->tpl_vars['v']->value["date"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value["time"];?>
</td>
                                                        <td data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="money"><?php echo $_smarty_tpl->tpl_vars['v']->value["money"];?>
</td>
                                                </tr>
                                            <?php
}
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
<?php
}
}
/* {/block 'content'} */
/* {block 'alert'} */
class Block_317005a5f118fa00513_30695185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    
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
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieTheatre']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+1;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+2;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+3;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+3;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+4;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+4;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+5;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+5;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+6;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+6;?>
</option>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+7;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;
echo $_smarty_tpl->tpl_vars['date1']->value+7;?>
</option>
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
<?php
}
}
/* {/block 'alert'} */
/* {block 'js'} */
class Block_38865a5f118fa29b35_84420337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
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
              data:{id:id,m_id:m_id},
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
              data:{id:id,hall:hall},
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
        
        
 $(".seat").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#seat").show();
            $("#seat_button").click(function(){
                var seat= $("#select2").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=SeatRevise",
              data:{id:id,seat:seat},
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
        
 $(".money").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#money").show();
            $("#money_button").click(function(){
                var money= $("#select3").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=MoneyRevise",
              data:{id:id,money:money},
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
               
 $(".date").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#date").show();
            $("#date_button").click(function(){
                var date= $("#select4").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=DateRevise",
              data:{id:id,date:date},
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
                       
 $(".time").click(function(){
          var id= $(this).attr("data-id");
          //获取电影名称和id
           $("#time").show();
            $("#time_button").click(function(){
                var time= $("#select5").val();
                    $.ajax({
                        type:"post",
                        url:"index.php?m=Admin&c=Field&a=TimeRevise",
              data:{id:id,time:time},
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
    
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
