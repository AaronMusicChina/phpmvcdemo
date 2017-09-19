<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 23:11
 */
namespace core;
class View{

    protected $file = "";
    protected $vars = [];
    public $mkdir = "";
    public function make($fileStr)
    {
        $this->file = "views/". $this->mkdir ."/" .$fileStr.".html";
        return $this;
    }

    public function with($key,$val)
    {
        $this->vars[$key] = $val;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return "";
    }
}