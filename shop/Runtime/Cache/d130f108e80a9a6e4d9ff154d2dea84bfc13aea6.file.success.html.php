<?php /* Smarty version Smarty-3.1.6, created on 2015-05-30 17:34:07
         compiled from "/Users/pein/www/tp.com/shop/Admin/View/Tpl/success.html" */ ?>
<?php /*%%SmartyHeaderCode:1028494465569840f6ce449-21500660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd130f108e80a9a6e4d9ff154d2dea84bfc13aea6' => 
    array (
      0 => '/Users/pein/www/tp.com/shop/Admin/View/Tpl/success.html',
      1 => 1432976248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028494465569840f6ce449-21500660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'waitSecond' => 0,
    'jumpUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5569840f75b89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5569840f75b89')) {function content_5569840f75b89($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
        .system-message{ padding: 24px 48px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px}
        .system-message .jump a{ color: #333;}
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
    </style>
</head>
<body>
<div class="system-message">
    <p>
        <h3><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
        <br/>
    </p>
    <p>
        <b1 id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b1>秒后页面自动跳转
    </p>
    <input type="hidden" id="href" value="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
"/>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait');
        var href = document.getElementById('href').value;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>
<?php }} ?>