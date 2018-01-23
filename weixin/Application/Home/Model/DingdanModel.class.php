<?php
require_once './Framework/Model.class.php';
class DingdanModel extends Model{
    public function getDingdan($m_id,$u_id,$time,$date,$seat){
        $sql = "select * from movie where id='{$m_id}'";
        $result = $this->link->query($sql);
        if($result){
            $sql1 = "select * from money where m_id='{$m_id}' and time='{$time}' and date='{$date}'";
            $result1 = $this->link->query($sql1);
            $result["money"]=$result1;
            $sql2="select * from movie_theatre where id='{$result1["t_id"]}'";
            $result2 = $this->link->query($sql2);
            $result["money"]["t_id"] = $result2["name"];
            $sql3="select * from hall where id='{$result1["h_id"]}'";
            $result3 = $this->link->query($sql3);
            $result["money"]["h_id"] = $result3["name"];
            //获取第几排第几列
            $people_row= ceil($seat/15);
            $people_line=($seat%15);
            $result["people_row"] =$people_row;
            $result["people_line"] =$people_line;
            return $result;
        } else {
            return "";    
        }
    }
    
    
}
