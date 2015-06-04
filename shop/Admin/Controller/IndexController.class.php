<?php
/**
 * Created by PhpStorm.
 * Manager: pein
 * Date: 15/5/27
 * Time: 上午11:10
 * 后台首页控制器
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
    public function index(){
        $this->display();
    }

    public function head(){
//        dump(get_defined_constants());

        $this->display();
    }

    public function left(){
        $this->display();
    }

    public function right(){
        $this->assign('username',session('mg_username'));
        $this->display();
    }

}