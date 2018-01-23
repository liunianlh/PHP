<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class LoginController extends Controller{
    //登陆页面打开
    public function LoginInfo(){
        $this->smarty->display("Application/Admin/View/Login/login.html");
    }
    //登陆的验证
        public function AdminLogin(){
        $name= $this->post("name");
        $pwd= $this->post("pwd");
        $pwd = md5($pwd);
        if(M("Login")->LoginAdmin($name,$pwd)){
            setcookie("admin_name",$name,time()+60*60*24,"/");
            $this->show("200", "登陆成功", "");
            exit();
        }else{
            $this->show("1002", "登陆失败", "");
            exit();
        }
    }
    public function LoginOut(){
        setcookie("admin_name","",time()-1,"/");
         $this->show("200", "退出成功", "");
            exit();
    }
    
}

