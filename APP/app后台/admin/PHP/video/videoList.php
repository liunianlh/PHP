
<?php
//查询所有管理员列表的信息
include '../mysqlDB.class.php';
$link= mysqlDB::getInstance("app");
//获取记录
$sql="select * from video";
$data=$link->select($sql);

//获取记录
$sql="select * from video";
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
    <span>管理信息：</span>
    <ul class="placeul">
    <li><a href="#">视频管理</a></li>
    <li><a href="#">视频列表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
     
        <th>视频ID<i class="sort"><img src="../../images/px.gif" /></i></th>
        <th>用户</th>
        <th>视频</th>
        <th>主题</th>
        <th>发布时间</th>
        <th>是否审核</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
           <?php foreach ($data as $k=>$v){?>
        
        <tr>
 
        <td><?php echo $v["video_id"]; ?></td>
        <td><?php echo $v["name"]; ?></td>
        <td><?php echo $v["video_src"]; ?></td>
        <td><?php echo $v["content"]; ?></td>
        
  
        <td><?php echo $v["year"]; ?></td>
        <td>
            <?php if($v["examine"]!="1"){ ?>
            <a href="./videoExamine.php?id=<?php echo $v["id"]; ?>">审核</a>
            <?php } ?>
            <?php if($v["examine"]!=""){ ?>
            <a href="#">已审核</a>
             <?php } ?>
        </td>
        <td>
    
            <a href="./videoDelete.php?id=<?php echo $v["id"]; ?>" class="tablelink">删除</a>
        </td>
        </tr>
        
        <tr>

        
           <?php }?>
        </tbody>
    </table>
    
   
    <div class="pagin">
    	<div class="message">共<i class="blue"><?php echo $count ?></i>条记录，当前显示第&nbsp;<i class="blue">1&nbsp;</i>页</div>
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
        <span><img src="../images/ticon.png" /></span>
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
