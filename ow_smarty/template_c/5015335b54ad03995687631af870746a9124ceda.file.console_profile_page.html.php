<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:51:20
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\console_profile_page.html" */ ?>
<?php /*%%SmartyHeaderCode:18065548e92f8cd0be0-27405063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5015335b54ad03995687631af870746a9124ceda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\console_profile_page.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18065548e92f8cd0be0-27405063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'avatarUrl' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92f8cfb8d4_27297070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92f8cfb8d4_27297070')) {function content_548e92f8cfb8d4_27297070($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
?><div class="owm_sidebar_profile_block">
    <div class="owm_sidebar_profile_cont clearfix">
        <div class="owm_avatar"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['avatarUrl']->value;?>
" /></a></div>
        <div class="owm_sidebar_profile_name"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="owm_sidebar_profile_btn"><span><?php echo smarty_function_text(array('key'=>'mobile+view_profile'),$_smarty_tpl);?>
</span></a>
    </div>
    <div class="owm_sidebar_profile_delimiter"></div>
    <input class="owm_sidebar_profile_logout" type="button" onclick="location.href='<?php echo smarty_function_url_for_route(array('for'=>'base_sign_out'),$_smarty_tpl);?>
'" value="<?php echo smarty_function_text(array('key'=>'mobile+sign_out'),$_smarty_tpl);?>
" />
</div><?php }} ?>