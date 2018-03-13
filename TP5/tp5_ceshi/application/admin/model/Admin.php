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
   
   // 定义添加时间的字段名
    protected $createTime = 'add_time';
    //定义修改时间的字段名
    protected $updateTime = "up_time";
    
    /**
     * 状态的获取器
     */
    public function getStatusAttr($value){
        $status = [0=>"未启用0",1=>"未启用",2=>"关闭",3=>"审核中",4=>"审核未通过"];
        return $status[$value];
    }
    
    /**
     * 数据表中不存在字段使用获取器group_name
     */
    public function getGroupNameAttr($value,$data){
        $name = [0=>"未启用",1=>"超级管理员",2=>"管理员",3=>"编辑",4=>"财务"];
        
        return $name[$data["group_id"]];
    }
    
    /**
     * 修改器
     */
    public function setPwdAttr($value){
        return md5($value);
    }
}