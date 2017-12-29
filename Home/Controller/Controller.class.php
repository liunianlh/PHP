<?php

class Controller {

    protected $sql;
    protected $smarty;
//    用smarty所需的东西
    public function __construct() {
        include "tools/smarty/Smarty.class.php";
        $this->smarty = new Smarty();
        $this->smarty->template_dir = "View";
        $this->smarty->compile_dir = "Templates_s";
    }

}

?>