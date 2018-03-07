<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Login extends Controller{
    public function login(){
        return view("login");
    }   
    
    
    public function select(){
        $data=Db::query("select * from news");
        dump($data);
//        $data=Db::table("news")->where("id",1)->find();
//        dump($data);
        
    }
    
    
    public function login_login($user_name,$user_passwd){
//        查询语句
    $user=Db::table('admin')->where('user',$user_name)->where('pwd',$user_passwd)->find();
      if($user){  
         $this->success('登录成功', 'Admin/select');      
        }else{
        echo '登录失败';
            }
    
    }
    
}
