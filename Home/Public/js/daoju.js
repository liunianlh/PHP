//周免英雄部分效果
$(".zhoumian").on("mouseover", function () {
    //排他
    $(".none").css("display", "none");
    $(".block").css("display", "block");
    $(".block").css("width", "69px");
//	获取当前点击的img和备选img
    var imgone = $(this).children("img").eq(0);
    var imgtwo = $(this).children("img").eq(1);
//	如果未显示详情将其显示详情
    if (imgone.css("display") == "none") {
    } else {
        imgone.css("display", "none");
        imgtwo.css("display", "block");
        imgtwo.css("width", "200px");
        imgtwo.css("height", "71px");
    }
})
//内容分类部分效果
$(".ms-radio").on("click", function () {
//	排除其他出点击以外的按钮
    $(".i").css("background-color", "transparent");
//	获取当前点击的按钮
    var i = $(this).children("i").eq(0);
//	改变背景颜色
    i.css("background-color", "#358ADD");
})
//点击按钮显示对应的装备
$(".ms-radio").on("click", function () {
//    获取点击的标签
    var i = $(this).parent().children().eq(1);
//    标签的值
    var leixing = i.html();
    if (leixing == "新手推荐" || leixing == "本周免费") {
        if (leixing == "新手推荐") {
            $(".daoju").hide();
            $(".daoju[xinshou='1']").show();
        } else {
            $(".daoju").hide();
            $(".daoju[zhoumian='1']").show();
        }
    } else {
        if (leixing == "全部") {
            $(".daoju").show();
        } else {
            $(".daoju").hide();
            $(".daoju[leixing=" + leixing + "]").show();
        }

    }
})
//显示装备详情
var divs = document.getElementsByClassName("list");
for (var i = 0; i < divs.length; i++) {
    //监听鼠标移动
    divs[i].onmousemove = function (event) {

        var event = event || window.event;

        //获取鼠标的到div的距离

        //鼠标距离文档的开始位置的距离
        var pageX = event.pageX || event.screenX + document.documentElement.scrollX;
        //当前元素到左边的距离(offsetLeft:当前元素距离父级（定位）的left距离，如果父级没有定位则是距离body)
        var divX = this.offsetLeft;
        //鼠标在div中的距离
        var x = pageX-divX-180;

        //获取鼠标到右边的距离
        var rightX = document.body.clientWidth - pageX;
        //详情信息显示的位置，右边的距离不够就显示在左边
        if (rightX > 250) {
            var chlid = this.children;
            var div = chlid[1];
            div.style.display = "block";
            div.style.left = (x + 50) + "px";
        } else {
            var chlid = this.children;
            var div = chlid[1];
            var x = (50 - x) + 200;
            div.style.display = "block";
            div.style.left = "-" + x + "px";
        }

        // 上下
        var pageY = event.pageY || event.screenY + document.documentElement.scrollY;
        var divY = this.offsetTop;
        var y = pageY - divY-850;
        div.style.top = (y - 70) + "px";
    }
    //鼠标移出事件
    divs[i].onmouseout = function () {
        var chlid = this.children;
        var div = chlid[1];
        div.style.display = "none";
    }
}