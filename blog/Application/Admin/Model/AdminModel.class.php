<?php
require_once './Framework/Model.class.php';
class AdminModel extends Model{
    
    public function getList($start=0,$num=0,$page){
        $sql="select * from admin";
        $start = ($page-1)*$num;
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $all= $this->link->selectCount("select count(*) as num from admin");
        $countpage= ceil($all/$num);
        $list= $this->link->selectByAll($sql);
        $list["countpage"]=$countpage;
        $list["all"]=$all;
        $list["num"]=$num;
        return $list;
    }
    public function addAdmin($name,$pwd){
        $sql="insert into admin(name,pwd,status) values('{$name}','{$pwd}',1)";
        $result= $this->link->add($sql);
        return $result;
    }
    public function update($id) {
        $pwd= md5("123456");
        $sql = "update admin set pwd='{$pwd}' where id={$id}";
        $result = $this->link->update($sql);
        return $result;
    }
    public function deleteAdmin($id) {
        $sql = "delete from admin where id={$id}";
        $result = $this->link->delete($sql);
        return $result;
    }
    public function reset($id,$status) {
        $sql = "update admin set status={$status} where id={$id}";
        $result = $this->link->update($sql);
        return $result;
    }
    public function login($name,$pwd) {
        $sql = "select * from admin where name='{$name}' and pwd='{$pwd}'";
        $result = $this->link->selectByOne($sql);
        return $result;
    }
}

