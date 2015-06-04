<?php
/**
 * Created by PhpStorm.
 * User: pein
 * Date: 15/5/27
 * Time: 下午2:54
 * 后台商品控制器
 */
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{

    public function show1(){
        //使用数据模型
        //实例化Model对象
        $goods = new \Model\GoodsModel();
        //        $goods = D('Goods');
        //        $goods = M('Goods');
        //        dump($goods);

//        $info = $goods -> select();

        //查询价格大于1000的所有商品
//        $info = $goods -> where('goods_price >1000 and goods_name like "索爱%"') ->select();

        //查询指定字段
//        $info = $goods -> field('goods_id,goods_name') -> select();

        //限制条数

//        $info = $goods -> limit("5") -> select();
//        $info = $goods -> limit('10,5') -> select();

        //分组查询 group by
        //查询当前商品一共的分组
//        $info = $goods -> field('goods_category_id') ->  select();  //有重复数据

//        $info = $goods -> field('goods_category_id') ->  group('goods_category_id ') -> select();
        //排序查询
        $info = $goods -> order('goods_price desc') -> select();

//        dump($info);

        $this -> assign('info',$info);

        $this->display();
    }

    public function show2(){
        $goods = D('Goods');

        //查询主键值等于30的记录
//        $info = $goods -> select('30');

        //查询主键值等于如下的记录
//        $info = $goods -> select('20,21,22,23');

        //只查询单条记录，使用find()返回一维数组
//        $info = $goods -> find('30');
//        dump($info);

        $info = $goods -> select();

        $this -> assign ('info',$info);
        $this -> display();

    }
    public function show(){
        $goods = D('Goods');

        //1.获得当前纪录总条数
        $total = $goods->count();
        $per = 7;

        //2.实例化分页对象
        $page = new \Component\Page($total,$per);

        //3.拼装SQL语句，获得每页信息
        $sql = "SELECT * FROM sw_goods ".$page->limit;
        $info = $goods->query($sql);

        //4.获得页码列表
        $pagelist = $page->fpage();

        $this -> assign ('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();
    }
    public function add1(){
        $goods = D("Goods");

        //数组方式添加数据
//        $arr = array(
//            'goods_name'    => 'iPhone 5S',
//            'goods_price'   => 4999,
//            'goods_number'  => 55,
//        );
//        $res = $goods -> add($arr);

        //AR方式添加数据
        $goods -> goods_name = 'HTC_ONE';
        $goods -> goods_price = 2800;
        $res = $goods -> add();
        echo $res;

        $info = $goods -> select();
        $this -> assign("info",$info);
        $this -> display();
    }

    public function add(){
        if(!empty($_POST)){
            $goods = D('Goods');
//            $arr = $_POST;
//            $res = $goods -> add($arr);

            //TP框架有方法实现数据收集 数据模型对象->create()；
            $goods -> create();
            $res = $goods -> add();

            if($res){
                $this -> success('添加商品成功',U('Goods/show'),2);
            }else{
                $this -> error('添加商品失败',U('Goods/show'),2);
            }
        }else{
            $this->display();
        }
    }

    public function update($goods_id){
            $goods = D('Goods');
            if(!empty($_POST)){
                $goods->create();
                $res = $goods->save();
                if($res){
                    $this->success('更新商品信息成功！',U('Goods/show'),3);
                }
            }else{
                $info = $goods -> find($goods_id);
                $this->assign('info',$info);
                $this->display();
            }

    }

}
