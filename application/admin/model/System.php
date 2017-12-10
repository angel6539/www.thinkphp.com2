<?php
namespace app\admin\model;
use think\Model;
Class System extends Model{
    function  checkLogin(){
        $info['status'] = false;
        $info['info'] = "没有登录";
        return $info;
    }

}