<?php
require_once './Framework/Model.class.php';
class XiangqingModel extends Model{
    public function getXiangqing($id){
        $sql = "select * from movie where id='{$id}'";
        $result = $this->link->query($sql);
        if($result){
            $sql1 ="select * from move_type where m_id='{$result["id"]}'";
            $result1 = $this->link->queryAll($sql1);
            if($result1){
                $str ="";
                foreach ($result1 as $k =>$v){
                    $str = $v["t_id"].",".$str;
                }
                $str = rtrim($str,",");
                $sql2 = "select * from type where id in ({$str})";
                $result2 =$this->link->queryAll($sql2);
                $str1 ="";
                foreach ($result2 as $key=>$value){
                     $str1 = $value["name"]."/".$str1;
                }
                 $str1 = rtrim($str1,"/");
                $result["type"] =$str1;
            }
            $sql3 = "select * from look where m_id='{$id}'";
            $result3 =  $this->link->query($sql3);
            if($result3){
                 $result["look"] =$result3["look"];
            }
            $sql4 ="select count(*) from comment where m_id='{$id}'";
            $result4 =  $this->link->query($sql4);
            if($result4){
                 $result["comment"] =$result4["count(*)"];
            }
            $sql5 ="select  *  from score where m_id='{$id}'";
            $result5 =  $this->link->queryAll($sql5);
            if($result5){
                $str2=0;
                foreach ($result5 as $a=>$s){
                    $str2 =$s["score"]+$str2;
                }
                 $result["score"] =$str2;
            }
            $sql6 ="select * from hint where m_id='{$id}'";
            $result6=$this->link->query($sql6);
            if($result6){
                 $result["hint"] =$result6["centent"];
            }
            $sql7 ="select * from performer where m_id='{$id}'";
            $result7 = $this->link->queryAll($sql7);
            $arr = array();
            foreach ($result7 as $d=>$f){
                $sql8 = "select * from performer_info where id = '{$f["performer_id"]}'";
                $result8 = $this->link->query($sql8);
                $arr1 = array("id"=>$result8["id"],"name"=>$result8["name"],"photo"=>$result8["photo"],"people"=>$f["people"]);
                array_push($arr, $arr1);
                
            }
            $result["list"] = $arr;
            return $result;
        } else {
            return "";
        }
        
    }
    
    
}

