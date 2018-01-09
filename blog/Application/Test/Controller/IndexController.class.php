<?php

require './Controller/Controller.class.php';
class IndexController extends Controller{
    
    public function index(){
        //当前的星期
        $now = date("N");
        $start = date("m月d日",(time()-3600*24*($now-1)));
        $end = date("m月d日",(time()+3600*24*(7-$now)));
        $this->smarty->assign("start",$start);
        $this->smarty->assign("end",$end);
        
        
       //获取周免英雄
        $weekList = M("Hero")->getList("free_week=1","id asc",0,7);
        $this->smarty->assign("weekList",$weekList);
        
        
        //获取英雄的职业
        $vocationList = M("Vocation")->getList();
        $this->smarty->assign("vocationList",$vocationList);
        
        
        //获取全部英雄
        $heroList = M("Hero")->getList();
        $this->smarty->assign("heroList",$heroList);
        //获取所有道具
        $propList = M("Prop")->getList();
        $this->smarty->assign("propList",$propList);
        //获取召唤师技能
        $summonerList = M("Summoner")->getList();
        $this->smarty->assign("summonerList",$summonerList);
        $this->smarty->display("index.html");
    }
  
}