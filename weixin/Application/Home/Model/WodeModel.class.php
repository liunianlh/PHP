<?php

require_once './Framework/Model.class.php';
class WodeModel extends Model{
    public function getWode($id){
        $sql = "select * from user where id='{$id}'";
        $result = $this->link->query($sql);
        if($result){
            $sql1 ="select * from buy where u_id='{$result["id"]}'";
            $result1 = $this->link->queryAll($sql1);
            $str = "";
            foreach ($result1 as $k=>$v){
                 $str = $v["m_id"].",".$str;
            }
            $str = rtrim($str,",");
            if($result1){
                $result["b_id"]=$str;
            }
            return $result;
        }else{
            return "";
        }
    }
     
}

