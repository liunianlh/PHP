<?php

//重置密码的功能


$id=isset($_GET["id"])?$_GET["id"]:0;

if(is_numeric($id)==false){
      echo "<script>alert('传参格式不正确！');window.history.go(-1);</script>";
}

$pwd=md5("123456");

$sql="update admin set admin_pwd='{$pwd}' where admin_id={$id}";
include '../../tools/mysqlDB.class.php';
$link=mysqlDB::getInstance("wangzhe");
$result=$link->update($sql);
if($result){
    echo "<script>alert('密码重置成功！');window.location.href='http://localhost/wangzhe/admin/index.php?class=Admin&action=adminList';</script>";
    exit();
}
 else {
    echo "<script>alert('密码重置失败！');window.location.href='http://localhost/wangzhe/admin/index.php?class=Admin&action=adminList';</script>";
    exit();
}