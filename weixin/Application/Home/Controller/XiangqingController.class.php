<?php

require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class XiangqingController extends Controller{
    public function XiangqingInfo(){
        $id = $_GET["m_id"];
        $list = M("Xiangqing")->getXiangqing($id);
        $this->smarty->assign("list",$list);
        $this->smarty->display("Application/Home/View/Xiangqing/Xiangqing.html");
    }
    
    
}
