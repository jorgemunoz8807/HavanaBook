<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 00:19:20
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\sort_control.html" */ ?>
<?php /*%%SmartyHeaderCode:14140548e9988f14277-90528580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eb5959077725b02499d789bbd01609fadd9d0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\sort_control.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14140548e9988f14277-90528580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'itemList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e9989017ab5_57556935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e9989017ab5_57556935')) {function content_548e9989017ab5_57556935($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_sort_control ow_smallmargin ow_small ow_alt2"><span class="ow_sort_control_label"><?php echo smarty_function_text(array('key'=>"base+sort_control_sortby"),$_smarty_tpl);?>
:</span><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']){?>class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a><?php } ?>
</div><?php }} ?>