<?php
session_start();
header('content-type:text/html;charset=utf-8');

//登录的信息验证
$name=$_GET["name"];
$pwd=$_GET["pwd"];


//对数据进行验证
if($name ==""||$pwd==""){
    $msg=array("msg"=>"用户名或密码不能为空");
    echo json_encode($msg);
    exit;
}

//验证用户名和密码是否匹配
$con= mysqli_connect("localhost","root","root","app");
if(!$con){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");                                                                        
    echo json_encode($msg);
    exit();
}
mysqli_set_charset($con, "utf8");

//$pwd=md5($pwd);
$sql="select * from admin where name='{$name}' and pwd='{$pwd}'";
$result= mysqli_query($con, $sql);

if(!$result){
    $msg=array("status"=>0,"msg"=>"系统错误，请重试");
    echo json_encode($msg);
    exit();
}




$row= mysqli_fetch_assoc($result);

if($row!=null){
    setcookie("user_name",$row["name"], time()+3600*24);
//    setcookie("user_name",$row["pwd"], time()+3600*24);
    echo "<script>alert('登录成功！');window.location.href='../main.html';</script>";
    exit();
}
 else {
    echo "<script>alert('用户名或密码错误！');window.location.href='../login.html';</script>";
    exit();
}
