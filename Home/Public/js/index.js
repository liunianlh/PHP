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
//内容分类部分效果
$(".ms-radio").on("click",function(){
//	排除其他出点击以外的按钮
	$(".i").css("background-color","transparent");
//	获取当前点击的按钮
	var i=$(this).children("i").eq(0);
//	改变背景颜色
	i.css("background-color","#358ADD");
})
//点击按钮显示对应的英雄
$(".ms-radio").on("click",function(){
//    获取点击的标签
    var i=$(this).parent().children().eq(1);
//    标签的值
    var leixing=i.html();
        if(leixing=="新手推荐"||leixing=="本周免费"){
            if(leixing=="新手推荐"){
                $(".yingxiong").hide();
                $(".yingxiong[xinshou='1']").show();
            }else{
                $(".yingxiong").hide();
                $(".yingxiong[zhoumian='1']").show();
            }
        }else{
            if(leixing=="全部"){
                $(".yingxiong").show();
            }else{
                $(".yingxiong").hide();
                $(".yingxiong[leixing="+leixing+"]").show();
            }
            
        }
})
