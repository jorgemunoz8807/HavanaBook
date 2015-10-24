<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:03:05
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\option_list.html" */ ?>
<?php /*%%SmartyHeaderCode:32040548faef95d4c63-47200962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37944d253ad57e1348fd4d9e3e44a65fee31573a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\option_list.html',
      1 => 1404901682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32040548faef95d4c63-47200962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'opt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faef95d9889_26875343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faef95d9889_26875343')) {function content_548faef95d9889_26875343($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["opt"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["opt"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["opt"]->key => $_smarty_tpl->tpl_vars["opt"]->value){
$_smarty_tpl->tpl_vars["opt"]->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['opt']->value;?>

<?php } ?><?php }} ?>