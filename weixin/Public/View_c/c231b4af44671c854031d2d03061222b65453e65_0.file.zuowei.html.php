<?php
/* Smarty version 3.1.30, created on 2018-01-16 16:18:01
  from "C:\www\movie\Application\Home\View\Zuowei\zuowei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5db5398075b7_32346266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c231b4af44671c854031d2d03061222b65453e65' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Zuowei\\zuowei.html',
      1 => 1516086872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5db5398075b7_32346266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>座位挑选</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="./Public/css/zuowei.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="./Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		
		<style>
                    .sss{
                        display:inline-block;
                    }
		</style>
	</head>
	<body>
		
		<!--影片详情-->
		<div class="top">
                    <div id="alert" style="color:red; text-align: center; font-size: 18px;background-color: gainsboro;visibility: hidden;">只能选四个</div>
			<div>
				<h4><?php echo $_smarty_tpl->tpl_vars['seat']->value[4];?>
</h4>
                                <p>今天 <span class="data"></span> <?php echo $_smarty_tpl->tpl_vars['seat']->value[0];?>
 (<?php echo $_smarty_tpl->tpl_vars['seat']->value[1];?>
 2D)</p>
			</div>
		</div>
		
		<!--座位详情-->
		<div class="xiangqing">
			<img src="./Public/img/zuowei.png"/>可选
			<img src="./Public/img/zuoweishow.png"/>已售
			<img src="./Public/img/zuoweixuan.png"/>已选
		</div>
		
		<!--座位具体位置-->
		<div class="weizhi">
			<div class="ting">
                            <span><?php echo $_smarty_tpl->tpl_vars['seat']->value[2];?>
</span>
			</div>
			<div class="seat">
                            <div class="zuoweis" data-id="0" >
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['seat']->value[5]+1 - (1) : 1-($_smarty_tpl->tpl_vars['seat']->value[5])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <?php if (in_array($_smarty_tpl->tpl_vars['foo']->value,$_smarty_tpl->tpl_vars['people']->value)) {?>
                                        <span class="sss"  data-name="noClick">
                                            <a href="javascript:;"><img src="./Public/img/zuoweishow.png" class="seat" ></a>
                                        </span>
                                    <?php } else { ?>
                                        <span class="sss"  data-id="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">
                                            <a href="javascript:;"><img src="./Public/img/zuowei.png" class="seat"></a>
                                        </span>
                                    <?php }?>
                                        
                                    
                               <?php }
}
?>

                            </div>
			</div>
		</div>
		
		<!--订单信息-->
		<div class="dingdan">
			<div class="dingdan_top">
				<div class="dingdan_top_left">
					<p>购票成功后将发送取票码到</p>
					<div><span>微信名</span>微信帐号</div>
				</div>
				<div class="dingdan_top_right">
                                    <a>票价<span>&nbsp;<span id="money" data-money="<?php echo $_smarty_tpl->tpl_vars['seat']->value[6];?>
"><?php echo $_smarty_tpl->tpl_vars['seat']->value[6];?>
</span>&nbsp;元</span></a>
				</div>
			</div>
                    <div class="dingdan_bottom" data-m_id="<?php echo $_smarty_tpl->tpl_vars['seat']->value[3];?>
" data-h_id="<?php echo $_smarty_tpl->tpl_vars['seat']->value[2];?>
" data-t_id="<?php echo $_smarty_tpl->tpl_vars['seat']->value['t_id'];?>
" data-time="<?php echo $_smarty_tpl->tpl_vars['seat']->value[0];?>
" data-date="<?php echo $_smarty_tpl->tpl_vars['seat']->value['date'];?>
">
                            确认购票
			</div>
		</div>
		
		<?php echo '<script'; ?>
>
                        var myDate = new Date();
                        var month=myDate.getMonth()+1; 
                        if(month<10){
                            month="0"+month;
                        }
                        var day = myDate.getDate();
                        var time = month+"-"+day;
                        
                        $(".data").html(time);
                       
                        
                         
                        var i=0;
                        $(".zuoweis span").click(function(){
                            if(i>3&&$(this).attr("data-name")!="click"){
                                $("#alert").html("最多只能选四个哦");
                                $("#alert").css("visibility","visible");
                                setTimeout(function(){
                                    $('#alert').css("visibility","hidden"); //将DIV标签隐藏。
                                }, 3000);
                            }else{
                                if($(this).attr("data-name")=="noClick"){
                                        $("#alert").html("已选的不能选哦");
                                        $("#alert").css("visibility","visible");
                                        setTimeout(function(){
                                            $('#alert').css("visibility","hidden"); //将DIV标签隐藏。
                                        }, 3000);
                                    }else{
                                    if($(this).attr("data-name")!="click"){
                                        i++;
                                        var id=$(this).attr("data-id");
                                        var big_id=$(this).parent().attr("data-id");
                                        if(big_id==0){
                                           var all = id;
                                           $(this).parent().attr("data-id",all);
                                        }else{
                                             var all =big_id+","+id;
                                            $(this).parent().attr("data-id",all);
                                        }
                                        var money =$("#money").attr("data-money");
                                        var num =eval(money*i);
                                        $("#money").html(num);
                                        $(this).parent().attr("data-money",num);
                                        $(this).children().children("img").attr("src","./Public/img/zuoweixuan.png");
                                        $(this).attr("data-name","click");
                                    }else{
                                        i--;
                                        var id=$(this).attr("data-id");
                                        var big_id=$(this).parent().attr("data-id");
                                        if(big_id.length==1){
                                            $(this).parent().attr("data-id",0);
                                        }else{
                                            var all =big_id.replace(","+id,"");
                                            $(this).parent().attr("data-id",all);
                                        }
                                        var money =$("#money").attr("data-money");
                                        var num =eval(money*i);
                                        $("#money").html(num);
                                        $(this).parent().attr("data-money",num);
                                        $(this).children().children("img").attr("src","./Public/img/zuowei.png");
                                        $(this).attr("data-name","");
                                        
                                    }
                                    
                                    
                                    
                                    }
                            }
                            
                        });
                        
                        

                        
			$(".zuoweis span").click(function(){
                            if($(this).attr("data-name")!="noClick"){
                                $(".dingdan").show();
                            }
			});
			$(".dingdan_bottom").click(function(){
                            var m_id= $(this).attr("data-m_id");
                            var t_id=$(this).attr("data-t_id");
                            var h_id=$(this).attr("data-h_id");
                            var seats=$(".zuoweis").attr("data-id");
                            var time=$(this).attr("data-time");
                            var date=$(this).attr("data-date");
                            $.ajax({
                                type:"post",
                                url:"index.php?m=Home&c=Zuowei&a=Addzuowei",
                   data:{m_id:m_id,t_id:t_id,h_id:h_id,seats:seats,time:time,date:date},
                                success:function(data){
                                    data  = $.parseJSON(data);
                                    if(data.code!=200){
                                        alert(data.message);
                                    }else{
                                        window.location.href="index.php?m=Home&c=Zuowei&a=qupiao";
                                    }
                                }
                            })
                            
			});
                        
		<?php echo '</script'; ?>
>
		
	</body>
</html>
<?php }
}
