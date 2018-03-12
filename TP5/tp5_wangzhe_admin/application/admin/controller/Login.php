<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Hero;

class Login extends Controller{
    public function login(){
        return view("login");
    }   
//      $admin = new Admin();
//        
//        $data = $admin->select();
//        $this->assign("list", $data);
//      
    
    public function select(){

//    return $this->fetch("index");
  //      $hero=Hero::get(2);
        //$hero->heroskill()->save(["name"=>"1111"]);
         //   echo $hero->heroskill->name;

//        echo $list->hero_skill()->name;
//        var_dump($list);
       // $list = Hero::has('id','=',1)->select();
        
       // $list = Hero::get(1)->toArray();
        //var_dump($list);
//        echo $list;
      //  $hero->heroskill->save(['name' => 'thinkphp']);
         return $this->redirect('Index/index');
    }
     
    public function login_login($user_name,$user_passwd){
//        查询语句
    $user=Db::table('admin1')->where('user',$user_name)->where('pwd',$user_passwd)->find();
      if($user){  
         $this->success('登录成功', 'Login/select');      
        }else{
         $this->error('登录失败', 'Login/login');      
            }
    
    }
    
}


