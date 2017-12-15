<?php

//判断用户是否登录
if (!isset($_COOKIE["user_name"])){
    echo "<script>window.location.href='../../login.html';</script>";
    exit();
}
$id = $_COOKIE["user_name"];
//查询用户信息
$con = mysqli_connect("localhost", "root", "root", "app");
if (!$con) {
    echo "连接失败";
    die();
}
mysqli_set_charset($con, "utf8");

//当前用户登录信息
$sql = "select * from admin where id={$id}";
$result = mysqli_query($con, $sql);
if ($result) {
    $userinfo = mysqli_fetch_assoc($result);
}




//查询所有管理员列表的信息
include '../mysqlDB.class.php';
$link= mysqlDB::getInstance("app");
//获取记录
$sql="select * from admin";
$data=$link->select($sql);

//获取记录
$sql="select * from admin";
$count=$link->count($sql);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理系统HTML模板--模板之家 www.cssmoban.com</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">管理信息</a></li>
    <li><a href="#">管理员管理</a></li>
    <li><a href="#">管理员列表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
            <a href="adminAdd.php" target="rightFrame"><li class="click"><span><img src="../../images/t01.png" /></span>添加</li></a>   
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="../../images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
     
        <th>编号<i class="sort"><img src="../../images/px.gif" /></i></th>
       
        <th>用户</th>
       
      
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $k=>$v){?>
        <tr>
        <td><?php echo $v["id"]; ?></td>
        <td><?php echo $v["name"]; ?></td>
       
        
        <td>

             <a href="./adminUpdatePwd.php?id=<?php echo $v["id"]; ?>" class="tablelink">重置密码</a> 
        
             <?php if($v["name"]!="admin"){ ?>
             <a href="./adminDelete.php?id=<?php echo $v["id"]; ?>" class="tablelink"> 删除</a>
             <?php } ?>
        </td>
        </tr> 
        
            <?php } ?>
        </tbody>
    </table>
    
   
    <div class="pagin">
        
    	<div class="message">共<i class="blue"><?php echo $count;?></i>条记录，当前显示第&nbsp;<i class="blue">1&nbsp;</i>页</div>
      
         <ul class="paginList">
        <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
        <li class="paginItem"><a href="javascript:;">1</a></li>
        <li class="paginItem"><a href="javascript:;">4</a></li>
        <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
</body>
</html>
