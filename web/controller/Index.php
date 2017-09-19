<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 0:18
 */
namespace web\controller;

use core\View;

class Index{

    private $view = "";

    public function __construct()
    {
        $this->view = new View();
    }

    public function show(){
        return $this->view->make("show")->with("welcome","欢迎来到Aaron php框架中心");
    }

}