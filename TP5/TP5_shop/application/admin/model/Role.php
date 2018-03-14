<?php
 
namespace app\admin\model;
use think\Model;

class Role extends Model{
    protected $autoWriteTimestamp=true;
    public function admin(){
    

      return  $this->hasMany("Admin","role_id","id");
    }
}