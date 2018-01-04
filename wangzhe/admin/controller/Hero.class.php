<?php

//英雄管理
class Hero extends common{
    
//    英雄管理列表
    
    public function heroList(){
        
        $vocationList= $this->link->select("select * from vocation");
        
        $newArr=array();
        foreach ($vocationList as $vk=>$vv){
            $newArr[$vv["id"]]=$vv["name"];
        }
//        var_dump($newArr);
//        exit();
        
        $list= $this->link->select("select * from hero");
        
        $newHero=array();
        foreach($list as $k=>$v){
            $newHero[$v["id"]]=$v["name"];           
        }
        
        
        
        
        
         foreach($list as $k=>$v){
        
        //              查询对应英雄关系
        $sql="select * from hero_guanxi where zhu_hero_id='{$v["id"]}'";
        $touch= $this->link->select($sql);   
        $list[$k]["good"]="";//最佳搭档
        $list[$k]["repress"]="";//压制英雄
        $list[$k]["berepress"]="";//被压制英雄
        
        foreach ($touch as $tk=>$tv){
            switch ($tv["guanxi"]){
            case 1:
                $list[$k]["good"].=$newHero[$tv["guanxi_hero_id"]];
                break;
              case 2:
                $list[$k]["repress"].=$newHero[$tv["guanxi_hero_id"]];
                break;
              case 3:
                $list[$k]["berepress"].=$newHero[$tv["guanxi_hero_id"]];
                break;
            
            }
        }
        }
        
        
        
        
        
        
        
        
        
        
//        var_dump($newHero);
//        exit();
        
//        英雄召唤师技能
        
        
//        echo $v["id"];
//        exit();
        
//      
        
        
        
        
        foreach ($list as $k=>$v){
            $sql="select * from skill where id in({$v["zhu_skill_id"]},{$v["fu_skill_id"]})";
            $data= $this->link->select($sql);
            foreach ($data as $k1=>$v1){
                if($v1["id"]==$v["zhu_skill_id"]){
                    $list[$k]["sm_name"]=$v1["name"];
                }
                 if($v1["id"]==$v["fu_skill_id"]){
                    $list[$k]["ss_name"]=$v1["name"];
                }
            }
        }
        
        
        $this->template->template_assign("list",$list);
        $this->template->template_assign("vocationList",$newArr);
        $this->template->template_display("Hero/heroList.tpl"); 
            
        
        
    }
//    
////    
////////   英雄添加
    public function add(){
        $vocationList= $this->link->select("select * from vocation");
        $this->template->template_assign("vocationList",$vocationList);
         $this->template->template_display("Hero/add.tpl"); 
    }
//    
    public  function insert(){
//        名称
        $name= $this->post("name","");
//        头像路径
        $photo= $this->post("photo","");
////        职业
        $vocation_id= $this->post("vocation_id","");
////        周免
        $free_week= $this->post("free_week","");
////       生存能力
        $live= $this->post("live","");
////        攻击伤害
        $hurt= $this->post("hurt","");
////        技能效果
       $effect= $this->post("effect","");
////        上手难度
        $difficulty= $this->post("difficulty","");
//        
////        新手推荐
        $new_recomment= $this->post("new_recomment","");
//        
////        英雄历史
        $story= $this->post("story","");
        

//        $sql="insert into hero(name,photo,vocation_id,free_week,live,hurt,effect,difficulty,)values('$name','$photo','$free_week','$live','$hurt','$effect','$difficulty','$new_recomment','$history')";
        $sql="insert into hero(name,photo,live,vocation_id,hurt,effect,difficulty,free_week,story)values('$name','$photo','$live','$vocation_id','$hurt','$effect','$difficulty','$free_week','$story')";
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
        $id= $this->get("id",0);
        $sql="select * from hero where id={$id}";
     
        
        $return=$this->link->select($sql);
//        var_dump($return);
        $this->template->template_assign("info",$return);
        
         $this->template->template_display("Hero/edit.tpl"); 
    }
//////    
//////    
    public function update(){
         $id= $this->post("id","");
//            名称
        $name= $this->post("name","");
//        头像路径
        $photo= $this->post("photo","");
////        职业
        $vocation_id= $this->post("vocation_id","");
////        周免
        $free_week= $this->post("free_week","");
////       生存能力
        $live= $this->post("live","");
////        攻击伤害
        $hurt= $this->post("hurt","");
////        技能效果
       $effect= $this->post("effect","");
////        上手难度
        $difficulty= $this->post("difficulty","");
//        
////        新手推荐
        $new_recomment= $this->post("new_recomment","");
//        
////        英雄历史
        $story= $this->post("story","");
//        if($name==""||$id<=0||$img==""||$miaoshu==""){
//            $this->show(100,"添加信息不完整", "");
//        }

        $sql="update hero set name='{$name}',photo='{$photo}',vocation_id='{$vocation_id}',free_week='{$free_week}',live='{$live}',hurt='{$hurt}',effect='{$effect}',difficulty='{$difficulty}',new_recomment='{$new_recomment}',story='{$story}' where id='{$id}'";
        $result= $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功","");

        }else{
            $this->show(100, "修改失败","");
        }
    }
     public function Delete(){
          $id= $this->get("id","");
          $sql="delete from hero where id='{$id}'";
        $result= $this->link->delete($sql);
        if($result){
//            $this->show(200, "删除成功","");
            echo "<script> window.location.href='index.php?class=Hero&action=heroList';</script>";
           
        }else{
            $this->show(100, "删除失败","");
        }
     }
//    
     
     
     
//     获取指定英雄技能
    public function getSkillById(){
        $id= $this->get("id",0);       
//        获取英雄对应的技能
        $sql="select * from skill where hero_id={$id}";
        $list= $this->link->select($sql);
        $this->show(200, "查询成功", $list);
        
    }
    
//    插入到数据库
    public function saveSkill(){
        $id= $this->post("id",0);
        $sm= $this->post("sm_suggest",0);
        $ss= $this->post("ss_suggest",0);
        
        
        $sql="update hero set zhu_skill_id={$sm},fu_skill_id={$ss} where id={$id}";
        
        if($this->link->update($sql)){
            $this->show(200,"修改成功",'');
        }else{
            $this->show(100,"修改失败","");
        }
        
    }
    
    
       
//    修改本周是否免费
 public function editStatus(){
     $id=$this->post("id",0);
     $status= $this->post("status",0);
     
     if($id<=0 ||($status!=1&&$status!=2)){
         $this->show("100","提交信息错误");
     }
     $status=($status==1)?2:1;
     $sql="update hero set free_week='{$status}' where id='{$id}'";
     $result= $this->link->update($sql);
     if($result){
         $this->show("200","修改成功","");
     }
     else{
         $this->show("100","修改失败");
     }
 }
  
 
 //    修改本周是否新手推荐
 public function editStatus2(){
     $id=$this->post("id",0);
     $status= $this->post("status",0);
     
     if($id<=0 ||($status!=1&&$status!=2)){
         $this->show("100","提交信息错误");
     }
     $status=($status==1)?2:1;
     $sql="update hero set new_recommend='{$status}' where id='{$id}'";
     $result= $this->link->update($sql);
     if($result){
         $this->show("200","修改成功","");
     }
     else{
         $this->show("100","修改失败");
     }
 }
    
 
// 英雄管理入库
    public function saveTouch(){
 
          $id=$this->post("id",0);
        $type=$this->post("type",0);
        $hero1=$this->post("hero1",0);
        $hero2=$this->post("hero2",0);
        $remark1=$this->post("remark1","");
        $remark2=$this->post("remark2","");
      
        $sql="delete from hero_guanxi where zhu_hero_id={$id} and guanxi={$type}";
        $this->link->delete($sql);
        
        $sql="insert into hero_guanxi(zhu_hero_id,guanxi_hero_id,guanxi,miaosu) values('{$id}','{$hero1}','{$type}','{$remark1}')";
       
        $this->link->add($sql);
         $sql="insert into hero_guanxi(zhu_hero_id,guanxi_hero_id,guanxi,miaosu) values('{$id}','{$hero2}','{$type}','{$remark2}')";
        $this->link->add($sql);
        
        $this->show(200,"操作成功-",'');
        
        
           
    }
    public function getTouch(){
        $zhu_hero_id= $this->get("id",0);
        $type= $this->get("type",0);
        $sql="select * from hero_guanxi where zhu_hero_id={$zhu_hero_id} and guanxi={$type}";
        
        $list= $this->link->select($sql);
        $this->show(200,"$sql",$list);
    }
    
}
