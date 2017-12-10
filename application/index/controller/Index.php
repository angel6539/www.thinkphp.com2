<?php
namespace app\index\controller;

class Index extends \think\Controller {
    public function index()
    {
        //return 'hello world! Frontend!';
        //渲染模板输出
        return $this->fetch();
    }
    //url test
    public function test()
    {
        return 'front_test!';
    }


}
