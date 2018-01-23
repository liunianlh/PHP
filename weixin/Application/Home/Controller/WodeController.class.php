<?php
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class WodeController extends Controller{
    public function WodeInfo(){
        $id= isset($_COOKIE["admin_id"])?$_COOKIE["admin_id"]:"1";
        $list = M("Wode")->getWode($id);
        $this->smarty->assign("list",$list);
        $this->smarty->display("Application/Home/View/Wode/Wode.html");
    }
    
    
}
