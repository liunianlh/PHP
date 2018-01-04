<?php

//常用的函数



//调取工程类，实例化model

function M($name){
       require './tools/Factory.class.php';
        return Factory::getModel($name);
}

function C($name){
    $data1=require './config/database.php';
    $data2=require './config/config.php';
    
    $data= array_merge($data1,$data2);
    if(isset($data[$name])){
        return $data[$name];
    } else {
        return "";
    }
    
}