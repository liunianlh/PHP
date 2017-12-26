<?php

/* 
入口文件
 */
//        require DOCUMENT_ROOT."/tools/smarty/Smarty.class.php";
//        $this->smarty= new Smarty();
//        $this->smarty->template_dir=DOCUMENT_ROOT."/template";
//        $this->smarty->compile_dir=DOCUMENT_ROOT."/template_c";

//定义基本的常量

define("DOUCMENT_ROOT", dirname(__FILE__));
//网站目录


//接收参数
$controller= isset($_GET["c"])?$_GET["c"]:"Index";
$action= isset($_GET["a"])?$_GET["a"]:"index";

define("CONTROLLER", $controller);
define("ACTION", $action);
define("TEMPLATE", dirname(__FILE__)."/View");
define("TEMPLATE_C", dirname(__FILE__)."/Public/View_c");




//分发
require_once './Controller/'.$controller."Controller.class.php";


$name=$controller."Controller";
$object=new $name();
$object->$action();