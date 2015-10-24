<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:51:27
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\widget_panel_profile.html" */ ?>
<?php /*%%SmartyHeaderCode:8903548e68cf0a3f66-81502595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9733fd93d76d66acf3d972f68a0de2796959b0db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\widget_panel_profile.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8903548e68cf0a3f66-81502595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isSuspended' => 0,
    'isAdminViewer' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e68cf0c6b90_15323922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e68cf0c6b90_15323922')) {function content_548e68cf0c6b90_15323922($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if ($_smarty_tpl->tpl_vars['isSuspended']->value&&!$_smarty_tpl->tpl_vars['isAdminViewer']->value){?>
	<?php echo smarty_function_text(array('key'=>"base+user_page_suspended"),$_smarty_tpl);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>