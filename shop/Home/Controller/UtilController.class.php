<?php
/**
 * Created by PhpStorm.
 * User: pein
 * Date: 15/5/27
 * Time: 下午3:52
 * 工具类控制器
 */
namespace Home\Controller;
use Think\Controller;

class UtilController extends Controller{

    public function memberNum(){
        return "当前注册会员数：200万";
    }
}