<?php
/**
 * Created by PhpStorm.
 * Manager: pein
 * Date: 15/5/26
 * Time: 下午2:52
 * 商品控制器
 */
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{

    public function goodslist(){
        $this->display();
    }

    public function goodsdetail(){
        $this->display();
    }
}