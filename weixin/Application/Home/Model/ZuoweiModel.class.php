<?php

//引入model
require_once './Framework/Model.class.php';

class ZuoweiModel extends Model{
    public function addZuowei($m_id,$t_id,$h_id,$seats,$time,$date,$u_id){
        $sql1 = "select id from hall where name='{$h_id}'";
        $result1 =$this->link->query($sql1);
        $sql = "select * from money where m_id='{$m_id}' and t_id='{$t_id}' and h_id='{$result1["id"]}' and time='{$time}'and date='{$date}'";
        $result = $this->link->query($sql);
        $seat = $result["people"].','.$seats;
        $sql2 ="update money set people='{$seat}' where id='{$result["id"]}'";
        $result2 = $this->link->update($sql2);
        $timeNow = date("Y年m月d日",time());
        //这里我需要按照座位逐个添加数据
        $seat= explode(",", $seats);
        foreach ($seat as $k=>$v){
        $sql3 = "insert into buy(u_id,m_id,schedule,time,seat) value( '{$u_id}','{$result["id"]}','1','{$timeNow}','{$v}')";
        $result3 = $this->link->add($sql3);
        }
        
       
        if($result3&&$result2&&$result1&&$result){
            return true;
        }else{
            return false;
        }
    }
    
    
    
}