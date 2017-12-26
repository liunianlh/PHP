<?php

//公共的model


class Model{
    public $link;
    public function __construct(){
//        实例化数据库
//        引入数据库
        require_once './tools/mysqlDB.class.php';
       $database=require './config/database.php';
//        var_dump($database);
//        mysqlDB::getInstance("wangzhe");
        $this->link=mysqlDB::getInstance($database["database"],$database["localhost"],$database["name"],$database["pwd"],$database["charset"]);
    }
}

//
//$model=new Model();