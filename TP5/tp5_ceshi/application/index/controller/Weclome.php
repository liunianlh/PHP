<?php

namespace application\index\controller;

use think\Controller;

class Weclome extends Controller{
    
    protected $beforeActionList = [
        "a",
        "b"=>["except"=>"f"],//这些方法名，不使用b这个前置方法
        "c"=>["only"=>"d"],//c这个前置方法，只有d可以使用
    ];
    public function a(){
        echo "a<br/>";
    }
    public function b(){
        echo "b<br/>";
    }
    public function c(){
        echo "c<br/>";
    }
    public function d(){
        echo "d<br/>";
    }
    public function f(){
        echo "f<br/>";
    }
    public function e(){
        echo "e<br/>";
    }
    
//    成功
    public function login(){
//        $this->success("操作成功","Weclome/e");
//        $this->error("操作失败");
        $this->redirect("Weclome/d");
    }
    
}
