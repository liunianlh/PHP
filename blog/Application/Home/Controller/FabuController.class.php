<?php

require './Framework/Controller.class.php';

class FabuController extends Controller {

    public function index() {
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
         $this->smarty->display("fabu.html");
    }

    public function insert() {
        $id = $this->cookie("user_id");
        $title = isset($_POST["title"]) ? $_POST["title"] : "";
        $content = isset($_POST["content"]) ? $_POST["content"] : "";
        $time = date(time());
        if ($title == "" || $content == "") {
            $this->show("100", "请将内容填写完整", "");
        }
        $result = M("Fabu")->addList($id, $title, $content, $time);
        if ($result) {
            $this->show("200", "发布成功", "");
        } else {
            $this->show("100", "发布失败", "");
        }
    }

}
