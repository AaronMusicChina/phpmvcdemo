<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 0:25
 */
namespace core;
class View{

    protected $files = "";
    protected $vars = [];

    public function make($files){
        $this->files = "view/" . $files . ".html";
        return $this;
    }
    public function with($key,$val){
        $this->vars[$key] = $val;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->files;
        return "";
    }

}