<?php
require_once './Framework/Model.class.php';
class OrderModel extends Model{
    public function getList($u_id){
        $sql = "select * from user where id='{$u_id}'";
        $result = $this->link->query($sql);
        if($result){
            $sql1 ="select * from buy where u_id='{$result["id"]}' order by id desc";
            $result1 = $this->link->queryAll($sql1);
            foreach ($result1 as $k=>$v){
            $sql2 = "select * from money where id = '{$v["m_id"]}'";
            $result2 = $this->link->query($sql2);
            //获取电影院号
            $sql4 = "select * from movie_theatre where id='{$result2["t_id"]}'";
            $result4 = $this->link->query($sql4);
            $result2["t_id"]=$result4["name"];
            //获取大厅号
            $sql5 = "select * from hall where id='{$result2["h_id"]}'";
            $result5 = $this->link->query($sql5);
            $result2["h_id"]=$result5["name"];
            //获取第几排第几列
            $people_row= ceil($v["seat"]/15);
            $people_line=($v["seat"]%15);
            $result2["people_row"] =$people_row;
            $result2["people_line"] =$people_line;
            $sql3 = "select * from movie where id='{$result2["m_id"]}'";
            $result3 = $this->link->query($sql3);
            $result2["list"] = $result3;
            $result1[$k]["list"] = $result2;
            
            }
            return $result1;
        }else{
            return "";
        }
        
    }
    
    
}

