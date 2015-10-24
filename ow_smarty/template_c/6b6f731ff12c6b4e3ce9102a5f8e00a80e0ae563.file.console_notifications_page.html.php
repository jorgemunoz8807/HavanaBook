<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\console_notifications_page.html" */ ?>
<?php /*%%SmartyHeaderCode:23695548e92d7a9e211-17275243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b6f731ff12c6b4e3ce9102a5f8e00a80e0ae563' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\console_notifications_page.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23695548e92d7a9e211-17275243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92d7abff66_70861601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92d7abff66_70861601')) {function content_548e92d7abff66_70861601($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php }
if (!$_smarty_tpl->tpl_vars["item"]->_loop) {
?>
    <div class="owm_padding owm_align_center"><?php echo smarty_function_text(array('key'=>'base+mobile_notifications_console_empty'),$_smarty_tpl);?>
</div>
<?php } ?><?php }} ?>