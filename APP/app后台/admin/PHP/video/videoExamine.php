<?php

//视频审核


$id=isset($_GET["id"])?$_GET["id"]:0;

if(is_numeric($id)==false){
      echo "<script>alert('传参格式不正确！');window.history.go(-1);</script>";
}



$sql="update video set examine='1' where id={$id}";
include '../mysqlDB.class.php';
$link=mysqlDB::getInstance("app");
$result=$link->update($sql);
if($result){
    echo "<script>alert('审核成功！');window.location.href='videoList.php';</script>";
    exit();
}
 else {
    echo "<script>alert('审核失败！');window.location.href='videoList.php;</script>";
    exit();
}

