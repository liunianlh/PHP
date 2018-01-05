<?php

class Index extends common{
    
    public function shouye(){
        $this->template->template_display("Index/index.tpl");
    }
    
    
    
    
    public function upload(){
//        获取相关的值
        if(!isset($_FILES["myfile"])){
            $this->show(100, "数据不完整", "");
        }
        $file=$_FILES["myfile"];
        if($file["error"]!=0){
            $this->show(100, "图片上传失败","");
        }
        
//        上传操作
        $name=$file["name"];
        $extpos=strrpos($name,'.');
        $ext= substr($name, $extpos);
        $newName= time().rand(1000, 9999).$ext;
        
        $upload="upload/".$newName;
    
        if(move_uploaded_file($file["tmp_name"], $upload)){
            $this->show(200,"上传成功",$upload);
        }else {
            $this->show(100,"上传失败","");
        }
        }
        
    }


