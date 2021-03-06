<?php

require_once 'Controller/Controller.class.php';

class DaojuController extends Controller {
//    主页控制器
    public function index() {
        //当前的星期
        $now=date("N");
        $start=date("m月d日",(time()-3600*24*($now-1)));
        $end=date("m月d日",(time()+3600*24*(7-$now)));
        $model=M("DaojuModel");
        $data = $model->getDaojuList();
        $zhoumian = $model->getDaojuList("free_week=1",0,7);
        $this->smarty->assign("start",$start);
        $this->smarty->assign("end",$end);
        $this->smarty->assign("data", $data);
        $this->smarty->assign("zhoumian",$zhoumian);
        $this->smarty->display("daoju.tpl");
    }

}
?>

