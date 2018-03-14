<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Role;
use app\admin\model\Admin as adminModel;

use think\Loader;
class Admin extends Controller{
//    管理员列表
        

    
    
//    管理员管理
      public function index(){
//              $info=Role::get(1);
//        dump($info->admin->toArray());
       $list=adminModel::all();
       $this->assign("list",$list);
          return $this->fetch();
                 
       }
         public function add(){
         //    使用role表中的数据
             $list=Role::all();
//             var_dump($list);
        $this->assign("role",$list);
             return $this->fetch();
         }
         
//         后台数据插入数据库
         
    public function insert(){
      
//        获取数据
        $data=input("post.");
//        加载验证规则
        $validate=Loader::validate('Admin');
        if(!$validate->check($data)){
           $this->error($validate->getError());
        }else{
                $adminModel=new adminModel;
                if($adminModel->except("password1")->save($data)){
//                    except("password1")排除字段
                    $this->success("添加成功","admin/admin/index");
                }else{
                   $this->success("添加成功");
                }
        }

    }
    
    //          删除数据
      public function delete($id){

        $new_id=adminModel::where('id','=',$id)->delete();
        
//       删除   模板::where('字段名','操作',条件)->delete();
       if($new_id){
           $this->success('删除成功', 'admin/index');   
       }else{
           $this->success('删除失败', 'admin/index'); 
       }

    }
    
    
//    修改数据
//    
              public function update($id){
         //    使用role表中的数据
             $list=Role::all();
           $this->assign("role",$list);
             return $this->fetch();
         }
    
                 
     public function updata($id){

      
         
         
         
         $adminModel = new adminModel();
         $data=input("post.");
       $rel=$adminModel->isUpdate(true)->save($data,['id'=>$id]);
       //  var_dump($Admin);
       //  
 
// post数组中只有name和email字段会写入
//     $Admin->allowField(['news','details'])->save();
            if($new_id){
           $this->success('修改成功', 'Index/index');   
       }else{
           $this->error('修改失败', 'Index/index'); 
       }
//
         }

//    
         
}
