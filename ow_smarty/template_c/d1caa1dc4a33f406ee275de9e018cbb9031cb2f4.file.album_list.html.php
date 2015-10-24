<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:31:03
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\components\album_list.html" */ ?>
<?php /*%%SmartyHeaderCode:8091548f1ad76ea421-31928560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1caa1dc4a33f406ee275de9e018cbb9031cb2f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\components\\album_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8091548f1ad76ea421-31928560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albums' => 0,
    'username' => 0,
    'album' => 0,
    'href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1ad771e6b3_34802700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1ad771e6b3_34802700')) {function content_548f1ad771e6b3_34802700($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'href', null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>"photo_user_album:[user=>".((string)$_smarty_tpl->tpl_vars['username']->value).", album=>".((string)$_smarty_tpl->tpl_vars['album']->value['dto']->id)."]"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<li class="owm_photo_album_list_item" data-ref="<?php echo $_smarty_tpl->tpl_vars['album']->value['dto']->id;?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="owm_photo_album_list_cont clearfix">
        <span class="owm_float_left">
            <span class="owm_photo_album_thumb" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
)"></span>
            <span class="owm_photo_album_name"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['album']->value['dto']->name,22);?>
</span>
        </span>
        <span class="owm_float_right">
            <span class="owm_photo_album_count"><?php echo $_smarty_tpl->tpl_vars['album']->value['photo_count'];?>
</span>
        </span>
    </a>
</li>
<?php } ?><?php }} ?>