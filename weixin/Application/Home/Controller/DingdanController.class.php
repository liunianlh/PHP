<?php
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class DingdanController extends Controller{
    
    public function DingdanInfo(){
        $m_id = $this->get("m_id");
        $u_id = isset($_COOKIE["admin_id"])?$_COOKIE["admin_id"]:"1";
        $time = $this->get("time");
        $date = $this->get("date");
        $seat = $this->get("seat");
        $result = M("Dingdan")->getDingdan($m_id,$u_id,$time,$date,$seat);
        $this->smarty->assign("list",$result);
        $this->smarty->display("Application/Home/View/Dingdan/Dingdan.html");
    }
    
    
}
