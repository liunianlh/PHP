<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InfoModel
 *
 * @author WANG
 */
require_once 'Model/Model.class.php';

class InfoModel extends Model {

    //put your code here
    public function getInfoList() {
        $id=$_GET["id"];
        $sql = "select * from hero where id={$id}";
        $data = $this->sql->selectone($sql);
        return $data;
    }

}
