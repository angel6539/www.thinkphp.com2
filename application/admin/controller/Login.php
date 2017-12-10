<?php
namespace app\admin\controller;
use app\admin\controller\Common;

//use think\Controller;

class Login extends Common {

    public function index(){


        //渲染模板输出
        return $this->fetch();
    }

    public function login(){
        return 'login';
    }

    public function logout(){
        return 'logout';

    }

}