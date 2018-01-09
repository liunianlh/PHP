<?php
class Controller{
    public $smarty;
    
    public function __construct() {
        $this->setSmarty();
        $arr = array("login","checkLogin");
        $arr1=array("Admin");
        if(!in_array(ACTION, $arr)&&in_array(MODULE,$arr1)){
            $this->loginCookie();
        }
    }
    /**
     * 登陆cookie验证
     */
    public function loginCookie(){
        $loginCookie = $this->cookie("admin_name");
        if($loginCookie==false){
            echo "<script>window.location.href='http://localhost/web/index.php?m=Admin&c=Index&a=login';</script>";
            exit();
        }
    }
    public function json($code, $message, $data) {
        $code = (int) $code;
        $message = (string) $message;
        $result = array(
            "code" => $code,
            "message" => $message,
            "data" => $data
        );
        return json_encode($result);
    }

    /**
     * 最终输出数据
     */
    public function show($code, $message, $data) {
        echo $this->json($code, $message, $data);
        exit();
    }

    /**
     * get获取数据
     * @param type $name
     * @param type $value
     */
    public function get($name, $value = "") {
        return isset($_GET[$name]) ? $_GET[$name] : $value;
    }

    /**
     * post获取数据
     * @param type $name
     * @param type $value
     */
    public function post($name, $value = "") {
        return isset($_GET[$name]) ? $_GET[$name] : $value;
    }
    public function cookie($user_id){
        return isset($_COOKIE[$user_id])?$_COOKIE[$user_id]:"";
    }
    public function setSmarty(){
        require './Framework/smarty/Smarty.class.php';
        $this->smarty = new Smarty();
//        
//        //基础路径
        $this->smarty->template_dir = TEMPLATE;
        $this->smarty->compile_dir = TEMPLATE_C;
    }
}

