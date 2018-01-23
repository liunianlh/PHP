<?php
require_once './Framework/Model.class.php';
class CinemaModel extends Model{
    //获取电影院信息
     public function getList(){
         $sql = "select * from movie_theatre";
         $list = $this->link->queryAll($sql);

         return $list;
     }
     public function addCinema($name,$abstract,$city){
         $sql = "insert into movie_theatre (name,abstract,city) values('{$name}','{$abstract}','{$city}')";
         $return = $this->link->add($sql);
         return $return;
     }
     //获取修改时候的默认值
     public function listUpCinema($id){
         $sql = "select * from movie_theatre where id = {$id}";
         $return = $this->link->query($sql);
         return $return;
     }
     //保存修改
     public function saveUpCinemas($id,$name,$abstract,$city){
         $sql="update movie_theatre set name='{$name}',abstract='{$abstract}',city='{$city}' where id={$id}";  
         $return = $this->link->update($sql);
         return $return;
     }
     //删除
     public function deleteCinema($id){
         $sql = "delete from movie_theatre where id={$id}";
         $return =$this->link->delete($sql);
         return $return;
     }
}
