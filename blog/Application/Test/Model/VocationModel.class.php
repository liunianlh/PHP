<?php

/* 
 * 英雄
 */
require_once './Model/Model.class.php';
class VocationModel extends Model{
    
    /**
     * 获取英雄列表 
     * @param type $where where条件
     * @param type $order 排序
     * @param type $start 查询开始的位置
     * @param type $num 查询单额条数，0为查询默认所有
     * @return array
     */
    
    public function getList(){
        $sql="select * from vocation";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
    public function getInfoById($id){
        $sql="select * from vocation where id={$id}";
        $list= $this->link->selectByOne($sql);
        return $list;
    }
}

