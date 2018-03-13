<?php
namespace application\index\controller;

use application\index\model\Admin as AdminModel;


use think\Controller;

class Admin extends Controller
{
    
    public function add(){
        $admin = new AdminModel();
//        第一种赋值，入库
//        //这是增加
        $admin->name = "123";
        $admin->pwd="1234";
        $admin->nickname="zhangsan";
        $admin->save();
//        
//        //这是修改
//        $admin->name = "321";
//        $admin->pwd="4321";
//        $admin->nickname="lisi";
//        $admin->save();
//        
//        //这是增加
//        $admin->name = "123";
//        $admin->pwd="1234";
//        $admin->nickname="zhangsan";
//        $admin->save();
//        
//        
//        //继续新增
//        unset($admin->id);
//        $admin->name = "321";
//        $admin->pwd="4321";
//        $admin->nickname="lisi";
//        $admin->isUpdate(false)->save();
//        
//        
//        
//        
//        
//        var_dump($result);
//        第二种赋值入库
//        $admin->data([
//            'name'  =>  'thinkphp',
//            'pwd' =>  'thinkphp@qq.com'
//        ]);
//        $admin->save();
//        //获取新增的id
//        echo $admin->id;
        
        
    }
    
    
    public function update(){
        $admin= model("Admin");
        $result = $admin::get(1);
        $result->name="update";
        $result->save();
    }
    
    
    
//    public function select(){
//        $data = model("model文件的名字")->find(1);   
//        var_dump($data);
//        $data = model("Admin")->find(1);   
//        var_dump($data);
//    }
    
//    public function select(){
//        
//        $data = AdminModel::get(2);
//        var_dump($data->toArray());
//    }
//    
//    
//    
//    
//   public function index(){
//       //实例化调用admin模型
//       $admin = new AdminModel();
////       一维数组的转化方式
//       $data = $admin->where("id",32)->find();//输出的是对象
//       var_dump($data);//将最终的数据转化为数组
//       //多维数组的转化方式
////       $data = $admin->select();//输出的是对象
//////       var_dump(collection($data)->toArray());//将最终的数据转化为数组
////       var_dump($data->toArray());
//   }
}
