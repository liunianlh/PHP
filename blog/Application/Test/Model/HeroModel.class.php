<?php
require_once './Model/Model.class.php';
class HeroModel extends Model{
    
    public function getList($where="",$order="id asc",$start=0,$num=0){
        $sql="select * from hero";
        if($where!=""){
            $sql=$sql." where {$where}";
        }
        if($order!=""){
            $sql=$sql." order by {$order}";
        }
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $list= $this->link->selectByAll($sql);
        return $list;
    }
    public function getInfoById($id){
        $sql="select * from hero where id={$id}";
        $list= $this->link->selectByOne($sql);
        return $list;
    }
}

