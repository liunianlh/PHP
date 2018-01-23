<?php
/* Smarty version 3.1.30, created on 2018-01-18 17:00:23
  from "C:\www\movie\Application\Home\View\Yyxq\Yyxq.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60622751a176_38496145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32c9ac40506a8d96feca5616c2f6a403193aad0' => 
    array (
      0 => 'C:\\www\\movie\\Application\\Home\\View\\Yyxq\\Yyxq.html',
      1 => 1516265714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60622751a176_38496145 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/yyxq.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		
		<style>
                    .clearbox{
                        content:"";
                        display:inline-block;
                        clear:both;
                    }
			.accordian{  
                            width:100%;  
                            height: 200px !important;
                            margin:0 auto;  
                            line-height:200px;
                          }  
                          .accordian ul{
                              width:350px;
                              padding-left:50px;
                          }
                          .accordian li{  
                            float:left;  
                            list-style:none;  
                            width:54px;  
                            transition:all 2s;  
                            position:relative;  
                            overflow:hidden;  
                            box-shadow:0px 0px 20px rgba(0,0,0,0.8);  
                          }  
                         
                          .accordian ul li:hover{  
                            width:100px;  
                           
                          }  
                          .accordian li .image_title{  
                            position:absolute;  
                            width:100%;  
                            height:50px;  
                             
                            text-indent:2em;  
                            line-height:50px;  
                            bottom:0px;  
                            left:0  
                          }  
                          .accordian a{  
                            color:#fff;  
                            text-decoration:none;  
                          }  
		</style>
		
	</head>
	<body>
		<!--头部影城简介-->
		<div class="top">
			<h4><?php echo $_smarty_tpl->tpl_vars['Yyxq']->value["name"];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['Yyxq']->value["abstract"];?>
</p>
			<div class="">
				<span>退票</span><span>改签</span><span>3D眼镜</span><span>儿童优惠</span>
			</div>
		</div>
		
		<!--影片导航-->
		<div class="nav">
                    <div class="accordian">  
                        <ul class="clearbox ">  
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieList']->value, 'n', false, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value => $_smarty_tpl->tpl_vars['n']->value) {
?>
                            <li data-img="<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
" class="data" data-t_id="<?php echo $_smarty_tpl->tpl_vars['n']->value['t_id'];?>
" data-time="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">  
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['photo'];?>
" style="height:150px;">  
                            </li>  
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul> 
                    </div>
			
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
		<!--影片简介-->
		<div class="jianjie" Movie_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="display:none;">
			<h4><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h4><span><?php echo $_smarty_tpl->tpl_vars['v']->value['score']["score"];?>
<span>分</span></span>
			<div>
				<span class="date"><?php echo $_smarty_tpl->tpl_vars['v']->value['duration'];?>
分钟</span>|
				<span class="type"><?php echo $_smarty_tpl->tpl_vars['v']->value['type']["name"];?>
</span>|
				<span class="zhuyan"><?php echo $_smarty_tpl->tpl_vars['v']->value['yanyuan'];?>
</span>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<!--电影放映时间-->
		<div class="riqi">
			<div class="">
                            <a href="" class="hongzi">今天<b id="time">01-10</b><span>惠</span></a>
                            <a href="" class="tommort">明天<b id="tommort">01-11</b><span>惠</span></a>
			</div>
		</div>
		
		<!--播放的具体时间地点-->
		<div class="shijian">
			
			
		</div>
		
	</body>
</html>
<?php echo '<script'; ?>
>
    
        window.onload=function(){ 
            var id = $(".jianjie").attr("Movie_id");
            $(".jianjie").hide();
            $(".jianjie").each(function(){
                var xinId = $(this).attr("Movie_id");
                $(".jianjie[Movie_id ='"+id+"']").show();
            })
        } 

    $(".data").click(function(){
        var data = $(this).attr("data-img");
            $(".jianjie").hide();
            $(".jianjie[Movie_id ='"+data+"']").show();
    })
    $(".data").click(function(){
        var movieid = $(this).attr("data-img");
        var t_id= $(this).attr("data-t_id");
        $.ajax({
            type:"post",
            data:{id:movieid,t_id:t_id},
            url:"index.php?m=Home&c=Index&a=anpai",
            success:function(data){
                data = $.parseJSON(data);
                data= data.data;
                   $(".shijian").html("");
                    for(var i=0;i<data.length;i++){
                       $(".shijian").append('<div class="changci"><div class="shijian_left"><div class="time"><h3>'+data[i].time[0]+'</h3><p>'+data[i].time[1]+'散场</p></div><div class="weizhi"><h6>'+data[i].language["language"]+' 2D</h6><p>'+data[i].h_id["name"]+'</p></div></div><div class="monney"><h5>特惠<span>'+data[i].money+'</span>元</h5><p>70元</p></div><div class="goupiao"><a href="index.php?m=Home&c=Index&a=zuowei&id='+data[i].m_id+'&h_id='+data[i].h_id["name"]+'&language='+data[i].language["language"]+'&start='+data[i].time[0]+'&start1='+data[i].time[1]+'&seat='+data[i].seat+'&money='+data[i].money+'&t_id='+t_id+'&date='+data[i].date+'">购票</a></div></div>')   
                    }
            }
        })
    })
    
    var myDate = new Date();
    var month=myDate.getMonth()+1; 
    if(month<10){
        month="0"+month;
    }
    var day = myDate.getDate();
    var time = month+"-"+day;
    $(".hongzi #time").html(time);
    myDate.setTime(myDate.getTime()+24*60*60*1000);
    var s3 =(myDate.getMonth()+1) + "-" + myDate.getDate();
    $(".tommort #tommort").html(s3);
    
<?php echo '</script'; ?>
>
<?php }
}
