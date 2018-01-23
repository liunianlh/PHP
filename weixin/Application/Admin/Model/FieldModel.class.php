<?php
require_once './Framework/Model.class.php';
class FieldModel extends Model{
    //获取电影场次
    public function getList(){
        $sql4 ="select * from movie_theatre";
        $result4 = $this->link->queryAll($sql4);
         $str= "";
        foreach($result4 as $k=>$v){
           $str =$v["id"].",".$str; 
        }
        $str=rtrim($str,",");
        $sql = "select * from money where t_id  in ({$str})";
        $result = $this->link->queryAll($sql);
        if($result){
        foreach ($result as $k=>$v){
            $sql1 = "select * from movie where id='{$v["m_id"]}'";
            $result1= $this->link->query($sql1);
            if($result1){
                $result[$k]["m_id"] = $result1["name"];
            }
            $sql2 = "select * from movie_theatre where id='{$v["t_id"]}'";
            $result2= $this->link->query($sql2);
            if($result2){
                $result[$k]["t_id"] = $result2["name"];
            }
            $str =$v["people"];
            $str= str_replace(",", "", $str);
            $str = strlen($str);
            $result[$k]["people"] =$str;
            $sql3 = "select * from hall where id='{$v["h_id"]}'";
            $result3= $this->link->query($sql3);
            if($result3){
                $result[$k]["h_id"] = $result3["name"];
            }
        }
        return $result;
        }else{
            return "";
        }
    }
    public function getMovieTheatre(){
        $sql4 ="select * from movie_theatre";
        $result4 = $this->link->queryAll($sql4);
        if($result4){
            return $result4;
        } else {
            return "";
        }
    }
    public function FieldAdd($id){
        $sql = "insert into money(t_id) value('{$id}')";
        $result = $this->link->add($sql);
        if($result){
            return $result;
        } else {
            return "";
        }
    }

    public function getMoveList(){
        //获取电影列表
        $sql = "select * from movie";
        $result = $this->link->queryAll($sql);
        if($result){
            return $result;
        }else{
            return "";
        }
    }
    public function reviseMovie($id,$m_id){
        //修改电影的内容
        $sql = "update  money set m_id='{$m_id}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getHallList(){
        //获取大厅列表
        $sql = "select * from hall";
        $result = $this->link->queryAll($sql);
        if($result){
            return $result;
        }else{
            return "";
        }
    }
    public function ReviseHall($id,$hall){
        $sql = "update money set h_id='{$hall}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function ReviseSeat($id,$seat){
        $sql = "update money set seat='{$seat}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function ReviseMoney($id,$money){
        $sql = "update money set money='{$money}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function ReviseDate($id,$date){
        $sql = "update money set date='{$date}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
     public function ReviseTime($id,$time){
        $sql = "update money set time='{$time}' where id='{$id}'";
        $result = $this->link->update($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
}