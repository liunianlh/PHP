<?php
namespace application\index\controller;

class Index
{
   public function index(){
       
//       数组新的写作形式
//       array("下标"=>"值");
//       PHP5.0版本以上可以使用以下方式定义数组
//       ["下标"=>"值"]
       //使用view助手
//       return view("index");

       return view("index",["name"=>"zhangsan","age"=>"12"]);
   }
}
