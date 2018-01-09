<?php

header('content-type:text/html;charset=utf-8');

class mysqlDB {

    //成员属性（必须用的，但基本不变）
    private $localhost = "localhost";
    private $uesr = "root";
    private $pwd = "root";
    public $db;
    public $charset = "utf8";
    //连接的结果
    public static $con;
    //错误信息
    private $error;
    //声明对象
    public static $link;
    public $msg;

    //声明一个单例方法
    public static function getInstance($db, $localhost = "localhost", $user = "root", $pwd = "root", $charset = "utf8") {
        if (empty(self::$link)) {
            self::$link = new self($db, $localhost, $user, $pwd, $charset);
        } 
//        else {
//            $this->db = $db;
//            $this->setDB();
//        }
        return self::$link;
    }

    //成员方法（尽可小的单元，一个方法，干一件事）
    public function __construct($db, $localhost = "localhost", $user = "root", $pwd = "root", $charset = "utf8") {
        $this->db = $db;
        $this->localhost = $localhost;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->charset = $charset;

        $this->connect();
        $this->charset();
    }

    //连接数据库
    public function connect() {
        self::$con = mysqli_connect($this->localhost, $this->user, $this->pwd, $this->db);
        if (!self::$con) {
            $this->error = "数据库连接失败" . mysqli_connect_error();
        }
    }

    //校验编码
    public function charset() {
        mysqli_set_charset(self::$con, $this->charset);
    }

    public function setDB() {
        mysqli_select_db(self::$con, $this->db);
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
            $this->error = "sql执行失败" . mysqli_error(self::$con);
        }
        return $result;
    }

    /**
     * 执行查询的方法
     * @param type $sql
     */
    //     执行查询的方法
//    查询所有
    public function selectByAll($sql) {
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

//    查询多条记录
    public function selectByOne($sql) {
       //执行sql语句
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        $arr = array();
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

//    添加记录
    public function add($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            $this->error = "插入失败" . mysqli_error($this->con);
        }
        return $result;
    }

//删除记录
    public function delete($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            $this->error = "删除失败" . mysqli_error($this->con);
        }
        return $result;
    }

    //替换
    public function update($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            $this->error = "替换失败" . mysqli_error($this->con);
        }
        return $result;
    }

    //查询字段
    public function selectByField($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            return array();
        }
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row["num"];
        }
        return $arr;


    }

    //查询条数
    public function selectCount($sql) {
        //执行sql语句
        $result = $this->querysql($sql);
        if ($result == false) {
            return 0;
        }
        //获取语句
        $row = mysqli_fetch_assoc($result);
        return $row["num"];
    }

//     获取错误信息的函数
    public function getError() {
        return $this->error;
    }

}
?>
