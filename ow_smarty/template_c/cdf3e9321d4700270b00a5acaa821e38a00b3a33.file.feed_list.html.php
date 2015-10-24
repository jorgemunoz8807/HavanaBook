<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:02:07
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\feed_list.html" */ ?>
<?php /*%%SmartyHeaderCode:16348548faebf4fd5c7-46273581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf3e9321d4700270b00a5acaa821e38a00b3a33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\feed_list.html',
      1 => 1404901676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16348548faebf4fd5c7-46273581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faebf521642_98296435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faebf521642_98296435')) {function content_548faebf521642_98296435($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php }
if (!$_smarty_tpl->tpl_vars["item"]->_loop) {
?>
    <li class="ql_item ow_nocontent"><?php echo smarty_function_text(array('key'=>"questions+question_list_no_items"),$_smarty_tpl);?>
</li>
<?php } ?><?php }} ?>