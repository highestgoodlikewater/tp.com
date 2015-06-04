<?php
/**
 * Created by PhpStorm.
 * Manager: pein
 * Date: 15/5/27
 * Time: 上午11:12
 * 后台用户登录控制器
 */
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{

    public function login(){
        if(!empty($_POST)){
            $verify = new \Think\Verify();
            if($verify->check($_POST['captcha'])){
                $manager = new \Model\ManagerModel();
                $rst = $manager->checkManager($_POST['name'],$_POST['pswd']);
                if($rst === false){
                    echo "用户名或密码错误";
                }else{
                    //登录信息持久化
                    session('mg_username',$rst['mg_name']);
                    session('mg_id',$rst['mg_id']);
                    $this->redirect('Index/Index');
                }
            }else{
                echo "验证码错误，请重新输入";
            }
        }else{
            $this->display();
        }

    }

    public function logout(){
        session(null);
        redirect('Login');
    }

    public function register(){
        echo "register";
    }

    public function verifyImg(){
        $config = array(
            'useNoise'  =>  true,            // 是否添加杂点
            'fontSize'  =>  11,              // 验证码字体大小(px)
            'useCurve'  =>  false,            // 是否画混淆曲线
            'imageH'    =>  20,               // 验证码图片高度
            'imageW'    =>  80,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        $verify = new \Think\Verify($config);
        $verify -> entry();
//        dump($verify);
        return $verify;
    }
}