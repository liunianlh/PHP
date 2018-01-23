<?php
header('content-Type: text/html; charset=utf-8');
require_once './Framework/Model.class.php';

class IndexModel extends Model{
    public function getMovieList(){
        $sql ="select * from movie where state=1";
        $return =$this->link->queryAll($sql);
        foreach ($return as $k => $v) {
            $sql = "select * from performer_info where id in ({$v["performer_id"]})";
            $per = $this->link->queryAll($sql);
            $str ="";
            foreach ($per as $key => $value) {
                $str = $value["name"]."/".$str;
            }
            $str =rtrim($str,"/");
            
            $return[$k]["performer_id"]=$str;
            
            $sql = "select score from score where m_id = {$v["id"]}";
            $score = $this->link->query($sql);
            $return[$k]["score"]=$score;
        }
        
        return $return;
    }
    public function getSoonMovieList(){
        $sql = "select * from movie where state=0";
        $return = $this->link->queryAll($sql);
        foreach ($return as $k => $v) {
            $sql = "select * from performer_info where id in ({$v["performer_id"]})";
            $per = $this->link->queryAll($sql);
            $str ="";
            foreach ($per as $key => $value) {
                $str = $value["name"]."/".$str;
            }
            $str =rtrim($str, "/");
            
            $return[$k]["performer_id"]=$str;
            
            $sql = "select score from score where m_id = {$v["id"]}";
            $score = $this->link->query($sql);
            $return[$k]["score"]=$score;
        }
       
        return $return;
    }
    
    
    public function getmenList($id){
        //获取导演
        $sql = "select * from movie where id={$id}";
        $return = $this->link->query($sql);
        //获取导演英文名称
        $sql = "select english,photo from performer_info where name ='{$return["director"]}';";
        $dire = $this->link->query($sql);
        $return["english"]=$dire;
        //获取演员列表
        $sql = "select * from performer_info where id in ({$return["performer_id"]})";
        $yuanList = $this->link->queryAll($sql);
        //查询饰演
        foreach($yuanList as $y=>$t){
            $sql = "select people from performer where performer_id = {$t["id"]}";
            $shiyan = $this->link->query($sql);
            $yuanList[$y]["shiyan"]=$shiyan;
        }
        $return["yanyuan"]=$yuanList;
        return $return;
    }
    
    
    //影院列表
    public function getCinemaList(){
        $sql = "select * from movie_theatre";
        $Movie_list = $this->link->queryAll($sql);
        foreach($Movie_list as $t=>$n)
        {
            $sql = "select money from money where t_id ={$n["id"]}";
            $money = $this->link->query($sql);
            $Movie_list[$t]["money"]=$money;
        }
        
        return $Movie_list;
    }
	
	//获取经纬度
	public function getlatitude(){
		$sql = "select latitude,id from movie_theatre";
		$latitude = $this->link->queryAll($sql);
		return $latitude;
	}
	
	
	
	
        //影院列表
    public function getCinemaLists($m_id){
        $sql1 = "select * from money where m_id='{$m_id}'";
        $result=$this->link->queryAll($sql1);
        $str = "";
        foreach ($result as $k=>$v){
            $str = $v["t_id"].",".$str;
        }
        $str=rtrim($str,",");
        $sql = "select * from movie_theatre where id in ({$str})";
        $Movie_list = $this->link->queryAll($sql);
        foreach($Movie_list as $t=>$n)
        {
            $sql = "select money from money where t_id ={$n["id"]}";
            $money = $this->link->query($sql);
            $Movie_list[$t]["money"]=$money;
        }
        
        return $Movie_list;
    }
    
	//距离插入
	public function litas($s,$id){
		$sql = "update movie_theatre set distance={$s} where id={$id}";
		$lita = $this->link->add($sql);
		return $lita;
	}
	
	
    //影院详情
    public function getYyxq($id){
        $sql = "select * from movie_theatre where id={$id}";
        $Yyxq = $this->link->query($sql);
        return $Yyxq;
    }
    //中部电影信息
    public function getMovie($id){
        $sql ="select m_id from money where t_id={$id}";
        $M_id = $this->link->queryAll($sql);

		$str = "";
		foreach($M_id as $k=>$v){
			$str = $v["m_id"].",".$str;
		}
		$str = substr($str,0,strlen($str)-1);
        $sql = "select * from movie where id in ({$str})";
        $MovieList = $this->link->queryAll($sql);
        foreach($MovieList as $r=>$q){
            //查询电影分数
            $sql = "select score from score where m_id ={$q["id"]}";
            $score = $this->link->query($sql);
            $MovieList[$r]["score"]=$score;
            //查询类型
            $sql ="select t_id from move_type where m_id={$q{"id"}}";
            $t_id = $this->link->query($sql);
            $sql = "select name from type where id = {$t_id["t_id"]}";
            $type = $this->link->query($sql);
            $MovieList[$r]["type"]=$type;
            //查询演员名称
            $sql = "select name from performer_info where id in ({$q["performer_id"]})";
            $yanyuan = $this->link->queryAll($sql);
            $name="";
            foreach($yanyuan as $u=>$w){
                $name = $w["name"]." " .$name;
            }
            $MovieList[$r]["yanyuan"]=$name;
            $MovieList[$r]["t_id"]="{$id}";
        }

        return $MovieList;
    }
    
    
    //影院详情下部的安排
    public function anpai($id,$t_id){
       $sql ="select * from money where m_id={$id} and t_id='{$t_id}'";
        $return = $this->link->queryAll($sql);
        foreach($return as $t=>$g){
            $sql ="select language from movie where id ={$g["m_id"]}";
            $laguage = $this->link->query($sql);
            $return[$t]["language"]=$laguage;
            $sql ="select name from hall where id ={$g["h_id"]}";
            $h_id = $this->link->query($sql);
            $return[$t]["h_id"]=$h_id;
            $time =explode("-",$g["time"]);
            $return[$t]["time"]=$time;
        }
        return $return;
    }
    //座位表
    public function name($id){
            $sql = "select name from movie where id={$id}";
            $return = $this->link->query($sql);
            return $return;
            
    }
    
    
    //查询已经选择的座位
    public function getPeople($id,$t_id,$h_id,$start,$seat){
        $sql1 ="select * from hall where name='{$h_id}'";
        $result1=$this->link->query($sql1);
        $sql = "select * from money where m_id='{$id}' and  t_id='{$t_id}' and h_id='{$result1["id"]}' and time='{$start}' and seat='{$seat[5]}'";
        $result = $this->link->query($sql);
        $list = explode(",", $result["people"]);
        return $list;
    }
}