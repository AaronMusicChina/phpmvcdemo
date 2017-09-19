<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 22:14
 */
namespace web\controller;
use core\View;
use core\Controller;

class Index extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function show(){
       return $this->view->make("show")->with("num",[1,2,3]);
    }

    public function post(){
       return $this->view->make("post");
    }

}