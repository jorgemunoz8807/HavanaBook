<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:51:42
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\user_list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:19590548e5aceb16c79-41424354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faaa339abcabdeefb04f979acb7871442156b36b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\user_list_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19590548e5aceb16c79-41424354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'listType' => 0,
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5aceb222d8_92650422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5aceb222d8_92650422')) {function content_548e5aceb222d8_92650422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)){?><?php echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
<?php }} ?>