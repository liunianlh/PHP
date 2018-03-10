<?php

//1.声明命名空间
namespace app\admin\model;

//2.引入model基类
use think\Model;

//3.创建类
class Admin extends Model{
    
    //定义数据的转化  
   protected $resultSetType = 'collection';

   protected $autoWriteTimestamp = true;
   
//   // 定义添加时间的字段名
    protected $createTime = 'add_time';
//    //定义修改时间的字段名
    protected $updateTime = "up_time";
    
//      protected $field = true;

}