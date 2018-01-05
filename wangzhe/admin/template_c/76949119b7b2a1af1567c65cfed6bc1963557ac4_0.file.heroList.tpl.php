<?php
/* Smarty version 3.1.30, created on 2018-01-05 20:26:41
  from "F:\phpStudy\WWW\wangzhe\admin\template\Hero\heroList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f6f01816c62_14945213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76949119b7b2a1af1567c65cfed6bc1963557ac4' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\wangzhe\\admin\\template\\Hero\\heroList.tpl',
      1 => 1515155187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4f6f01816c62_14945213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288555a4f6f01755a92_08165277', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_287085a4f6f017d7e04_95472672', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265095a4f6f0180d9f2_88025653', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_288555a4f6f01755a92_08165277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
英雄管理-列表<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_287085a4f6f017d7e04_95472672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



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
                                                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">

                                                                                    <td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                                                            
                                                                                    
											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>

											<td style="text-align:center;padding-top: 40px;">
                                                                                            
                                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
">
                                                                                        </td>
                                                                                         <td style="text-align:center;padding-top: 40px;">
                                                                                             <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                                                                                             
                                                                                             
                                                                                         </td>
                                                                                    <td style="text-align:center;padding-top: 40px;">
                                                                                           <?php echo $_smarty_tpl->tpl_vars['vocationList']->value[$_smarty_tpl->tpl_vars['v']->value['vocation_id']];?>

                                                                                             
                                                                                         
                                                                                         </td>
                                                                                         
                                                                                        
                                                                                        
                                                                                         
                                                                                        
                                                                                         
                                                                                        
                                                                                        <td class="editStatus" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['free_week'];?>
"  style="text-align:center;padding-top: 40px;">
                                                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['free_week'] == 1) {?>
                                                                                                是
                                                                                             <?php } else { ?>
                                                                                                    否
                                                                                             <?php }?>
                                                                                         
                                                                                            
                                                                                        </td>
                                                                                         <td class="editStatus2" style="text-align:center;padding-top: 40px;"  id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['new_recommend'];?>
">
                                                                                            
                                                                                               <?php if ($_smarty_tpl->tpl_vars['v']->value['new_recommend'] == 1) {?>
                                                                                                是
                                                                                               <?php } else { ?>
                                                                                                    否
                                                                                                <?php }?>
                                                                                             
                                                                                            
                                                                                         </td>

											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['live'];?>
</td>

											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['hurt'];?>
</td>
                                                                                        <td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['effect'];?>
</td>

											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['difficulty'];?>
</td>
                                                                                        <td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['story'];?>
</td>

											<td style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['history'];?>
</td>
                                                                                        <td class="skill" data-id='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['sm_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['ss_name'];?>
</td>
                                                                                
                                                                                        
                                                                                        <td class="summoner_skill" style="text-align:center;padding-top: 40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['summoner_skill'];?>
</td>

                                                                                        
                                                                                        <td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-type="1"><?php echo $_smarty_tpl->tpl_vars['v']->value['good'];?>
</td>
											<td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-type="2"><?php echo $_smarty_tpl->tpl_vars['v']->value['repress'];?>
</td>
                                                                                        <td style="text-align:center;padding-top: 40px;" class="heroTouch" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-type="3"><?php echo $_smarty_tpl->tpl_vars['v']->value['berepress'];?>
</td>
                                                                                        
                                                                                        
                                                                                        <td class="tools" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="text-align:center;padding-top: 40px;">出装推荐</td>
                                                                                        <td style="text-align:center;padding-top: 40px;">                                                                                       
                                                                                            <a href="index.php?class=Hero&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
                                                                                       
                                                                                             <a href="index.php?class=Hero&action=Delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
                                                                                                
                                                                                                
                                                                                        </td>
										
                                                                           
										

									
                                                                                        </tr>
                                                                                <?php
}
} else {
?>

                                                                                    <tr>
                                                                                        暂无数据
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

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
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
                                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolsList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolsList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                                                          
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_265095a4f6f0180d9f2_88025653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php echo '<script'; ?>
>

    
    
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
                         data:{id:id,Tools1:Tools1,Tools2:Tools2,miaosu1:miaosu1,miaosu2:miaosu2},
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
      

        $("select[name='hero1'] option").show;
        $("select[name='hero1'] option[value='"+id+"']").hide();
        $("select[name='hero2'] option").show;
        $("select[name='hero2'] option[value='"+id+"']").hide();
        

    
    
             var id=$("#selectTouch input[name='id']").val();

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
                         data:{id:id,type:type,hero1:hero1,hero2:hero2,remark1:remark1,remark2:remark2},
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
        
    
    
    
    
    

    $(".skill").click(function(){
        

        var id=$(this).attr("data-id");
    

    $.get("index.php?class=Hero&action=getSkillById&id="+id,function(data){

        data=$.parseJSON(data);
        
        var list=data.data;
      
        var str="";
         
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
                            
                            
                            


                  $(".editStatus").click(function(){
                      
                        var id=$(this).attr("id");
                        var status=$(this).attr("status");
                      
                              $.ajax({
                                type:"post",
                                url:"index.php?class=Hero&action=editStatus",
                                data:{id:id,status:status},
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
                         

                         $(".editStatus2").click(function(){
                      
                        var id=$(this).attr("id");
                        var status=$(this).attr("status");
                      
                              $.ajax({
                                type:"post",
                                url:"index.php?class=Hero&action=editStatus2",
                                data:{id:id,status:status},
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


    
 

    <?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'js'} */
}
