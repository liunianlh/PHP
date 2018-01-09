<?php

require './Framework/Controller.class.php';

class IndexController extends Controller {

    public function index() {
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
        $List = M("Index")->getList();
        $this->smarty->assign("List", $List);
        $this->smarty->display("index.html");
    }

    public function login() {
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
        $this->smarty->display("login.html");
    }

    public function quit() {
        setcookie("user_id", "", time() - 1);
        setcookie("user_name", "", time() - 1);
        echo "<script>window.location.href='http://localhost/web/index.php?m=Home&c=Index&a=index';</script>";
    }

    public function checkLogin() {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        if ($name == "" || $pwd == "") {
            $this->show("100", "请将内容填写完整", "");
        }
        $pwd = md5($pwd);
        $result = M("Index")->login($name, $pwd);
        if ($result == null) {
            $this->show("100", "用户名或密码错误", "");
        } else {
            setcookie("user_id", $result["id"], time() + 60 * 60 * 24);
            setcookie("user_name", $result["name"], time() + 60 * 60 * 24);
            $this->show("200", "登录成功", "");
        }
    }

    public function register() {
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
        $this->smarty->display("register.html");
    }

    public function insert() {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $nickname = isset($_POST["nickname"]) ? $_POST["nickname"] : "";
        $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        $time = time();
        if ($name == "" || $pwd == "" || $nickname == "") {
            $this->show("100", "请将内容填写完整", "");
        }
        $pwd = md5($pwd);
        $result = M("Index")->register($name, $pwd, $nickname, $time);
        if ($result) {
            $this->show("200", "注册成功", "");
        } else {
            $this->show("100", "注册成功", "");
        }
    }

    public function getUserList() {
        $id = $this->cookie("user_id");
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;
        $endpage = $page + 2;
        //获取用户列表
        $List = M("Index")->getListById($id, 0, 16, $page);
        $countpage = $List["countpage"];
        if ($List["countpage"] >= 5) {
            if ($startpage <= 0) {
                $startpage = 1;
                $endpage = 5;
            }
            if ($endpage > $countpage) {
                $endpage = $countpage;
                $startpage = $endpage - 4;
            }
        } else {
            $startpage = 1;
            $endpage = $countpage;
        }
        $this->smarty->assign("List", $List);
        $this->smarty->assign("page", $page);
        $this->smarty->assign("startpage", $startpage);
        $this->smarty->assign("endpage", $endpage);
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
        $this->smarty->display("listId.html");
    }

    public function delete() {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        if ($id <= 0) {
            $this->show("100", "传递参数不正确", "");
        }
        $result = M("Index")->delList($id);
        if ($result) {
            $this->show("200", "删除成功", "");
        } else {
            $this->show("200", "删除失败", "");
        }
    }

}
