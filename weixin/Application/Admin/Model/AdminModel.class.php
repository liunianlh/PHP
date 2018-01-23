<?php
/**
 * 管理员model
 */
//引入model
require_once './Framework/Model.class.php';

class AdminModel extends Model{
    public function getAdminList(){
        $sql = "select * from admin";
        $data = $this->link->queryAll($sql);
        return $data;
    }
        
    //添加管理员
    public function addAdmin($name,$pwd){
            $sql = "select count(*) as num from admin where name='{$name}'";
            $num = $this->link->query($sql);
            //判断用户是否存在
            if($num["num"] > 0){
                  $this->show(101, "用户名已存在", $num);
            }
            
            $pwd= md5($pwd);
            $sql = "insert into admin (name,pwd,state,rank)value('{$name}','{$pwd}',1,0);";
            $result = $this->link->add($sql);
            return $result;
        }
        
      //修改管理员状态
        public function state($id,$state){
            if($state==1){
                $sql = "update admin set state=2 where id={$id}";
            }else{
                $sql = "update admin set state=1 where id={$id}";
            }
            $result = $this->link->update($sql);
            return $result;
            
        }
        //查询管理员等级
        public function level(){ 
            $sql = "select rank from admin ";
            $result = $this->link->queryAll($sql);
            return $result;
            
        }
         //保存修改的管理员等级
        public function saveLevel($id,$rank){ 
            $sql = "update admin set rank={$rank} where id={$id}";
            $result = $this->link->update($sql);
            return $result;  
        }
        
        //重置密码
        public function reset($id){
            $pwd = 123456;
            $pwd = md5($pwd);
            $sql = "update admin set pwd='{$pwd}' where id={$id}";
            $result = $this->link->update($sql);
            return $result;
        }
        
        //删除管理员
        public function delete($id){
            $sql= "delete from admin where id = {$id}";
            $result = $this->link->delete($sql);
            return $result;
        }
  
}