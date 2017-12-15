<?php

header('content-type:text/html;charset=utf-8');

/**
 * �������ݿ����
 */
class mysqlDB {

    //��Ա����(�����õģ����ǻ�������)
    private $localhost = "localhost";
    private $user = "root";
    private $pwd = "root";
    public $db;
    public $charset = "utf8";
    //�����Ľ��
    public static $con;
    //������Ϣ
    private $error;
//    ��������
    public static $link;

//    ����һ����������
    public static function getInstance($db, $localhost = "localhost", $user = "root", $pwd = "root", $charset = "utf8") {
        if (empty(self::$link)) {
            self::$link = new self($db, $localhost, $user, $pwd, $charset);
        }

//       �����ͬ�Ŀ����ü�else������ͬ���
//        else {
//            $this->db=$db;
//            $this->setDB();
//        }
        return self::$link;
    }

    //��Ա����(����С�ĵ�Ԫ��һ����������һ����)

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
     * �������ݿ�
     */
    public function connect() {
        self::$con = mysqli_connect($this->localhost, $this->user, $this->pwd, $this->db);
        if (!self::$con) {
            $this->error = "���ݿ�����ʧ��" . mysqli_connect_error();
        }
    }

    /**
     * У�����
     */
    public function charset() {
        mysqli_set_charset(self::$con, $this->charset);
    }

    public function setDB() {
        mysqli_set_db(self::$con, $this->db);
    }

    /**
     * ִ��sql���
     * @param string sql
     * @return boolean
     */
    public function querysql($sql) {

        if ($sql == "") {
            $this->error = "sql���Ϊ��";
            return false;
        }
        $result = mysqli_query(self::$con, $sql);
        if ($result == false) {
            $this->error = "sqlִ��ʧ��".mysqli_error(self::$con);
        }

        return $result;
    }

    /**
     * ִ�в�ѯ�ķ���
     * @param type $sql
     */
    public function select($sql) {
        //ִ��sql���
        $result = $this->querysql($sql);
        if ($result == false) {
            return array();
        }
        //��ȡ���
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        return $arr;
    }
       

    
////       ��ȡȫ��
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
    
////    ��������
    public function add($sql) {
          $result = $this->querysql($sql);
        if ($result == false) {
            $this->error="����ʧ��";
        }
         else {
             $this->error="����ɹ�";
             }
             return $result; 
             
    }
    
////  ɾ������
    public function delete($sql) {
                 //ִ��sql���
        $result = $this->querysql($sql);
        if ($result == false) {
             $this->error="ɾ��ʧ��";
        }  else{
            $this->error="ɾ���ɹ�";
        }       
          return $result; 
    }
    
////    ��������
    public function update($sql) {
        $result = mysqli_query(self::$con, $sql);
        if ($result == false) {
            $this->error = "�޸�ʧ��";
        } else {
            $this->error = "�޸ĳɹ���";
        }
        return $result;
    }
    
    //��ѯ����
    public function count($sql) {
                 //ִ��sql���
        $result = $this->querysql($sql);
        if ($result == false) {
           $this->error="��ѯʧ��";
        } 
        else{
            return mysqli_num_rows($result);
        }     
    }
//

//    
    
    /**
     * ��ȡ������Ϣ�ĺ���
     */
    public function getError() {
        return $this->error;
    }

}

echo "<br/>";

////���õ�������
//$link = mysqlDB::getInstance("test");
//$sql="updata ceshi set pwd='123456' where name='����'";
//$list = $link->updata($sql);
////var_dump($list);