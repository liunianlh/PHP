<?php
require_once './Framework/Model.class.php';
class BlogModel extends Model{
    
    public function getList($start=0,$num=0,$page){
        $sql="select * from newblog";
        $start = ($page-1)*$num;
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $all= $this->link->selectCount("select count(*) as num from newblog");
        $countpage= ceil($all/$num);
        $list= $this->link->selectByAll($sql);
        $list["countpage"]=$countpage;
        $list["all"]=$all;
        $list["num"]=$num;
        return $list;
    }
    public function getUserList(){
        $sql="select * from userblog";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
     public function reset($id,$status) {
        $sql = "update newblog set status={$status} where id={$id}";
        $result = $this->link->update($sql);
        return $result;
    }
}

