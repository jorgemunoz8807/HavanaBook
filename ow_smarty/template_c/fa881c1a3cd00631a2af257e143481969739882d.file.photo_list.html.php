<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:31:16
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\components\photo_list.html" */ ?>
<?php /*%%SmartyHeaderCode:7649548f1ae4418751-03898250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa881c1a3cd00631a2af257e143481969739882d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\components\\photo_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7649548f1ae4418751-03898250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photos' => 0,
    'p' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1ae4445c76_49946492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1ae4445c76_49946492')) {function content_548f1ae4445c76_49946492($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'img', null); ob_start(); ?>data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><div class="owm_photo_list_item" data-ref="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" /></a></div><?php } ?><?php }} ?>