<?php
namespace app\admin\controller;
use think\Controller;

class Common extends Controller {
    //初始化
    public function _initialize(){
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');

        // 登录过滤
        $this->filterLogin();

        // 权限过滤

    }


    //登陆过滤
    public function filterLogin() {
        $controller = $this->request->controller();
        //检测是否登录，没有登录就跳转到登录页面
        if( $controller !== 'Login'){
            $rs =  model('System')->checkLogin();
            if (!$rs['status']) {
                $this->error($rs['info'],url('Login/index'));
            }
        }
    }
}