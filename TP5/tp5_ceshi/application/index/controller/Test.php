<?php
//1.声明命名空间
namespace application\index\controller;

use think\View;
//2.定义类(类名称和文件名称必须保持一致)
class Test{
    
//    3.定义方法
    public function index(){
        $view = new View();
        //传值
        $view->assign("name", "zhangsan");
        //选择页面输出
        return $view->display("<font color='red'>12</font>");
    }
}

