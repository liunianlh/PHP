<?php
//管理员管理
require_once './Framework/Controller.class.php';
require_once './Common/function.php';
class IndexController extends Controller{
    
    //调用总模板
    public function Index(){
        $this->smarty->display("index.tpl");
    }
    //管理员模板
    public function adminList(){
         $adminList = M("Admin")->getadminList();
         $this->smarty->assign("adminList",$adminList);
         $this->smarty->display("Admin/adminList.tpl");
    }
    public function addAdmin(){
       //添加管理员
         $name = $this->post("name","");
         $pwd = $this->post("pwd","");
         if($name=="" ||$pwd ==""){
              $this->show(100, "用户名或密码不能为空", "");
        }
        $result = M("Admin")->addAdmin($name,$pwd);
        //判断添加是否成功
          if($result){
              $this->show(200, "添加成功", $result);
          }
          else{
              $this->show(102, "添加失败", "");
          }  
    }
     public function state(){
         //修改管理员状态
         $id = $this->post("id","");
         $state = $this->post("state","");
         if($id!="" && $state !=""){
             $result = M("Admin")->state($id,$state);
             if($result){
                 $this->show(200, "修改成功", $result);
             }else{
                 $this->show(100, "修改失败", "");
             }
         }   
     }
     //查询所有的等级
     public function level(){
         $result = M("Admin")->level();
            if($result){
                 $this->show(200, "查询成功", $result);
             }else{
                 $this->show(100, "查询失败", "");
             }
     }
     //保存修改的管理员等级
     public function saveLevel(){
         $id = $this->post("id","");
         $rank = $this->post("rank","");
         $result = M("Admin")->saveLevel($id,$rank);
         if($result){
            $this->show(200, "修改成功", $result);
         }else{
            $this->show(100, "修改失败", "");
         }
     }
     
     //管理员重置密码
     public function reset(){
         $id = $this->get("resetid",0);
         $result = M("Admin")->reset($id);
         if($result){
            $this->show(200, "修改成功", $result);
         }else{
            $this->show(100, "修改失败", "");
         }
     }
     
     //删除管理员
     public function delete(){
         $id = $this->get("adminid",0);
         $result = M("Admin")->delete($id);
         if($result){
            $this->show(200, "删除成功", $result);
         }else{
            $this->show(100, "删除失败", "");
         }
     }
     
     
     //电影列表
    public function movieList(){
         $movieList = M("Movie")->getMovieList();
         $this->smarty->assign("movieList",$movieList);
         $this->smarty->display("Movie/Movie.tpl");
    }
    //根据id 查询出电影 修改嵌套数据
    public function upMovies(){
        $id = $this->get("id",0);
        $result = M("Movie")->getOneMovie($id);
        if($result){
            $this->show(200, "", $result);
         }else{
            $this->show(100, "", "");
         }  
        
    }
    
    //添加电影
    public function addMovie(){
         $name = $this->get("name","");
         $english = $this->get("english","");
         $director = $this->get("direcotr","");
         $performer_id = $this->get("performer_id","");
         $show = $this->get("show","");
         $duration = $this->get("duration","");
         $photo = $this->get("photo","");
         $state = $this->get("state","");
         $abstract = $this->get("abstract","");
         $language = $this->get("language","");
         $logo = $this->get("url","");
         $result = M("Movie")->addMovie($name,$english,$director,$performer_id,$show,$duration,$photo,$state,$abstract,$language,$logo);
         if($result){
            $this->show(200, "添加成功", $result);
         }else{
            $this->show(100, "添加失败", "");
         }     
    }
    //删除电影
    public function deleteMovie(){
        $id = $this->get("movieId",0);
        $result =M("Movie")->deleteMovie($id);
        if($result){
            $this->show(200, "删除成功", $result);
         }else{
            $this->show(100, "删除失败", "");
         }  
    }
    //提交修改后的电影信息
    public function saveUpMovie(){
         $id = $this->get("id",0);
         $name = $this->get("name","");
         $english = $this->get("english","");
         $director = $this->get("director","");
         $performer_id = $this->get("performer_id","");
         $show = $this->get("show","");
         $duration = $this->get("duration","");
         $photo = $this->get("photo","");
         $state = $this->get("state","");
         $abstract = $this->get("abstract","");
         $language = $this->get("language","");
        if($id !=0){
            $result = M("Movie")->saveUpMovie($id,$name,$english,$director,$performer_id,$show,$duration,$photo,$state,$abstract,$language);
            if($result){
               $this->show(200, "修改成功", $result);
            }else{
               $this->show(100, "修改失败", "");
            } 
        }
         
    }
    
    
    //上传电影logo
    public function uplogo(){
        $file = $_FILES["myfile"];
        $result = M("Photo")->getPhoto($file);
        if($result){
            $this->show(200, "logo上传成功", $result);
         }else{
            $this->show(100, "logo上传失败", "");
         } 
    }
}
