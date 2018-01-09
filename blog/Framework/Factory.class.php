<?php

/**
 * 工厂类
 */
class Factory {

    /**
     * 调取模型
     */
    public static $model; //储存实例化结果，保证结果只实例化一次

    public static function getModel($name) {
        if (!isset(self::$model[$name])) {
            require_once "./Application/".MODULE."/Model/{$name}Model.class.php";
            $newname = $name . "Model";
            self::$model[$name] = new $newname();
            
        }
        return self::$model[$name];
    }

}
