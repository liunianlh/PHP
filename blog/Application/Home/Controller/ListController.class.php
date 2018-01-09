<?php

require './Framework/Controller.class.php';

class ListController extends Controller {

    public function newList() {
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;
        $endpage = $page + 2;
        //获取用户列表
        $List = M("List")->getList(1, 0, 8, $page);
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
         $this->smarty->display("list.html");
    }

    public function hotList() {
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;
        $endpage = $page + 2;
        //获取用户列表
        $List = M("List")->getList(2, 0, 6, $page);
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
         $this->smarty->display("list_1.html");
    }

    public function info() {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        if ($id <= 0) {
            $this->show("100", "传递参数错误", "");
        }
        $info = M("List")->getListById($id);
        $userInfo = M("List")->getUserList();
        $newArr = array();
        foreach ($userInfo as $vk => $vv) {
            $newArr[$vv["id"]] = $vv["nickname"];
        }
        $this->smarty->assign("userInfo", $newArr);
        $this->smarty->assign("info", $info);
        $loginCookie = $this->cookie("user_name");
        if ($loginCookie == true) {
            $this->smarty->assign("user", $loginCookie);
        } else {
            $this->smarty->assign("user", "");
        }
         $this->smarty->display("info.html");
    }

}
