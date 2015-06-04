<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

	//用户登录
	function login(){
		//调用视图dispaly();
        $this->display();
	}

	//用户注册
	function register(){
//        $user = D('User');
        $user = new  \Model\UserModel();
        if(!empty($_POST)){
            if(!$user -> create()){
                //验证失败，输出错误信息
//                dump($user->getError());
//                exit;
                $this->assign('error',$user->getError());
            }else{
                //把爱好由数组转变为字符串'1,2,3'的形式
                //使用ARf方式处理爱好的字段信息
                //create()方法收集的数据也是把数据变为模型对象的属性
                $user -> user_hobby = implode(',',$_POST['user_hobby']);

                $rst = $user -> add();
                if($rst){
                    $this->success('注册成功，正在跳转！',U('Index/index'),3);
                }else{
                    echo 'error';
                }
            }
        }else{
            $this->display();
        }
	}

    function _empty(){
        echo "<div style='text-align: center'><images src='".IMG_URL."404.jpg'></div>";
    }

}
 ?>
