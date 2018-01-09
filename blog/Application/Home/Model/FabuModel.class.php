<?php
require_once './Framework/Model.class.php';
class FabuModel extends Model{
     public function addList($id,$title,$content,$time) {
        $sql="insert into newblog(title,content,click,addtime,user_id,status) values('{$title}','{$content}',0,'{$time}','{$id}',1)";
        $result=$this->link->add($sql);
        return $result;
    }
    public function count($id) {
        $sql="select count(*) as num from newblog where user_id={$id}";
        $count= $this->link->selectCount($sql);
        return $count;
    }
}