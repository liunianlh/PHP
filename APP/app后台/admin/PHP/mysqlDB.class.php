<?php

header('content-type:text/html;charset=utf-8');

/**
 * 处理数据库的类
 */
class mysqlDB {

    //成员属性(必须用的，但是基本不变)
    private $localhost = "localhost";
    private $user = "root";
    private $pwd = "root";
    public $db;
    public $charset = "utf8";
    //接连的结果
    public static $con;
    //错误信息
    private $error;
//    声明对象
    public static $link;

//    声明一个单例方法
    public static function getInstance($db, $localhost = "localhost", $user = "root", $pwd = "root", $charset = "utf8") {
        if (empty(self::$link)) {
            self::$link = new self($db, $localhost, $user, $pwd, $charset);
        }

//       如果相同的库则不用加else，不相同则加
//        else {
//            $this->db=$db;
//            $this->setDB();
//        }
        return self::$link;
    }

    //成员方法(尽可小的单元，一个方法，干一件事)

    public function __construct($db, $localhost = "localhost", $user = "root", $pwd = "root", $charset = "utf8") {
        $this->db = $db;
        $this->localhost = $localhost;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->charset = $charset;
        $this->connect();
        $this->charset();
    }

    /**
     * 连接数据库
     */
    public function connect() {
        self::$con = mysqli_connect($this->localhost, $this->user, $this->pwd, $this->db);
        if (!self::$con) {
            $this->error = "数据库连接失败" . mysqli_connect_error();
        }
    }

    /**
     * 校验编码
     */
    public function charset() {
        mysqli_set_charset(self::$con, $this->charset);
    }

    public function setDB() {
        mysqli_set_db(self::$con, $this->db);
    }

    /**
     * 执行sql语句
     * @param string sql
     * @return boolean
     */
    public function querysql($sql) {

        if ($sql == "") {
            $this->error = "sql语句为空";
            return false;
        }
        $result = mysqli_query(self::$con, $sql);
        if ($result == false) {
            $this->error = "sql执行失败".mysqli_error(self::$con);
        }

        return $result;
    }

    /**
     * 执行查询的方法
     * @param type $sql
     */
    public function select($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            return array();
        }
        //获取语句
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        return $arr;
    }
       

    
////       获取全部
//    public function selectBYAll($sql) {
//            $result = $this->querysql($sql);
//        if ($result == false) {
//            return array();
//        } 
//        $arr=array();
//         while ($row = mysqli_fetch_assoc($result)) {
//            $arr[]=$row;
//        } 
//    }
    
////    增加数据
    public function add($sql) {
          $result = $this->querysql($sql);
        if ($result == false) {
            $this->error="插入失败";
        }
         else {
             $this->error="插入成功";
             }
             return $result; 
             
    }
    
////  删除数据
    public function delete($sql) {
                 //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
             $this->error="删除失败";
        }  else{
            $this->error="删除成功";
        }       
          return $result; 
    }
    
////    更新数据
    public function update($sql) {
        $result = mysqli_query(self::$con, $sql);
        if ($result == false) {
            $this->error = "修改失败";
        } else {
            $this->error = "修改成功！";
        }
        return $result;
    }
    
    //查询条数
    public function count($sql) {
                 //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
           $this->error="查询失败";
        } 
        else{
            return mysqli_num_rows($result);
        }     
    }
//

//    
    
    /**
     * 获取错误信息的函数
     */
    public function getError() {
        return $this->error;
    }

}

echo "<br/>";

////调用单例方法
//$link = mysqlDB::getInstance("test");
//$sql="updata ceshi set pwd='123456' where name='刘赫'";
//$list = $link->updata($sql);
////var_dump($list);