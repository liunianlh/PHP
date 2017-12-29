<?php
header("Content-Type:text/html;charset=utf-8");
require 'function/function.php';//引入公共函数
//定义基本的常量
define("DOCUMENT_ROOT",dirname(__FILE__));//网站目录
//接收参数
$controller= isset($_GET["c"])?$_GET["c"]:"Index";
$action= isset($_GET["a"])?$_GET["a"]:"index";

define("CONTROLLER",$controller);//实例化类变量
define("ACTION",$action);//实例化类的方法发变量
define("TEMPLATE",dirname(__FILE__)."/View");//模板目录
define("TEMPLATE_C",dirname(__FILE__)."/Public/View_c");//编译目录
//分发
require_once  'Controller/'.$controller."Controller.class.php";//引入的类
$name=$controller."Controller";
$object=new $name();
$object->$action();
?>