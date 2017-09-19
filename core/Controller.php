<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 23:23
 */
namespace core;

class Controller{

    protected $view;


    function __construct()
    {
        //初始化模板并且赋值
        $this->view = new \core\View();
        $this->setViewMkdir();
    }
    function setViewMkdir(){
        $classAndAction = getRoute();
        $this->view->mkdir = ucfirst( $classAndAction[0]);
    }


}