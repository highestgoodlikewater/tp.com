<?php
/**
 * Created by PhpStorm.
 * Manager: pein
 * Date: 15/5/27
 * Time: 上午10:49
 */
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller{

    public function _empty(){
        echo "<div style='text-align: center'><images src='".IMG_URL."404.jpg'></div>";
    }

}