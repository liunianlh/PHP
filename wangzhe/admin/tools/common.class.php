<?php
class common{
    protected  $link;
    protected $template;
    public function __construct() {
        $this->link = mysqlDB::getInstance("wangzhe");
        $this->template=new template();
     
//        不需要登录的方法名
        $actionName=array("login","checkLogin");
        if(!in_array(ACTION,$actionName)){
                 $this->checkLoginInfo();
        }
        
   
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
    
    
//    验证登录
    public function checkLoginInfo(){
          if(isset($_COOKIE["admin_id"])){
//            登录页面
//            $this->tiaozhuan("index.php?class=Admin&action=admin");
        }
        else{
////            验证当前登录的管理员是否被禁止
            $id=$_COOKIE["admin_id"];
            $sql="select * from admin where admin_id={$id} and admin_status=1";
            if($this->link->select($sql)==null){
//                跳转回登录页面
                $this->tiaozhuan("index.php?class=Admin&action=login");
                  }
        }
    }
    
//    跳转的方法
//        @param type $url:跳转的地址
  //        @param type $mag:跳转的提示

    
    public function tiaozhuan($url,$msg=""){
        if($msg==""){
            echo"<script>window.location.href='{$url}'</script>"; 
        }else{
            echo"<script>alert('{$msg}');window.location.href='{$url}';</script>";
        }
        
        
    }
}
