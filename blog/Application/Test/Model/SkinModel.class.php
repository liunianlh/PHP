<?php
require_once './Model/Model.class.php';
class SkinModel extends Model{
    
    public function getListByHeroId($heroId,$order="num desc"){
        $heroId=(int)$heroId;
        $sql="select * from skin where hero_id={$heroId}";
        if($order!=""){
            $sql=$sql." order by {$order}";
        }
        $list= $this->link->selectByAll($sql);
        return $list;
    }
}

