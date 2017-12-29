<?php
class template{
    public $a;
    public function __construct() {
        include "../tools/smarty/Smarty.class.php";
        $this->a=new Smarty();
        $this->a->template_dir="../Templates";
        $this->a->compile_dir="../Templates_s";
    }
    public function zxassign($name,$value){
        $this->a->assign($name,$value);
    }
    public function zxdisplay($name){
        $this->a->display($name);
    }
}
