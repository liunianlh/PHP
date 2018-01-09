<?php

require './Framework/Controller.class.php';

class BlogController extends Controller {

    public function index() {
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;
        $endpage = $page + 2;
        //获取博客列表
        $blogList = M("Blog")->getList(0, 20, $page);
        $userInfo = M("Blog")->getUserList();
        $newArr = array();
        foreach ($userInfo as $vk => $vv) {
            $newArr[$vv["id"]] = $vv["nickname"];
        }
        $this->smarty->assign("userInfo", $newArr);
        if ($blogList["countpage"] >= 5) {
            if ($startpage <= 0) {
                $startpage = 1;
                $endpage = 5;
            }
            if ($endpage > $blogList["countpage"]) {
                $endpage = $blogList["countpage"];
                $startpage = $endpage - 4;
            }
        } else {
            $startpage = 1;
            $endpage = $blogList["countpage"];
        }
        $this->smarty->assign("blogList", $blogList);
        $this->smarty->assign("page", $page);
        $this->smarty->assign("startpage", $startpage);
        $this->smarty->assign("endpage", $endpage);
        $this->smarty->display("blog.html");
    }

    /**
     * 修改状态
     */
    public function editStatus() {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        $status = isset($_GET["status"]) ? $_GET["status"] : 0;
        if (is_numeric($id) == false || is_numeric($status) == false) {
            $this->show("100", "传参格式不正确！", "");
        }
        $status = ($status == 1) ? 2 : 1;
        $result = M("Blog")->reset($id, $status);
        if ($result) {
            $this->show("200", "替换成功", "");
        } else {
            $this->show("100", "替换失败", "");
        }
    }

}
