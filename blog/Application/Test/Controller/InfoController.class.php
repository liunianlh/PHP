<?php
require './Controller/Controller.class.php';
class InfoController extends Controller{
    public function index(){
        $id= $this->get("id",0);
        //根据英雄id，查询英雄的详情
        $heroInfo=M("Hero")->getInfoById($id);
        if($heroInfo==null){
            echo "<script>window.location.href='index.php?c=Index&a=error';</script>";
            exit();
        }
        $this->smarty->assign("heroInfo",$heroInfo);
        //英雄对应的职业
        $vid=$heroInfo["vocation_id"];
        $vinfo=M("Vocation")->getInfoById($vid);
        $this->smarty->assign("vinfo",$vinfo);
        //英雄对应的皮肤
        $skinList=M("Skin")->getListByHeroId($id,$order="num asc");
        $this->smarty->assign("skinList",$skinList);
        
        
        
        $this->smarty->display("info.html");
    }
}

