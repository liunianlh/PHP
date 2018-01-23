<?php
/* Smarty version 3.1.30, created on 2018-01-18 10:35:28
  from "C:\www\movie\Application\Admin\View\Cinema\Cinema.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6007f0841c75_64698806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9525baa920df4376a6878e33916a6e71cf5a95' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Admin\\View\\Cinema\\Cinema.tpl',
      1 => 1515640597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../index.tpl' => 1,
  ),
),false)) {
function content_5a6007f0841c75_64698806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_313795a6007f05335d9_07846232', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127455a6007f0821936_10971402', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107785a6007f08380d9_73619915', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_313795a6007f05335d9_07846232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    电影院管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_127455a6007f0821936_10971402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- BEGIN PAGE CONTAINER-->        

<div class="container-fluid">

    
    
    <div  id="addCinema" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

				<div class="modal-header">

					<button class="close" type="button" onclick="$('#addCinema').hide()"></button>

					<h3>添加影片</h3>

				</div>

				<div class="modal-body">

					<form action="#" class="form-horizontal" id="skillCinema">
                                                <div class="control-group">
                                                        <label class="control-label">影院名称：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写电影名称" class="m-wrap small" name="name">
                                                        </div>
                                                </div>
                                                 <div class="control-group">
                                                        <label class="control-label">影院详细地址：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写影院详细地址" class="m-wrap small" name="abstract">
                                                        </div>
                                                </div>
                                                <div class="control-group">
                                                        <label class="control-label">所居城市：</label>
                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写所居城市" class="m-wrap medium" name="city">
                                                        </div>
                                                </div>
                                                <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                        <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                        <button type="button" class="btn blue" id="saveCinema"><i class="icon-ok"></i> 添加</button>
                                                </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
<!-- BEGIN PAGE HEADER-->
 
    <div  id="upCinemas" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

				<div class="modal-header">

					<button class="close" type="button" onclick="$('#upCinemas').hide()"></button>

					<h3>添加影片</h3>

				</div>

				<div class="modal-body">

					<form action="#" class="form-horizontal" id="upCinema">
                                            <input type="hidden" value="" name="id"/>
                                                <div class="control-group">
                                                        <label class="control-label">影院名称：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写电影名称" class="m-wrap small" name="name">
                                                        </div>
                                                </div>
                                                 <div class="control-group">
                                                        <label class="control-label">影院详细地址：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写影院详细地址" class="m-wrap small" name="abstract">
                                                        </div>
                                                </div>
                                                <div class="control-group">
                                                        <label class="control-label">所居城市：</label>
                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写所居城市" class="m-wrap medium" name="city">
                                                        </div>
                                                </div>
                                                <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                        <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                        <button type="button" class="btn blue" id="saveCinemas"><i class="icon-ok"></i> 修改</button>
                                                </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN STYLE CUSTOMIZER -->

                <!-- END BEGIN STYLE CUSTOMIZER -->  

                <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                <h3 class="page-title">

                        电影院列表 <small>电影院列表管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">电影列表</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">电影列表管理</a>


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
                            <div class="clearfix">
                                <div class="caption"><i class="icon-edit"></i>电影列表</div> 
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="clearfix">
                                    <div class="btn-group">
                                            <button id="sample_editable_1_new" class="btn green adds" onclick="$('#addCinema').show()">
                                            添加 <i class="icon-plus"></i>
                                            </button>
                                    </div>
                            </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>id</th>
                                                        <th>影院名称</th>
                                                        <th>影院详细地址</th>
                                                        <th>影院所居城市</th>
                                                        <th>操作</th>
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
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["abstract"];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["city"];?>
</td>
                                                        <td><button id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="update">修改</button><button id="<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
" class="delete">删除</button></td>
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
/* {block 'js'} */
class Block_107785a6007f08380d9_73619915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
            
            //添加电影院
            $("#saveCinema").click(function(){
                    $.ajax({
                        type:"get",
                        url:"index.php?m=Admin&c=Cinema&a=addCinema",
                        data:$("#skillCinema").serializeArray(),
                        success:function(data){
                            data = $.parseJSON(data);
                            console.log(data);
                            if(data.code==200){
                                alert("添加成功！");
                                history.go(0);
                            }else{
                                alert("添加失败,请重试！");
                            }
                        }
                    });
            })
            
            $(".update").click(function(){
                var cinemaId = $(this).attr("id");
                $("#upCinemas input[name='id']").val(cinemaId);
               
                 $.ajax({
                        type:"get",
                        url:"index.php?m=Admin&c=Cinema&a=listUpCinema&id="+cinemaId,
                        success:function(data){
                            data = $.parseJSON(data);
                            console.log(data);
                            if(data.code==200){
                                //添加默认值
                                  $("#upCinemas input").each(function(){
                                        var name = $(this).attr("name");
                                        $(this).val(data.data[name]);      
                                    })
                                 $("#upCinemas").show();  
                                 $("#saveCinemas").click(function(){
                                    $.ajax({
                                        type:"post",
                                        url:"index.php?m=Admin&c=Cinema&a=saveUpCinema",
                                        data:$("#upCinema").serializeArray(),
                                        success:function(data){
                                            data =$.parseJSON(data);
                                            if(data.code==200){
                                                alert(data.message);
                                                history.go(0);
                                            }else{
                                                alert(data.message);
                                                
                                            }
                                        }
                                    })
                                })
                            }else{
                                alert("修改失败,请重试！");
                            }
                        }
                    });
           
        })
        //删除
        $(".delete").click(function(){
            var id = $(this).attr("id");
            $.ajax({
                type:"get",
                url:"index.php?m=Admin&c=Cinema&a=deleteCinema&id="+id,
                success:function(data){
                    data=$.parseJSON(data);
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
