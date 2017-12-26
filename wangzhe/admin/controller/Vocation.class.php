<?php

//职业管理
class Vocation extends common{
    
//    职业管理列表
    
    public function vocationList(){
        $list= $this->link->select("select * from vocation");
        
        $this->template->template_assign("list",$list);
        
        $this->template->template_display("Vocation/vocationList.tpl"); 
        
    }
    
    
//    职业管理添加
    public function add(){
         $this->template->template_display("Vocation/add.tpl"); 
    }
    
    public  function insert(){
        $name= $this->post("name","");
        $engName= $this->post("eng_name","");
        $img= $this->post("url","");
        
        if($name==""||$engName==""||$img==""){
            $this->show(100,"添加信息不完整", "");
        }
        
        $sql="insert into vocation(name,eng_name,image) values('$name','$engName','$img')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
    
//       修改
    
    public function edit(){
//        传参
        $id= $this->get("id",0);
        $sql="select * from vocation where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("Vocation/edit.tpl"); 
    }
    
    
    public function update(){
        $name= $this->post("name","");
        $engName= $this->post("eng_name","");
        $img= $this->post("url","");
        $id= $this->post("id","");
        if($name==""||$engName==""||$img==""||$id<=0){
            $this->show(100,"添加信息不完整", "");
        }

        $sql="update vocation set name='{$name}',eng_name='{$engName}',image='{$img}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from vocation where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Vocation&action=vocationList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
    
}
