<?php

header("context-type:text/html;charset=utf-8");

//将目前TP模式有生产模式改为开发模式
define('APP_DEBUG',true);

//引入核心入口文件
include "../ThinkPHP/ThinkPHP.php";



?>