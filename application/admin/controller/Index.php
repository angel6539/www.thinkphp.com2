<?php
namespace app\admin\controller;

class Index extends  Common
{
    public function index()
    {
        return 'hello world! admin!';
    }
    //url test
    public function test()
    {
        return 'admin_test!';
    }
}
