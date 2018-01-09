<?php

/**
 * 常用的函数
 */
//调取工程类，实例化model
function M($name) {
    require_once './Framework/Factory.class.php';
    return Factory::getModel($name);
}
/**
 * 配置的名称
 */
function C($name) {
    $data1=require './Application/'.MODULE.'/config/database.php';
//    $data2= require_once './Application/'.MODULE.'/config/config.php';
//    $data= array_merge($data1,$data2);
    if(isset($data1[$name])){
        return $data1[$name];
    }else{
        return "";
    }
}
/**
 * 字符串处理
 */
