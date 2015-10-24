<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:59
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\my_avatar_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:8443548e5323b53d71-44141340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df2ad8edf18d3fdfb3fca9fecbca57212870349e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\my_avatar_widget.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8443548e5323b53d71-44141340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5323b5add0_34116309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5323b5add0_34116309')) {function content_548e5323b5add0_34116309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="ow_my_avatar_widget clearfix">
	<div class="ow_left ow_my_avatar_img"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
    <div class="ow_my_avatar_cont">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
" class="ow_my_avatar_username"><span><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</span></a>
    </div>
</div><?php }} ?>