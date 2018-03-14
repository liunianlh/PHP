<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Role;
use app\admin\model\Admin;
class Pin extends Controller{
        
//    品牌管理
      public function index(){

       $list=Role::all();
       $this->assign("list",$list);
          return $this->fetch();
                 
       }
       
//       添加数据
            public function add(){

             return $this->fetch();
         }
         
         
          public function insert(){

                $Role = new Role($_POST);
//                echo $Role;
           
            // post数组中只有name和email字段会写入
                 $Role->allowField(['name','description'])->save();
             if($Role){
                       $this->success('添加成功', 'pin/index');   
                   }else{
                       $this->success('添加失败', 'pin/index'); 
                   }

            }
            
            
//            删除数据
            
            
                //          删除数据
      public function delete($id){

        $new_id=Role::where('id','=',$id)->delete();
        
//       删除   模板::where('字段名','操作',条件)->delete();
       if($new_id){
           $this->success('删除成功', 'pin/index');   
       }else{
           $this->success('删除失败', 'pin/index'); 
       }

    }
}
