<?php
require_once './Model/Model.class.php';
class SummonerModel extends Model{
    
    /**
     * 获取召唤师技能列表 
     */
    
    public function getList(){
        $sql="select * from summoner_skill";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
}

