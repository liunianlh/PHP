<?php

//道具管理
class yx_Skill extends common{
    
//    道具管理列表
    
    public function yx_skill_List(){
        $list= $this->link->select("select * from skill");
        
        $this->template->template_assign("list",$list);
        
        $this->template->template_display("yx_Skill/yx_Skill.tpl"); 
        
    }
//    
//    
//////    道具管理添加
    public function add(){
         $this->template->template_display("yx_Skill/yx_Skill_add.tpl"); 
    }
    
    public  function insert(){
        $name= $this->post("name","");
        $url= $this->post("url","");
        $cd= $this->post("cd","");
        $pm= $this->post("pm","");
        $porperty= $this->post("porperty","");
        $num= $this->post("num","");
         $hero_id= $this->post("hero_id","");
//    if($name==""||$img==""||$jieshao==""||$shiyong==""){
//            $this->show(100,"添加信息不完整", "");
//        }
        
        $sql="insert into skill(name,cd,pm,porperty,num,url,hero_id) values('$name','$cd','$pm','$porperty','$num','$url','$hero_id')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
//////    
////////       修改
////    
    public function edit(){
//        传参
        $id= $this->get("id",0);
        $sql="select * from skill where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("yx_Skill/edit.tpl"); 
    }
//    
//    
//    public function update(){
//         $id= $this->post("id","");
//        $name= $this->post("name","");
//        $img= $this->post("url","");   
//       $jieshao= $this->post("jieshao","");
//       $shiyong= $this->post("shiyong","");
//        if($name==""||$id<=0||$img==""||$jieshao==""||$shiyong==""){
//            $this->show(100,"添加信息不完整", "");
//        }
//
//        $sql="update summoner_skill set name='{$name}',image='{$img}',decribe='{$jieshao}',unlock_level='{$shiyong}' where id='{$id}'";
//        $result= $this->link->update($sql);
//        if($result){
//            $this->show(200, "修改成功","");
//
//        }else{
//            $this->show(100, "修改失败","");
//        }
//    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from skill where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=yx_Skill&action=yx_Skill_List';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
//    
}
