<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factory
 *
 * @author WANG
 */
class Factory {
    //put your code here
    public static $model;
    public static function M($name){
        if(!isset(self::$model[$name])){
            require_once 'Model/'.$name.'.class.php';
            self::$model[$name]=new $name();
        }
        return self::$model[$name];
    }
}
