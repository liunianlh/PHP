<?php

namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;

class Index extends Controller{
  
    public function index(){
        $admin = new Admin();
        
        $data = $admin->select();
        $this->assign("list", $data);
        return $this->fetch("index");
    }
    public function update($id){
        $admin = new Admin();
        $info = $admin->find($id);
        $this->assign("info", $info);
        return $this->fetch("info");
        
    }
    public function save(){
        //将post的数据全部获取
        $data = input("post.");
        
        $admin = new Admin();
        
        $result = $admin->isUpdate(true)->save($data);
        var_dump($result);
    }
    
    public function add(){
        
    }
    public function delete(){
        
    }
}