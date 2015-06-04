<?php
/**
 * Created by PhpStorm.
 * User: pein
 * Date: 15/5/28
 * Time: 上午10:13
 *
 */
namespace Model;
use Think\Model;

class QqModel extends Model{

    //可以给当前model定义个性化的设置

//    protected $trueTableName = 'tencent_qq';
    protected $tablePrefix = 'tencent_';
}