<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 11:43
 */

namespace web\controller;


use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public function show(){
        return $this->view->make('index')->with('version','1.0');
    }

    public function  post(){
        return $this->view->make('login');
    }

    public function code(){
        $builder = new CaptchaBuilder;
        $builder->build();
        header('Content-type: image/jpeg');
        $builder->output();

    }
}