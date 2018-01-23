<?php
/**
 * 工厂类
 */
class Factory{
    /**
     * 调取模型
     */
    public static $model;//存储实例化结果，保证一个只实例化一次
    public static function getModel($name,$module=""){
		if($module == ""){
				$module = MOUDULE;
			}
        if(!isset(self::$model[$module.$name])){
			
			
            require_once "./Application/".$module."/Model/{$name}Model.class.php";
            $newname = $name."Model";
            self::$model[$module.$name]=new $newname();
        }
        return self::$model[$module.$name];
    }
}

