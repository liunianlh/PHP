<?php

//重置密码的功能


$id=isset($_GET["id"])?$_GET["id"]:0;
$display=isset($_GET["display"])?$_GET["display"]:0;
if(is_numeric($id)==false){
      echo "<script>alert('传参格式不正确！');window.history.go(-1);</script>";
}


if($display==2){
    $sql="update comment set display='1' where id={$id}";
}
if($display==1){
    $sql="update comment set display='2' where id={$id}";
}


include '../mysqlDB.class.php';
$link=mysqlDB::getInstance("app");
$result=$link->update($sql);
if($result){
    echo "<script>window.location.href='comment.php';</script>";
    exit();
}
 else {
    echo "<script>window.location.href='comment.php;</script>";
    exit();
}