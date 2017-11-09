<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 16:26
 */

namespace core;


class View
{
    //模版文件
    protected  $file;
    //模版变量
    protected  $vars = [];


    public function make($file){
        $this->file = "view/" . $file . ".html";
        return $this;
    }
    public function with($name,$value){
        $this->vars[$name] = $value;
        return $this;
    }
    public function __toString()
    {
        extract($this->vars);
        include $this->file;

        return "";
    }


}