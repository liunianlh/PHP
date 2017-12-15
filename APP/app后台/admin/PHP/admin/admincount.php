<?php

//重置密码的功能




$sql="select * from admin";
include '../mysqlDB.class.php';
$link=mysqlDB::getInstance("app");
$result=$link->count($sql);


if($result){
    echo "<script>alert('密码重置成功！');window.location.href='adminList.php';</script>";
    exit();
}
 else {
    echo "<script>alert('密码重置失败！');window.location.href='adminList.php;</script>";
    exit();
}