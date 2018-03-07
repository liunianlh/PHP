<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Admin extends Controller{
 
      public function admin(){       
        return view("admin");
      }   
      
    public function select(){
        $data=Db::query("select * from news");
       // $this->assign('admin',$data);
         return view("admin",["admin"=>$data]);
       // dump($data);
       // 方法二
//        $data=Db::table("news")->where("id",1)->find();
//        dump($data);       
    }
    
        
}
