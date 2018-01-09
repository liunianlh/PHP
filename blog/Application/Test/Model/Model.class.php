<?php

/**
 * 公共的model
 */

class Model{
    
    public $link;
    public function __construct() {
        //实例化数据库
        //引入数据库
        require_once './tools/mysqlDB.class.php';
        $this->link = mysqlDB::getInstance(C("database"),C("localhost"),C("name"),C("pwd"),C("charset"));
    }
}
