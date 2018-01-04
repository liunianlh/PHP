<?php

//工厂类




class Factory {

    public static $model;

//    调取模型    
    public static function getModel($name) {

        if (!isset(self::$model[$name])) {
            require_once "./Model/{$name}Model.class.php";
            $newname= $name."Model";
            self::$model[$name] = new $newname();
        }
                                                                   
    return self::$model[$name];
    }

}
