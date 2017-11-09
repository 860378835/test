<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 11:58
 */

namespace core;


class Bootstrap
{
    public static function run(){
        self::parseUrl();
    }

    public static function parseUrl(){
        if(isset($_GET['s'])){
            $info = explode('/',$_GET['s']);
            $class = '\web\controller\\' . ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = "\web\controller\Index";
            $action = "show";
        }
        echo (new $class)->$action();
    }

}


