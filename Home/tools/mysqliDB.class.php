<?php
class mysqliDB {
    private $localhost;
    private $user;
    private $pwd;
    public $charset;
    public $db;
//  连接的结果
    public static $con;
//  错误信息
    private $error;
    //连接对象 修改成私有
    private static $link;

    //任何想要这个类的对象都通过这个方法
    public static function getInstance($kuming) {
        if (!isset(self::$link)) {
            self::$link = new self($kuming);
        }
        return self::$link;
    }
    
//		构造函数 修改成私有 
    public function __construct($kuming) {
//      从外边获取值，有值获取，没值默认
        $this->localhost = isset($kuming['host']) ? $kuming['host'] : 'localhost';
        $this->user = isset($kuming['user']) ? $kuming['user'] : 'root';
        $this->pwd = isset($kuming['pwd']) ? $kuming['pwd'] : 'root';
        $this->charset = isset($kuming['charset']) ? $kuming['charset'] : 'utf8';
        $this->db = $kuming['db'];

        $this->lianjie();
        $this->jiaoyan();
    }

//  连接数据库
    public function lianjie() {
        self::$con = mysqli_connect($this->localhost, $this->user, $this->pwd, $this->db);
        if (!self::$con) {
            $this->error = "数据库连接失败" . mysqli_connect_error();
        }
    }

//  校验编码
    public function jiaoyan() {
        mysqli_set_charset(self::$con, $this->charset);
    }

    //  执行SQL语句的增加
    public function insert($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        return $result;
    }

//  执行SQL语句的删除
    public function delete($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        return $result;
    }

//  执行SQL语句的修改
    public function update($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        return $result;
    }

    //	执行SQL语句的查询一条语句并返回查询数据
    public function selectone($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        $arr = array();
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

//	执行SQL语句的查询多条语句并返回查询数据
    public function selecttwo($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        return $arr;
    }

    //	查询满足条件的条数
    public function count($sql) {
        $result = mysqli_query(self::$con, $sql);
        if (!$result) {
            $this->error = "sql执行失败" . mysqli_error($this->con);
        }
        $row = mysqli_fetch_assoc($result);
        $count = $row["count"];
        return $count;
    }

    //  收集错误
    public function getError() {
        return $this->error;
    }
}
?>