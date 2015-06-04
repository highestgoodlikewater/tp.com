<?php 

header("context-type:text/html;charset=utf-8");

//将目前TP模式有生产模式改为开发模式
define('APP_DEBUG',true);

//定义CSS,JS,images路径常量
define('SITE_URL','http://localhost/tp.com/shop/');
define('CSS_URL',SITE_URL.'pubLic/Home/css/');
define('JS_URL',SITE_URL.'public/Home/js/');
define('IMG_URL',SITE_URL.'public/Home/images/');

//定义后台CSS,JS,images路径常量
define('ADMIN_CSS_URL',SITE_URL.'public/Admin/css/');
define('ADMIN_IMG_URL',SITE_URL.'public/Admin/images/');
define('ADMIN_JS_URL',SITE_URL.'public/Admin/js');
define('ADMIN_GOODS_IMG',SITE_URL.'public/Admin/');


//引入核心入口文件
include "../ThinkPHP/ThinkPHP.php";



 ?>