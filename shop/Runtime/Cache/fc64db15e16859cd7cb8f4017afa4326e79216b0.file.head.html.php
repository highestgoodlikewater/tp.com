<?php /* Smarty version Smarty-3.1.6, created on 2015-06-02 16:24:48
         compiled from "/Users/pein/www/tp.com/shop/Admin/View/Index/head.html" */ ?>
<?php /*%%SmartyHeaderCode:20323865815569844b5bcf37-06391954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc64db15e16859cd7cb8f4017afa4326e79216b0' => 
    array (
      0 => '/Users/pein/www/tp.com/shop/Admin/View/Index/head.html',
      1 => 1433233486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20323865815569844b5bcf37-06391954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5569844b68fbe',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5569844b68fbe')) {function content_5569844b68fbe($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_IMG_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMG_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：admin &nbsp;&nbsp; <a style="color: #fff" 
                                                        href="" 
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="<?php echo @__MODULE__;?>
/Manager/logout" target=_top>退出系统</a>
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMG_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>