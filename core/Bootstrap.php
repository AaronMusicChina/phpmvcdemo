<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 0:09
 */
namespace core;

class Bootstrap{

    /**
     * 框架启动类
     */
    public static function run(){

        //分析url
        self::parseURl();

    }

    /**
     * 分析url
     */
    public static function parseURl(){

        if(isset($_GET['s']))
        {
            $classAndAction = explode('/', $_GET['s']);
            $class = "web\controller\\".ucfirst($classAndAction[0]);
            $action = $classAndAction[1];
        }
        else
        {
            $class = "web\controller\Index";
            $action = "show";
        }
        dd((new $class)->$action());
        echo (new $class)->$action();

    }
}