<?php
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class OrderController extends Controller{
    public function OrderList(){
        $u_id = isset($_COOKIE["admin_id"])?$_COOKIE["admin_id"]:"1";
        $List = M("Order")->getList($u_id);
        $this->smarty->assign("list",$List);
        $this->smarty->display("Application/Home/View/Orderlist/orderlist.html");
    }
    
    
}
