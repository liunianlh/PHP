<?php
require './Controller/Controller.class.php';
class IndexController extends Controller{
    
    public function index(){
        
        require './Model/AdminModel.class.php';
    
        $adminModel=new AdminModel();
     
        $data=$adminModel->getAdminList();
//        var_dump($data);
        
        
        $this->smarty->assign("list",$data);
        $this->smarty->display("View/index.tpl");
    }
    
}