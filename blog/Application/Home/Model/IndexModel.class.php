<?php
require_once './Framework/Model.class.php';
class IndexModel extends Model{
    public function getList(){
        $sql="select * from newblog";
        $list= $this->link->selectByAll($sql);
        return $list;
    }
    public function login($name,$pwd) {
        $sql="select * from userblog where name='{$name}' and pwd='{$pwd}'";
        $result=$this->link->selectByOne($sql);
        return $result;
    }
     public function register($name,$pwd,$nickname,$time) {
        $sql="insert into userblog(name,nickname,pwd,addtime) values('{$name}','{$nickname}','{$pwd}','{$time}')";
        $result=$this->link->add($sql);
        return $result;
    }
    public function getListById($id,$start,$num,$page){
        $sql="select * from newblog where user_id={$id}";
        if($num!=0){
            $sql=$sql." limit {$start},{$num}";
        }
        $all= $this->link->selectCount("select count(*) as num from newblog where user_id={$id}");
        $countpage= ceil($all/$num);
        $list= $this->link->selectByAll($sql);
        $list["countpage"]=$countpage;
        $list["all"]=$all;
        $list["num"]=$num;
        return $list;
    }
    public function delList($id) {
        $sql="delete from newblog where id={$id}";
        $list= $this->link->delete($sql);
        return $list;
    }
}

