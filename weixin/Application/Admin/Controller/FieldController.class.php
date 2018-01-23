<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class FieldController extends Controller{
    public function MovieField(){
        //获取影院
        $movie_theatre = M("Field")->getMovieTheatre();
        $this->smarty->assign("movieTheatre",$movie_theatre);
        //获取电影场次(电影名称  对应的影院名称 时间段 房间大厅 座位数 已选人数)
        $list = M("Field")->getList();
        $this->smarty->assign("list",$list);
        $date = date("Y-m-",time());
        $date1 = date("d",time());
        $this->smarty->assign("date",$date);
        $this->smarty->assign("date1",$date1);
        $this->smarty->display("Application/Admin/View/Field/field.tpl");
    }
    public function MovieList(){
        //获取电影列表
        $list = M("Field")->getMoveList();
        if($list){
            $this->show("200", "查询成功", $list);
            exit();
        }else{
            $this->show("1002", "查询失败", "");
            exit();
        }
    }
    public function addField(){
        //添加电影场次的影院
        $id = $this->get("id");
        $list = M("Field")->FieldAdd($id);
        if($list){
            $this->show("200", "查询成功", $list);
            exit();
        }else{
            $this->show("1002", "查询失败", "");
            exit();
        }
    }

    public function MovieRevise(){
        //修改电影信息
        $id = $this->post("id");
        $m_id = $this->post("m_id");
        $result = M("Field")->reviseMovie($id,$m_id);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    public function HallList(){
        //查询大厅列表
         $list = M("Field")->getHallList();
        if($list){
            $this->show("200", "查询成功", $list);
            exit();
        }else{
            $this->show("1002", "查询失败", "");
            exit();
        }
    }
    public function HallRevise(){
        //修改大厅信息
        $id = $this->post("id");
        $hall = $this->post("hall");
        $result = M("Field")->ReviseHall($id,$hall);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    public function SeatRevise(){
        //大厅座位数的修改
        $id = $this->post("id");
        $seat = $this->post("seat");
        $result = M("Field")->ReviseSeat($id,$seat);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    public function MoneyRevise(){
        //票价的修改
         $id = $this->post("id");
         $money = $this->post("money");
         $result = M("Field")->ReviseMoney($id,$money);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    public function DateRevise(){
         $id = $this->post("id");
        $date = $this->post("date");
         $result = M("Field")->ReviseDate($id,$date);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    
     public function TimeRevise(){
         $id = $this->post("id");
        $time = $this->post("time");
         $result = M("Field")->ReviseTime($id,$time);
         if($result){
            $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
}