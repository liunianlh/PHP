<?php

//皮肤管理
class Skin extends common{
    
//    皮肤管理列表
    
    public function SkinList(){
        
         $vocationList= $this->link->select("select * from hero");
           $newArr=array();
        foreach ($vocationList as $vk=>$vv){
            $newArr[$vv["id"]]=$vv["name"];
        }
        
//         var_dump($newArr);
//        exit();
        
        $list= $this->link->select("select * from skin");
        
        $this->template->template_assign("list",$list);
           $this->template->template_assign("vocationList",$newArr);
        $this->template->template_display("Skin/skinList.tpl"); 
        
      
     
    }
//    
//////    
////////   皮肤添加
    public function add(){
           $list= $this->link->select("select * from hero");     
        $this->template->template_assign("list",$list);
         $this->template->template_display("Skin/add.tpl"); 
    }
//    
    public  function insert(){
        $name= $this->post("name","");
        $img= $this->post("url","");
        $hero_id= $this->post("hero_id","");

//    if($name==""||$img==""||$skin==""){
//            $this->show(100,"添加信息不完整", "");
//        }
        
        $sql="insert into skin(name,image,hero_id) values ('$name','$img','$hero_id')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
////////    
////////       修改
////    
    public function edit(){
//        传参
        
        
          $vocationList= $this->link->select("select * from hero");
           $newArr=array();
        foreach ($vocationList as $vk=>$vv){
            $newArr[$vv["id"]]=$vv["name"];
        }
//                                                     
//           var_dump($newArr);
//         exit();
        $id= $this->get("id",0);
        $sql="select * from skin where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
//        exit();
        $this->template->template_assign("info",$return);
        $this->template->template_assign("vocationList",$newArr);
         $this->template->template_display("Skin/edit.tpl"); 
    }
////    
////    
    public function update(){
         $name= $this->post("name","");

        $img= $this->post("url","");   
       $hero_id= $this->post("hero_id","");
//        if($name==""||$id<=0||$img==""||$miaoshu==""){
//            $this->show(100,"添加信息不完整", "");
//        }

        $sql="update skin set name='{$name}',image='{$img}',hero_id='{$hero_id}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
    
    
    
    
    
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from skin where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Skin&action=skinList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
////    
}
