<?php
require './Framework/Controller.class.php';
class UserController extends Controller{
    
    public function index(){
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;  
        $endpage = $page + 2;
        //获取用户列表
        $userList = M("User")->getList(0,2,$page);
        $countpage=$userList["countpage"];
        if ($userList["countpage"]>=5){
            if ($startpage<=0){
                $startpage=1;
                $endpage=5;                                                                   
            }
            if($endpage>$countpage){
                $endpage=$countpage;
                $startpage=$endpage-4;
            }
        }else{
            $startpage=1;
            $endpage=$countpage;
        }
        $this->smarty->assign("userList",$userList);
        $this->smarty->assign("page", $page);
        $this->smarty->assign("startpage", $startpage);
        $this->smarty->assign("endpage", $endpage);
        $this->smarty->display("user.html");
    }
  
}