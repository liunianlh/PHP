<?php

//管理员管理的操作类

class Admin extends common{
   
//    登录
    public function login(){
//        echo DOCUMENT_ROOT;
        $this->template->template_display("Admin/login.tpl");
    }
    
//   登录验证
    public function checkLogin(){
      $name= $this->post("name","");
      $pwd= $this->post("pwd","");
      if($name==""||$pwd==""){
          $this->show("100","信息填写不完整", "");
      }
      
      
      $pwd=md5($pwd);
//      验证信息
      $sql="select * from admin where admin_name='{$name}' and admin_pwd='{$pwd}'";
      
      $result=$this->link->select($sql);
      
      if($result==null){
          $this->show("100","用户名或密码错误","");
      }

      if($result[0]["admin_status"]==2){
          $this->show(100, "此号被封", "");
      }
      setcookie("admin_id",$result[0]["admin_id"],time()+60*60*24);
      setcookie("admin_name",$result[0]["admin_name"],time()+60*60*24);
            
           $this->show("200","登陆成功","");
      
    }

    public function shouye(){
         $this->template->template_display("Admin/index.tpl");
    }




//    添加管理员
     public function add(){
        $name= $this->post("name","");
        $pwd= $this->post("pwd","");
         if($name == "" ||$pwd==""){
             $this->show("100", "用户名和密码不能为空", "");
              }
             
//             判断用户名是否存在
//             $sql="select count(*) as num from admin where admin_name='{$name}'";
//            $num=$this->link->count($sql);
//            if($num>0){
//                $this->show("101","用户名已存在","");
//            }
            
            
//            入库
            $pwd=md5($pwd);
            $sql="insert into admin(admin_name,admin_pwd,admin_time,admin_status) value('$name','$pwd','".time()."',1)";
//            $this->link->add($sql);
            $result= $this->link->add($sql);
            
            if($result){
                $this->show("200", "添加成功", "");
            }
            else{
                $this->show("102","添加失败", "");
            }
        
    }
    
    
    
//    修改管理员状态
 public function editStatus(){
     $id=$this->post("id",0);
     $status= $this->post("status",0);
     
     if($id<=0 ||($status!=1&&$status!=2)){
         $this->show("100","提交信息错误");
     }
     $status=($status==1)?2:1;
     $sql="update admin set admin_status={$status} where admin_id={$id}";
     $result= $this->link->update($sql);
     if($result){
         $this->show("200","修改成功","");
     }
     else{
         $this->show("100","修改失败");
     }
 }
 
// 增加管理员
      public function adminList(){
          
          $sql="select * from admin";
       $list=$this->link->select($sql);
          
          
         $this->template->template_assign("list",$list);
         $this->template->template_display("Admin/adminList.tpl");
    }
    
}