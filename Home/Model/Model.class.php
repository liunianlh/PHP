<?php

class Model {

    protected $sql;

//    链接数据库
    public function __construct() {
        require_once 'tools/mysqliDB.class.php';
        $data = require 'config/database.php';
        $this->sql = mysqliDB::getInstance($data);
    }

}

?>