<?php

//入口文件
//自动引入类文件
function __autoload($classname) {
//    重新定义引入路径
    $fileDir = "./controller/{$classname}.class.php";

    if (is_file($fileDir)) {
        include $fileDir;
    } else {
        $fileDir = "./tools/{$classname}.class.php";
        if (is_file($fileDir)) {
            include $fileDir;
        }
    }
}

//网站根目录
define("DOCUMENT_ROOT", dirname(__FILE__));


$class = isset($_GET["class"]) ? $_GET["class"] : "index";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

//分发类和方法
//
//
//
//$admin=new Admin();
//$admin->index();

$object = new $class();
$object->$action();
