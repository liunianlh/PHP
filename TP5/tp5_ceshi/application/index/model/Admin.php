<?php

//1.声明命名空间
namespace application\index\model;

//2.引入model基类
use think\Model;

//3.创建类
class Admin extends Model{
    
//    重新定义主键的名字(默认id)
    protected $pk = "id";
    
     // 设置当前模型对应的完整数据表名称
    protected $table = 'think_admin';
    //定义数据的转化  
   protected $resultSetType = 'collection';
   
   //设置自动写入时间(写入的都是时间戳)
//   protected $autoWriteTimestamp = true;
   //写入的是时间点
//   protected $autoWriteTimestamp = "datetime";
   
   //关闭自动写入
   protected $autoWriteTimestamp = true;
   
   // 定义添加时间的字段名
    protected $createTime = 'add_time';
    //定义修改时间的字段名
    protected $updateTime = "up_time";
}