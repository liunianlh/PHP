<?php

class Controller{
    
    
    
    public $smarty;
    public function __construct() {
        $this->setSmarty();
    }

    public function json ($code,$message,$data){
        $code = (int)$code;
        $message  =(string)$message;
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "data"=>$data
        );
                return json_encode($result);
    }
    
    
    //输出
    public function show($code,$message,$data){
        echo $this->json($code, $message, $data);
        exit();
    }
    
    //封装get 获取值
    public function get($name,$value=""){
        return isset($_GET[$name])?$_GET[$name]:$value;
    }
    
    //post
     public function post($name,$value=""){
        return isset($_POST[$name])?$_POST[$name]:$value;
    }
    
    
    
    public function setSmarty(){
        require './tools/smarty/Smarty.class.php';
        $this->smarty=new Smarty();
        
//        基础路径
        $this->smarty->template_dir="TEMPLATE";
         $this->smarty->compile_dir="TEMPLATE_C";
    }
 
    
}
