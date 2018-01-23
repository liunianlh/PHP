<?php
require_once './Framework/Model.class.php';
class PhotoModel extends Model{
    public function getPhoto($file){
        //获取名字后缀位置
        $num = strripos($file["name"],".");
        //开始截取后缀
        $type = substr($file["name"], $num); 
        //重新命名
        $nuwtime = date("YmdHis").rand("100","999").$type;
        //2.确定上传的路径
        $upload = "Uploade/";
        $filePath = $upload.$nuwtime;
//        var_dump($file["tmp_name"]);
//    3.移动文件，由临时目录移动到指定目录
        if(move_uploaded_file($file["tmp_name"],$filePath)){
            return $filePath;
        } else {
            return false;
        }
    }
    
    
}

