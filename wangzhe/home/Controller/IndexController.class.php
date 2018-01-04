<?php
require './Controller/Controller.class.php';
class IndexController extends Controller{
    
    public function index(){
        
     
     
        $data=M("Admin")->getAdminList();
//        var_dump($data);
        
        
        $this->smarty->assign("list",$data);
        $this->smarty->display("View/index.tpl");
    }
    
}