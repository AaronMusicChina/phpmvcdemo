<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 22:29
 */
function dd($con){
    echo "<pre>".print_r($con , true)."</pre>";
}
//获取url目录
function getRoute(){
    $classAndAction = [];
    if(isset($_GET['s'])){
        $classAndAction = explode( '/' , $_GET['s'] );
    }else {
        $classAndAction = ['Index', 'show'];
    }
    return $classAndAction;
}