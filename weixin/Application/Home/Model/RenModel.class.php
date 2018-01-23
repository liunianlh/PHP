<?php

require_once './Framework/Model.class.php';
class RenModel extends Model{
    public function getRen($id){
        $sql = "select * from performer_info where id='{$id}'";
        $result = $this->link->query($sql);
        if($result){
            return $result;
        } else {
            return "";
        }

    }
    
    
}
