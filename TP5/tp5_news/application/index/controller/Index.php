<?php
//namespace app\index\controller;
//use think\Db;
//class Index{
//    public function index(){
//        return view("index",["name"=>"张三","sge"=>"12"]);
//    }   
//    
//    
//    public function select(){
//        $data=Db::query("select * from news");
//        dump($data);
//
//        
//    }
//    
//}

namespace app\index\controller;
use app\index\model\Admin;
use think\Controller;
class Index extends Controller{
  
       public function index(){
        $index= new admin();
        
        $data = $index->select();
        $this->assign("index", $data);
        return $this->fetch("index");
    }
}