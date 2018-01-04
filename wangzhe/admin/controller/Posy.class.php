<?php

//道具管理
class Posy extends common{
    
//    道具管理列表
    
    public function PosyList(){
        $list= $this->link->select("select * from mingwen");
        
        $this->template->template_assign("list",$list);
        
        $this->template->template_display("Posy/posyList.tpl"); 
        
    }
//    
////    
//////   铭文添加
    public function add(){
         $this->template->template_display("Posy/add.tpl"); 
    }
    
    public  function insert(){
        $name= $this->post("name","");
        $img= $this->post("url","");
        $miaoshu= $this->post("miaoshu","");

    if($name==""||$img==""||$miaoshu==""){
            $this->show(100,"添加信息不完整", "");
        }
        
        $sql="insert into mingwen(name,image,miaosu)values('$name','$img','$miaoshu')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
//////    
//////       修改
//    
    public function edit(){
//        传参
        $id= $this->get("id",0);
        $sql="select * from mingwen where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("Posy/edit.tpl"); 
    }
////    
////    
    public function update(){
         $id= $this->post("id","");
        $name= $this->post("name","");
        $img= $this->post("url","");   
       $miaoshu= $this->post("miaoshu","");
        if($name==""||$id<=0||$img==""||$miaoshu==""){
            $this->show(100,"添加信息不完整", "");
        }

        $sql="update mingwen set name='{$name}',image='{$img}',miaosu='{$miaoshu}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from mingwen where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Posy&action=posyList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
//    
}
