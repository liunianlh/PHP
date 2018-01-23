<?php
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class RenController extends Controller{
    
    public function RenInfo(){
        $id= $this->get("id");
        $list = M("Ren")->getRen($id);
        $this->smarty->assign("list",$list);
        $this->smarty->display("Application/Home/View/Ren/ren.html");
    }
    
    
}

