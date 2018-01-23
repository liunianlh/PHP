<?php
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class ZuoweiController extends Controller{
    public function Addzuowei(){
    $m_id=$this->post("m_id");
    $t_id=$this->post("t_id");
    $h_id=$this->post("h_id");
    $seats=$this->post("seats");
    $time= $this->post("time");
    $date = $this->post("date");
    $u_id= isset($_COOKIE["admin_id"])?$_COOKIE["admin_id"]:"1";
    $result = M("Zuowei")->addZuowei($m_id,$t_id,$h_id,$seats,$time,$date,$u_id);
    if($result){
        $this->show("200", "添加成功", "");
        exit();
    }else{
         $this->show("1002", "添加失败", "");
         exit();
    }
    }
    public function qupiao(){
        $this->smarty->display("Qupiao/qupiao.html");
    }
}