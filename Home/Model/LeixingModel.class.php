<?php

//管理员的model
//引入model
require_once 'Model/Model.class.php';

class LeixingModel extends Model {

//   查询页面所需的数据
    public function getLeixingList() {
        $sql = "select * from vocation";
        $data = $this->sql->selecttwo($sql);
        $leixing=array();
        foreach ($data as $a=>$b){
            $leixing[$b["id"]]=$b["name"];
        }
        return $leixing;
    }

}
