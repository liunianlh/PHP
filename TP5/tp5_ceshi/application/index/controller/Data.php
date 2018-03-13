<?php
namespace application\index\controller;

use think\Db;
use think\Controller;
class Data extends Controller{
    
    //执行查询语句
//    public function select(){
//        $data = Db::query("select * from admin");//结果为数组
//        dump($data);
////        $data  = Db::query("insert into admin(id,name) values(5,'lisi')");//结果为数组
////        dump($data);
//    }
//    public function insert(){
//        $data = Db::execute("insert into admin(id,name) values(?,?)",["6","wangyu"]);//结果为int类型(1,0)
//        dump($data);
//    }
    
//    拼接式的查询
    public function select(){
//        $data = Db::table("表名")[->where()]->find/select;
//        find:只查询一条，select是查询多条
//        $data = Db::table("admin")->find();
//        dump($data);
       // $data = Db::table("admin")->where("name","zhangsan")->select();
        
        //"select * from admin where name='zhangsan'"
       // dump($data);
//        $data = Db::name("admin")->select();
//        dump($data);
        
//        $data = Db::name("admin")->where("name","zhangsan")->where("id","<",5)->select();
        Db::name("admin")->field("*")->select();
        //展示执行的sql语句
       echo Db::name("admin")->getLastSql();
       echo "<br/>";
       Db::name("admin")->field(true)->select();
        //展示执行的sql语句
       echo Db::name("admin")->getLastSql();
//        dump($data);
    }
    //查询单独字段
    public function field(){
        //查询某一个值
        $data = Db::name("admin")->where("id","2")->value("name");
//        "select name from admin where id=2 limit 1";
//        dump($data);
        //查询某一列值
        $data = Db::name("admin")->column("name");//数组值为name，下标随意
        dump($data);
        $data = Db::name("admin")->column("name","id");//数组的值为name，下标为id
        dump($data);
    }
    
    public function insert(){
        $data = ["name"=>"maliu"];
//        $result = Db::name("admin")->insert($data);//只能返回的是插入成功的条数
//        
//        //获取插入的id
//        $id = Db::name("admin")->getLastInsID();//最新一条插入的id
//        var_dump($id);
        
        //插入数据，并且返回最新值的id
        $id = Db::name("admin")->insertGetId($data);
        var_dump($id);
    }
    
    public function update(){
        //不带有where条件
//        $result = Db::name("admin")->where("id",1)->update(["status"=>2]);
//        dump($result);
        
        //自动增加或者减少
//        Db::name("admin")->where("id",1)->setInc("status",10);
    }
    
    
    public function shiwu(){
        //新闻表的入库(新闻表和新闻详情表)
        $title="111111111";
        $author="1";
        $desc="1";
        $content="qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq";
        $image="123";
        $newsData = ["title"=>$title,"author"=>$author,"image"=>$image];
        
//        自动控制事务
//        $result = Db::transaction(function()use($newsData,$content){
//            $newsId = Db::name("news")->insertGetId($newsData);
//            if($newsId > 0){
//                $newsContent = ["news_id"=>$newsId, "content"=>$content];
//                $result = Db::name("news_desc")->insert($newsContent);
//            }
//            
//            return $result;
//        });
//        
//        
//        var_dump($result);
        
        //开启事务
//        Db::startTrans();
//        try{
//           $newsId = Db::name("news")->insertGetId($newsData);
//            if($newsId > 0){
//                $newsContent = ["news_id"=>$newsId, "content"=>$content];
//                Db::name("news_desc")->insert($newsContent);
//            }
//            // 提交事务
//            Db::commit();    
//        } catch (\Exception $e) {
//            // 回滚事务
//            Db::rollback();
////            $this->error("数据库操作失败","");
//        }
        
    }
}

