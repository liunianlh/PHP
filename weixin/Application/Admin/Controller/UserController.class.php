<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class UserController extends Controller{
    public function UserList(){
    //获取用户列表
    $list = M("User")->getList();
    $this->smarty->assign("list",$list);
    $this->smarty->display("Application/Admin/View/User/user.tpl"); 
    }

}
