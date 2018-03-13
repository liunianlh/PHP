<?php

namespace application\index\controller;

use think\Controller;
use think\Db;

class Login extends Controller{
    
    /**
     * 显示登录页面
     */
    public function index(){
       
//        只能在view中使用__JS__,__STATIC__,__CSS__,__ROOT__
        
       // return $this->display("<font color='red' size='20'>{$name}</font>",["name"=>'zhangsan']);
        return $this->fetch();
    }
    
    /**
     * 验证登录信息
     */
    public function check($name="",$pwd=""){
        if(empty($name) || empty($pwd)){
            $this->error("信息填写不完整");
        }
        
        $result = Db::name("admin")->where(["name"=>$name,"pwd"=>$pwd])->find();
        if($result == null){
            $this->error("填写的用户名或密码错误");
        }else{
            $this->success("登录成功", "login/weclome");
        }
    }
    
    /**
     * 欢迎页面
     */
    public function weclome(){
        echo "123";
    }
    
}