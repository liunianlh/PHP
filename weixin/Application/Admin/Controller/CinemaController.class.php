<?php
//点影院管理
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class CinemaController extends Controller{
    //影院列表
       public function cinemaList(){
            $list = M("Cinema")->getList();
            $this->smarty->assign("list",$list);
            $this->smarty->display("Cinema/Cinema.tpl");
       }
       //添加影院
       public function addCinema(){
           $name = $this->get("name","");
           $abstract = $this->get("abstract","");
           $city = $this->get("city","");
           $return = M("Cinema")->addCinema($name,$abstract,$city);
           if($return){
               $this->show(200,"添加成功",$return);
           }else{
                $this->show(100,"添加失败","");
           }
       }
       //获取修改默认值
       public function listUpCinema(){
           $id = $this->get("id");
           $list = M("Cinema")->listUpCinema($id);
           if($list){
               $this->show(200,"添加成功",$list);
           }else{
                $this->show(100,"添加失败","");
           }
       }
       //保存修改
       public function saveUpCinema(){
           $id = $this->post("id","");
           $name = $this->post("name","");
           $abstract = $this->post("abstract","");
           $city = $this->post("city","");
           $return  = M("Cinema")->saveUpCinemas($id,$name,$abstract,$city);
           if($return){
               $this->show(200,"修改成功",$return);
           }else{
                $this->show(100,"修改失败","");
           }
       }
       //删除
       public function deleteCinema(){
           $id = $this->get("id",0);
           $return  = M("Cinema")->deleteCinema($id);
           if($return){
               $this->show(200,"删除成功",$return);
           }else{
                $this->show(100,"删除失败","");
           }
       }
}