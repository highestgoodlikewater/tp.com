<?php
/**
 * Created by PhpStorm.
 * User: pein
 * Date: 15/5/28
 * Time: 上午9:55
 * Goods商品数据模型
 */
namespace Model;
use Think\Model;

//父类 ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{

    //批量验证
    protected $patchValidate       = true;
    //通过重写父类属性_validate实现表单验证
    protected $_validate          = array(

        //验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间],
        //验证用户名
        array('username','require','用户名不能为空！'),
        array('password','require','密码不能为空！'),

        array('password2','require','确认密码不能为空！'),
        array('password2','password','两次密码不一致！',0,'confirm'),

        array('user_email','email','邮箱格式错误！',2),

        //验证QQ
        //正则表达式
        array('user_qq','/^[1-9]\d{4,9}$/','QQ格式错误！'),

        array('user_xueli','2,3,4,5','请选择学历！',0,'in'),

        //爱好至少选择两项以上
        //爱好的值是一个数组，判断其元素个数即可
        //callback利用当前Model里的一个方法进行验证
        array('user_hobby','checkhobby','爱好必须两项以上',1,'callback'),

    );
    //自定义方法验证爱好信息
    //$name = $_POST['user_hobby'];
    function checkhobby($name){
        //参数是当前被验证项目的信息
        if(count($name)<2){
            return false;
        }else{
            return true;
        }
    }
}