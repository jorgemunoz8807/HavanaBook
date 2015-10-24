<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:02:45
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\authorization_failed.html" */ ?>
<?php /*%%SmartyHeaderCode:10738548e5d6509a3a2-15488970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04db0d98f6a47b23c3fd701a00f6c11f33c533f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\authorization_failed.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10738548e5d6509a3a2-15488970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5d650e1c89_04555344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5d650e1c89_04555344')) {function content_548e5d650e1c89_04555344($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_anno ow_std_margin ow_nocontent"><?php if (empty($_smarty_tpl->tpl_vars['message']->value)){?> <?php echo smarty_function_text(array('key'=>'base+authorization_failed_feedback'),$_smarty_tpl);?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <?php }?></div><?php }} ?>