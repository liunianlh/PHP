<?php

//接收参数分发
$module = isset($_GET["m"])?$_GET["m"]:"Home";//分组（模块）
$controller = isset($_GET["c"])?$_GET["c"]:"Index";//控制器
$action = isset($_GET["a"])?$_GET["a"]:"index";//方法

define("CONTROLLER", $controller);
define("ACTION", $action);
define("MODULE", $module);
define("TEMPLATE", dirname(__FILE__)."/Application/{$module}/view");//模版目录
define("TEMPLATE_C", dirname(__FILE__)."/Public/View_c");//编译目录
//引入配置文件
require_once './Common/function.php';
//引入文件
require_once "./Application/{$module}/Controller/{$controller}Controller.class.php";
//实例化
$name = $controller."Controller";
$object = new $name();

$object->$action();

?>





