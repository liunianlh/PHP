<?php
require_once './Framework/Model.class.php';
class UserModel extends Model{
    
    public function getList($start=0,$num=0,$page){
        $sql="select * from userblog";
        $start = ($page-1)*$num;
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $all= $this->link->selectCount("select count(*) as num from userblog");
        $countpage= ceil($all/$num);
        $list= $this->link->selectByAll($sql);
        $list["countpage"]=$countpage;
        $list["all"]=$all;
        $list["num"]=$num;
        return $list;
    }
}

