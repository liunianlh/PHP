<?php
header('content-Type: text/html; charset=utf-8');
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
require_once "Application\Weixin\Controller\WechatController.class.php";
class IndexController extends Controller {
       //调用Index
    public function Index(){
            $MovieList  = M("Index")->getMovieList();
            $this->smarty->assign("MovieList",$MovieList);
            $soonMovie  = M("Index")->getSoonMovieList();
            $this->smarty->assign("soonMovie",$soonMovie);
            $this->smarty->display("Index/index.html");
    }
    
    //调用影人
    public function  yingren(){
        $id=$this->get("id");
        $MenList  = M("Index")->getmenList($id);
        $this->smarty->assign("MenList",$MenList);
        $this->smarty->display("Yingren/yingren.html");
    }
    
    //影院
    public function yingyuan(){   
        $m_id= $this->get("m_id","null");
        if($m_id!=="null"){
            $CinemaList  = M("Index")->getCinemaLists($m_id);
        }else{
        $CinemaList  = M("Index")->getCinemaList();
        }
		//获取经纬度
		$latitude = M("Index")->getlatitude();
		
		foreach($latitude as $y=>$t){
			$arr = explode(",",$t["latitude"]);
			$latitude[$y]["jwd"]=$arr;
		}
		$wechat = new WechatController();
		//查询经纬度
	
		
		$data = $wechat->jsSDk();
		$this->smarty->assign("wx", $data);
		$this->smarty->assign("jwd", $latitude);
        $this->smarty->assign("CinemaList",$CinemaList);
        $this->smarty->display("Yingyuan/yingyuan.html");
    }
	//
	public function dis(){
		$s= $this->post("s",0);
		$id= $this->post("id",0);
		//插入距离
		if($id==""){
			
		}else{
			$list  = M("Index")->litas($s,$id);
		}
	}
	
	
	
	public function  jwd(){
		//获取经纬度
		$lita = $wechat->latitude();
		$latitude = M("Index")->getlatitude();
	}
    
    //影院详情
    public function Yyxq(){
        $id = $this->get("id",0);
        //头部影院信息
        $Yyxq = M("Index")->getYyxq($id);
        $this->smarty->assign("Yyxq",$Yyxq);
        //中间电影信息
        $movieList = M("Index")->getMovie($id);
        $this->smarty->assign("movieList",$movieList);
        $this->smarty->display("Yyxq/Yyxq.html");
    }
    
    //影院详情下部安排界面
    public function anpai(){
        $id = $this->post("id",0);
        $t_id=$this->post("t_id",0);
        $anpaiList = M("Index")->anpai($id,$t_id);
        if($anpaiList){
            $this->show(200,"",$anpaiList);
        }else{
            $this->show(100,"","");
        }
    }
    //调用座位页面
    public function zuowei(){
        $start = $this->get("start",0);
        $language=$this->get("language","中文");
        $h_id = $this->get("h_id",0);
        $id=$this->get("id",0);
        $seat=$this->get("seat",0);
        $start1=$this->get("start1",0);
        $start=$start."-".$start1;
        $money = $this->get("money",0);
        $t_id = $this->get("t_id");
        $date = $this->get("date");
        $name = M("Index")->name($id);
        $name = implode("", $name);
        $seat =array(0=>"{$start}",1=>"{$language}",2=>"{$h_id}",3=>"{$id}",4=>"{$name}",5=>"{$seat}",6=>"{$money}","t_id"=>"{$t_id}","date"=>"{$date}");
        $people = M("Index")->getPeople($id,$t_id,$h_id,$start,$seat);
        $this->smarty->assign("people",$people);
        $this->smarty->assign("seat",$seat);
        $this->smarty->display("Zuowei/zuowei.html");
    }
    
}
