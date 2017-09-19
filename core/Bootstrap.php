<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 22:14
 */
namespace core;
 class Bootstrap {

     /**
      * 系统启动类
      * 启动入口
      */
     public static function run(){
        self::parseUrl();
    }

     //分析url
     public static function parseUrl(){

         $classAndAction = getRoute();
         $class = "web\controller\\".ucfirst($classAndAction[0]);
         $action = $classAndAction[1];
         echo (new $class)->$action();

     }

}