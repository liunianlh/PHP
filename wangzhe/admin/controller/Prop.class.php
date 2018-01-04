<?php

//道具管理
class Prop extends common{
    
//    道具管理列表
    
    public function PropList(){
        $list= $this->link->select("select * from prop");
        
        $this->template->template_assign("list",$list);
        
        $this->template->template_display("Prop/propList.tpl"); 
        
    }
//    
//    
//    道具管理添加
    public function add(){
         $this->template->template_display("Prop/add.tpl"); 
    }
    
    public  function insert(){
        $name= $this->post("name","");
        $img= $this->post("url","");
        $leixing= $this->post("leixing","");
        $shoujia= $this->post("shoujia","");
        $zongjia= $this->post("zongjia","");
        $shuxing= $this->post("shuxing","");
        $miaoshu= $this->post("miaoshu","");
    if($name==""||$img==""||$leixing==""||$shoujia==""||$zongjia==""||$shuxing==""||$miaoshu==""){
            $this->show(100,"添加信息不完整", "");
        }
        
        $sql="insert into prop(name,image,type,price,total,decribe,attribute) values('$name','$img','$leixing','$shoujia','$zongjia','$shuxing','$miaoshu')";
        $result= $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功","");
        }else{
            $this->show(100, "添加失败","");
        }
    }
//    
////       修改
    
    public function edit(){
//        传参
        $id= $this->get("id",0);
        $sql="select * from prop where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("prop/edit.tpl"); 
    }
    
    
    public function update(){
        $name= $this->post("name","");
        $img= $this->post("url","");
        $id= $this->post("id","");
       $leixing= $this->post("leixing","");
       $shoujia= $this->post("shoujia","");
       $zongjia= $this->post("zongjia","");
       $shuxing= $this->post("shuxing","");
       $miaoshu= $this->post("miaoshu","");
        if($name==""||$id<=0||$img==""||$leixing==""||$shoujia==""||$zongjia==""||$shuxing==""||$miaoshu==""){
            $this->show(100,"添加信息不完整", "");
        }

        $sql="update prop set name='{$name}',image='{$img}',type='{$leixing}',price='{$shoujia}',total='{$zongjia}',decribe='{$shuxing}',attribute='{$miaoshu}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from prop where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Prop&action=propList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
//    
}
