<?php
require_once './Framework/Model.class.php';
class ListModel extends Model{
    public function getList($type,$start=0,$num=0,$page){
        $sql="select * from newblog";
        $start = ($page-1)*$num;
        if($type!=0){
            $sql=$sql." where type={$type}";
        }
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $all= $this->link->selectCount("select count(*) as num from newblog where type={$type}");
        $countpage= ceil($all/$num);
        $list= $this->link->selectByAll($sql);
        $list["countpage"]=$countpage;
        $list["all"]=$all;
        $list["num"]=$num;
        return $list;
    }
    public function getListById($id){
        $sql="select * from newblog where id={$id}";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
    public function getUserList() {
        $sql="select * from userblog";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
}

