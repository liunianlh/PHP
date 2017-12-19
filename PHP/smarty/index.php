<?php

//实例化
require 'smarty/Smarty.class.php';
$smarty=new Smarty();


//定义一些基本目录
//1.html的存放目录
$smarty->template_dir="./Templates";

//2.编译文件存放目录
$smarty->compile_dir="./Templates_c";


//3.传值
//$smarty->assign("在html中的变量名称","在PHP中的变量名称");

$content="this is a HTML";
$name="p";
$smarty->assign($name,$content);

//4.选择页面

$smarty->display("index.tpl");