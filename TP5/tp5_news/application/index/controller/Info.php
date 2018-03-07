<?php
namespace app\index\controller;
use think\Db;
class Info{
    public function info(){
        return view("info",["name"=>"张三","sge"=>"12"]);
    }   
    
    
    public function select(){
        $data=Db::query("select * from news");
        dump($data);
//        $data=Db::table("news")->where("id",1)->find();
//        dump($data);
        
    }
    
}
