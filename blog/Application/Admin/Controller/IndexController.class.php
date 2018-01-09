<?php

require './Framework/Controller.class.php';

class IndexController extends Controller {

    public function index() {
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startpage = $page - 2;  
        $endpage = $page + 2;
        //获取管理员列表
        $adminList = M("Admin")->getList(0, 2, $page);
        $countpage=$adminList["countpage"];
        if ($adminList["countpage"]>=5){
            if ($startpage<=0){
                $startpage=1;
                $endpage=5;                                                                   
            }
            if($endpage>$countpage){
                $endpage=$countpage;
                $startpage=$endpage-4;
            }
        }else{
            $startpage=1;
            $endpage=$countpage;
        }
        $this->smarty->assign("adminList", $adminList);
        $this->smarty->assign("page", $page);
        $this->smarty->assign("startpage", $startpage);
        $this->smarty->assign("endpage", $endpage);
        $this->smarty->display("index.html");
    }

    /**
     * 登录
     */
    public function login() {
        $this->smarty->display("login.html");
    }
    public function quit() {
       setcookie("admin_id","", time()-1);
       setcookie("admin_name","", time()-1);
       echo "<script>window.location.href='http://localhost/web/index.php?m=Admin&c=Index&a=login';</script>";
    }
    /**
     * 登录验证
     */
    public function checkLogin() {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        if ($name == "" || $pwd == "") {
            $this->show("100", "用户名或密码不能为空", "");
        }
        $pwd= md5($pwd);
        $result= M("Admin")->login($name,$pwd);
        if ($result==null) {
            $this->show("100", "用户名或密码不正确", "");
        }else if ($result["status"]==2) {
            $this->show("100", "管理账号禁止登录", "");
        } else {
            //存储登录信息
        setcookie("admin_id", $result["id"], time()+60*60*24);
        setcookie("admin_name", $result["name"], time()+60*60*24);
        $this->show("200", "登录成功", "");
        }
    }
    /**
     * 添加
     */
    public function insert() {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        if ($name == "" || $pwd == "") {
            $this->show("100", "请将内容填写完整", "");
        }
        $pwd = md5($pwd);
        $result = M("Admin")->addAdmin($name, $pwd);
        if ($result) {
            $this->show("200", "添加成功", "");
        } else {
            $this->show("100", "添加失败", "");
        }
    }

    /**
     * 重置密码
     */
    public function reset() {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        if (is_numeric($id) == false) {
            $this->show("100", "传参格式不正确！", "");
        }
        $result = M("Admin")->update($id);
        if ($result) {
            $this->show("200", "重置成功", "");
        } else {
            $this->show("100", "重置失败", "");
        }
    }

    /**
     * 删除
     */
    public function delete() {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        if (is_numeric($id) == false) {
            $this->show("100", "传参格式不正确！", "");
        }
        $result = M("Admin")->deleteAdmin($id);
        if ($result) {
            $this->show("200", "删除成功", "");
        } else {
            $this->show("100", "删除失败", "");
        }
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

        $result = M("Admin")->reset($id, $status);
        if ($result) {
            $this->show("200", "替换成功", "");
        } else {
            $this->show("100", "替换失败", "");
        }
    }

}
