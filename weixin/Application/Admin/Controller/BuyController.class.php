<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class BuyController extends Controller{
    public function BuyList(){
         //获取购买票
        $list = M("Buy")->getBuyList();
        if($list){
            $this->smarty->assign("list",$list);
            $this->smarty->display("Application/Admin/View/Buy/buy.tpl");
        }else{
            $this->show("1002", "查询失败", "");
            exit();
        }
    }
    
    
}