<?php

function M($name) {
    require_once 'tools/Factory.class.php';
    return  Factory::M($name);
}
function C($name) {
    $dataone=require 'config/database.php';
    $datatwo=require 'config/config.php';
    $data= array_merge($dataone,$datatwo);
    if(isset($data[$name])){
        return $data[$name];
    }else{
        return "";
    }
}
