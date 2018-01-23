<?php
/**
 * 常用函数
 */
//调取工程类，实例化demo
function M($name,$module=""){
    require_once "./Framework/Factory.class.php";
    return Factory::getModel($name,$module);
}
//配置名称
function deploy($name){
    $data1 = require './Application/'.MOUDULE.'/Config/database.php';
    $data2 = require './Application/'.MOUDULE.'/Config/config.php';
    $data = array_merge($data1,$data2);
    if(isset($data[$name])){
        return $data[$name];
    }else{
        return "";
    }
}
