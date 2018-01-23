<?php
require_once './Framework/Model.class.php';
class PerformerModel extends Model{
    public function getPerformer(){
        //获取购买表内容
        $sql = "select * from performer_info";
        $result = $this->link->queryAll($sql);
        if($result){
            return $result;
        }else{
            return "";  
        }
    }
    public function PerformerAdd($name,$english,$date,$city,$abstract,$photo){
        $sql = "insert into performer_info(name,english,date,city,abstract,photo) value('{$name}','{$english}','{$date}','{$city}','{$abstract}','{$photo}')";
        $result =$this->link->add($sql);
        if($result){
            return true;
        }else{
            return "";
        } 
    }
    public function PerformerXiuGai($id,$name,$english,$date,$city,$abstract,$photo){
        $sql = "update performer_info set name='{$name}',english='{$english}',date='{$date}',city='{$city}',abstract='{$abstract}',photo='{$photo}' where id='{$id}'";
        $result =$this->link->update($sql);
        if($result){
            return true;
        }else{
            return "";
        } 
    }
    public function PerformerDelete($id){
         $sql ="delete from performer_info where id='{$id}'";
         $result =$this->link->delete($sql);
         if($result){
            return true;
        }else{
            return "";
        } 
        
    }
    
}

