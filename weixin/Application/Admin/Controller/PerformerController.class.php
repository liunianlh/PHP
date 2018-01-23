<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class PerformerController extends Controller{
    public function PerformerList(){
         //获取购买票
        $list = M("Performer")->getPerformer();
        if($list){
            $this->smarty->assign("list",$list);
            $this->smarty->display("Application/Admin/View/Performer/performer.tpl");
        }else{
            $this->show("1002", "查询失败", "");
            exit();
        }
    }
    public function  addPerformer(){
        $name = $this->post("name");
        $english = $this->post("english");
        $date = $this->post("date");
        $city = $this->post("city");
        $abstract = $this->post("abstract");
        $photo = $this->post("photo");
        $list = M("Performer")->PerformerAdd($name,$english,$date,$city,$abstract,$photo);
        if($list){
           $this->show("200", "添加成功", "");
            exit();
        }else{
            $this->show("1002", "添加失败", "");
            exit();
        }
    }
    public function  XiuGaiPerformer(){
        $id = $this->post("id");
        $name = $this->post("name");
        $english = $this->post("english");
        $date = $this->post("date");
        $city = $this->post("city");
        $abstract = $this->post("abstract");
        $photo = $this->post("photo");
        $list = M("Performer")->PerformerXiuGai($id,$name,$english,$date,$city,$abstract,$photo);
        if($list){
           $this->show("200", "修改成功", "");
            exit();
        }else{
            $this->show("1002", "修改失败", "");
            exit();
        }
    }
    public function DeletePerformer(){
        $id = $this->get("id");
        $list = M("Performer")->PerformerDelete($id);
        if($list){
           $this->show("200", "删除成功", "");
            exit();
        }else{
            $this->show("1002", "删除失败", "");
            exit();
        }
    }
    
}