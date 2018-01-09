<?php
require_once './Model/Model.class.php';
class PropModel extends Model{
    
    /**
     * 获取道具列表 
     */
    public function getList(){
        $sql="select * from prop";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
}

