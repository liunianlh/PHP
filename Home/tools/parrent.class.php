<?php

class parrent {

    protected $sql;
    protected $smarty;
    public $kuming = array("db" => "wangzhe");
    public function __construct() {
        $this->sql = mysqliDB::getInstance($this->kuming);
        $this->smarty = new zxsmarty();
    }

    public static function json($code, $message, $data) {
        $code = (int) $code;
        $message = (string) $message;
        $data = (array) $data;

        $result = array(
            "code" => $code,
            "message" => $message,
            "data" => $data,
        );
        return json_encode($result);
    }

    public function get_post($name, $way = "get", $value = "") {
        if ($way == "post") {
            return isset($_POST[$name]) ? $_POST[$name] : $value;
        } else {
            return isset($_GET[$name]) ? $_GET[$name] : $value;
        }
    }
    public function alert_location($url,$hint="") {
        if($hint!=""){
            return "<script>alert('{$hint}');window.location.href='{$url}';</script>";
        }else{
            return "<script>window.location.href='{$url}';</script>";
        }
        
    }

}

?>