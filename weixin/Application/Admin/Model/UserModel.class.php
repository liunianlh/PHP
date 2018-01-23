<?php
require_once "Framework/Model.class.php";
class UserModel extends Model{
    //获取用户列表
    public function getList(){
        $sql = "select * from user";
        $result = $this->link->queryAll($sql);
        if($result){
            return $result;
        }else{
            return "";
        }
    }

}