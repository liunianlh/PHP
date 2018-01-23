<?php
require_once 'Framework/Model.class.php';
class LoginModel extends Model{
    public function LoginAdmin($name,$pwd){
        $sql = "select * from admin where name='{$name}' and pwd='{$pwd}'";
        $result = $this->link->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
}