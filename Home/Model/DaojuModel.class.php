<?php

//管理员的model
//引入model
require_once 'Model/Model.class.php';

class DaojuModel extends Model {

//   查询页面所需的数据
    public function getDaojuList($where="",$star=0,$sum=0) {
        $sql = "select * from prop";
        if($where!=""){
            $sql ="select * from hero"." where {$where}";
        }
        if($sum!=0){
            $sql ="select * from hero"." limit {$star},{$sum}";
        }
        $data = $this->sql->selecttwo($sql);
      
        return $data;
    }

}
