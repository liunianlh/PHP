<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InfoController
 *
 * @author WANG
 */
require 'Controller/Controller.class.php';
class InfoController extends Controller{
    //put your code here
    public function index() {
        $model=M("InfoModel");//调用公共函数
        $data = $model->getInfoList();
        $this->smarty->assign("data", $data);
        $this->smarty->display("info.tpl");
    }
}
