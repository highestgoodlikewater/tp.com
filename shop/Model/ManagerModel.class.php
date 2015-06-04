<?php
/**
 * Created by PhpStorm.
 * User: pein
 * Date: 15/6/2
 * Time: 下午3:22
 */
namespace Model;
use Think\Model;
class ManagerModel extends Model{

    public function checkManager($name,$pswd){
        /**
         * 1.根据$name查询是否有此记录
         * 2.如果返回一维数组，说明此用户存在
         * 3.判断用户输入密码与此用户密码是否一致
         */
        $info = $this->getByMg_name($name);

        if($info != null){
            if($info['mg_pwd'] != $pswd){
                return false;
            }else{
                return $info;
            }
        }else{
            return false;
        }
    }
}