<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL'             =>  1,      // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

    //让页面显示日志追踪信息
    'SHOW_PAGE_TRACE'       => true,
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'TMPL_ENGINE_TYPE'      =>  'Smarty',    //修改模板引擎为smarty
    'TMPL_ACTION_SUCCESS'   =>  'Tpl/success', // 默认成功跳转对应的模板文件
);