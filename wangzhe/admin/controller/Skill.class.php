<?php

//道具管理
class Skill extends common{
    
//    道具管理列表
    
    public function SkillList(){
        $list= $this->link->select("select * from summoner_skill");
        
        $this->template->template_assign("list",$list);
        
        $this->template->template_display("Skill/skillList.tpl"); 
        
    }
//    
//    
////    道具管理添加
    public function add(){
         $this->template->template_display("Skill/add.tpl"); 
    }
    
    public  function insert(){
        $name= $this->post("name","");
        $img= $this->post("url","");
        $jieshao= $this->post("jieshao","");
        $shiyong= $this->post("shiyong","");
    if($name==""||$img==""||$jieshao==""||$shiyong==""){
            $this->show(100,"添加信息不完整", "");
        }
        
        $sql="insert into summoner_skill(name,image,decribe,unlock_level) values('$name','$img','$jieshao','$shiyong')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
////    
//////       修改
//    
    public function edit(){
//        传参
        $id= $this->get("id",0);
        $sql="select * from summoner_skill where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("Skill/edit.tpl"); 
    }
//    
//    
    public function update(){
         $id= $this->post("id","");
        $name= $this->post("name","");
        $img= $this->post("url","");   
       $jieshao= $this->post("jieshao","");
       $shiyong= $this->post("shiyong","");
        if($name==""||$id<=0||$img==""||$jieshao==""||$shiyong==""){
            $this->show(100,"添加信息不完整", "");
        }

        $sql="update summoner_skill set name='{$name}',image='{$img}',decribe='{$jieshao}',unlock_level='{$shiyong}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from summoner_skill where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Skill&action=skillList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
//    
}
