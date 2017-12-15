<?php
class user extends common{
    //登录
    public function login(){
        $username = parent::post("name","");
        $pwd = parent::post("pwd","");
        if(empty($username) || empty($pwd)){
            $this->show(100, "用户信息不完整", "");
        }
       
//        $pwd = md5($pwd);
        $sql = "select * from user where name ='{$username}' and pwd ='{$pwd}'";
         
        $result = $this->link->select($sql);
    
        if($result !=null){
            $this->show(200, "用户登录成功", $result);          
        }else{
            $this->show(100101, "用户登录失败,请检查！", "");
        }
    }
    
    
    
    
    
    //注册
    public function register(){
        $username = $this->post("name","");
        $pwd = $this->post("pwd","");
        $nickname = $this->post("nickname","");
         if(empty($username) || empty($pwd) || empty($nickname)){
            $this->show(100, "用户信息不完整",""); 
        }
        $sql = "select * from user where name = '{$username}'";
        if($this->link->select($sql) !=null){
            $this->show(100103,"用户名已存在","");
        }
        $pwd = md5($pwd);
        $sql = "insert into user (name,pwd,nickname) values ('{$username}','{$pwd}','{$nickname}')";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200, "注册成功", $result);
        }else{
            $this->show(100102, "注册失败", "");
        }
    }
    
    
    //获取用户信息
//    public function getUserInfo(){
//        $id = $this->post("id",0);
//        $sql = "select * from user where id= '{$id}'";
//        $data = $this->link->query($sql);
//        $this->show(200, "获取成功", $data);
//    }
}