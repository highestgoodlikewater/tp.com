<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->display();
    }

    public function msg(){
        /**
         * 获得Util控制器的memberNum方法返回的信息
         * 当前IndexController会通过自动加载机制引入
         * ThinkPHP/Library/Think/Think.class.php
         * function autoload();
         */

        //        $user = new UtilController();
        //        echo $user->memberNum();

        /**
         * 通过快捷函数A()实例化控制器对象
         * new一个控制器对象返回
         * A([项目://][模块/]/控制器标志);
         * 跨项目目前不可用
         */
        //        $user = A('Util');
        //        echo $user->memberNum();

        /**
         * 简便操作
         * R([项目://][模块/]/控制器标志/操作函数);
         */
        echo R('Util/memberNum');

    }

}