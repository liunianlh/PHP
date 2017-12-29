//周免英雄部分效果
$(".zhoumian").on("mouseover",function(){
	//排他
	$(".none").css("display","none");
	$(".block").css("display","block");
	$(".block").css("width","69px");
//	获取当前点击的img和备选img
	var imgone = $(this).children("img").eq(0);
	var imgtwo = $(this).children("img").eq(1);
//	如果未显示详情将其显示详情
	if(imgone.css("display")=="none"){
	}else{
		imgone.css("display","none");
		imgtwo.css("display","block");
		imgtwo.css("width","224px");
		imgtwo.css("height","71px");
	}
})
$(function(){
    $("#name").html($("#diyige").attr("name"));
    $("#dengji").html($("#diyige").attr("dengji"));
    $("#shuxing").html($("#diyige").attr("cd"));
    $("#datu").attr("src",$("#diyige").attr("xiangqingtu"));
    var border=$("#diyige").children().eq(0);
    border.css("border-color","#00A383");
})

//查看召唤详情技能
$(".xiangqing").on("click",function(){
//    排他边框
    $(".biankuang").css("border-color","#258DF2");
    var border=$(this).children().eq(0);
    border.css("border-color","#00A383");
    $("#name").html($(this).attr("name"));
    $("#dengji").html($(this).attr("dengji"));
    $("#shuxing").html($(this).attr("cd"));
    $("#datu").attr("src",$(this).attr("xiangqingtu"));
})