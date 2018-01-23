<?php
require_once 'Framework/Controller.class.php';
require_once './Common/function.php';
class PhotoController extends Controller{
    public function addPhoto(){
         //添加图片
         $file=$_FILES["myfile"];
        $photo = M("Photo")->getPhoto($file);
        if($photo){
             $this->show("200", "添加成功", $photo);
            exit();
        }else{
            $this->show("1002", "添加失败", "");
            exit();
        }
    }
    
    
    
    
}