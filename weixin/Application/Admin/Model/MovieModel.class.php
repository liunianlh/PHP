<?php
/**
 * 电影model
 */
//引入model
require_once './Framework/Model.class.php';
class MovieModel extends Model{
    //获取电影
    public function getMovieList(){
        $sql ="select * from movie";
        $result = $this->link->queryAll($sql);
        return $result;
    }
    //查询单个电影
    public function getOneMovie($id){
        $sql = "select * from movie where id={$id}";
        $result = $this->link->query($sql);
        return $result;
    }
    //添加电影
    public function addMovie($name,$english,$director,$performer_id,$show,$duration,$photo,$state,$abstract,$language,$logo){
        $sql = "insert into movie (name,english,director,performer_id,shows,duration,photo,state,abstract,language)values('{$name}','{$english}','{$director}','{$performer_id}','{$show}','{$duration}','{$logo}','{$state}','{$abstract}','{$language}')";
        $result = $this->link->add($sql);
        return $result;
    }
    
    //删除电影
    public function deleteMovie($id){
        $sql ="delete from movie where id={$id}";
        $result = $this->link->delete($sql);
        return $result;
    }
    //保存修改后的电影信息
    public function saveUpMovie($id,$name,$english,$director,$performer_id,$show,$duration,$photo,$state,$abstract,$language){
        $sql = "update movie set name='{$name}',english='{$english}',director='{$director}',performer_id='{$performer_id}',shows='{$show}',duration='{$duration}',photo='{$photo}',state='{$state}',abstract='{$abstract}',language='{$language}' where id={$id}";
        $result = $this->link->update($sql);
        return $result;
        }
}
