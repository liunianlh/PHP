<?php
//namespace app\admin\controller;
//use think\Db;
//use think\Controller;
//class Admin extends Controller{
// 
//      
//      
//    public function select(){
//        $data=Db::query("select * from news");
//       // $this->assign('admin',$data);
//         return view("admin",["admin"=>$data]);
//       // dump($data);
//       // 方法二
////        $data=Db::table("news")->where("id",1)->find();
////        dump($data);       
//    }
//    
//        
//}



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
     public function add(){
         $Admin = new Admin($_POST);
//         var_dump($Admin);
// post数组中只有name和email字段会写入
     $Admin->allowField(['news','details'])->save();
 if($Admin){
           $this->success('添加成功', 'Index/index');   
       }else{
           $this->success('添加失败', 'Index/index'); 
       }

          }
          
          
               public function updata(){
         $Admin = new Admin();
         $data=input("post.");
         $rel=$Admin->isUpdate(true)->save($data);
       //  var_dump($Admin);
       //  
      
// post数组中只有name和email字段会写入
//     $Admin->allowField(['news','details'])->save();
            if($rel){
           $this->success('修改成功', 'Index/index');   
       }else{
           $this->error('修改失败', 'Index/index'); 
       }

          }
          
//     删除数据
      public function delete($id){
            $admin = new Admin();
        $info = $admin->find($id);
        $new_id=Admin::where('id','=',$id)->delete();
        
//       删除   模板::where('字段名','操作',条件)->delete();
       if($new_id){
           $this->success('删除成功', 'Index/index');   
       }else{
           $this->success('删除失败', 'Index/index'); 
       }

    }
}