<?php

//删除管理员


$id=isset($_GET["id"])?$_GET["id"]:0;

if(is_numeric($id)==false){
      echo "<script>alert('传参格式不正确！');window.history.go(-1);</script>";
}



$sql="delete from video where id={$id}";
include '../mysqlDB.class.php';
$link=mysqlDB::getInstance("app");
$result=$link->delete($sql);
if($result){
    echo "<script>alert('删除成功！');window.location.href='videoList.php';</script>";
    exit();
}
 else {
    echo "<script>alert('删除失败！');window.location.href='videoList.php;</script>";
    exit();
}
