<?php
require_once './Framework/Model.class.php';
class BuyModel extends Model{
    public function getBuyList(){
        //获取购买表内容
        $sql = "select * from buy";
        $result = $this->link->queryAll($sql);
        if($result){
        foreach($result as $k=>$v){
            $sql1="select * from user where id='{$v["u_id"]}'";
            $result1 = $this->link->query($sql1);
            if($result1){
               $result[$k]["u_id"]=$result1["name"]; 
            }
            $sql2="select * from movie where id='{$v["m_id"]}'";
            $result2 = $this->link->query($sql2);
            if($result2){
               $result[$k]["m_id"]=$result2["name"]; 
            }
        }
        return $result;
        }else{
            return "";  
        }
    }
    
    
}

