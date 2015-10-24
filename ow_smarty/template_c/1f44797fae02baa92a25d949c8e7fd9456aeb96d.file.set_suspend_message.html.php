<?php /* Smarty version Smarty-3.1.12, created on 2014-12-18 23:09:52
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\set_suspend_message.html" */ ?>
<?php /*%%SmartyHeaderCode:291875493cf4002cd70-45199086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f44797fae02baa92a25d949c8e7fd9456aeb96d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\set_suspend_message.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291875493cf4002cd70-45199086',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5493cf40058a46_10119319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493cf40058a46_10119319')) {function content_5493cf40058a46_10119319($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"set_suspend_message")); $_block_repeat=true; echo smarty_block_form(array('name'=>"set_suspend_message"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_std_margin">
 
        <?php echo smarty_function_text(array('key'=>"base+set_suspend_message_label"),$_smarty_tpl);?>

        <?php echo smarty_function_input(array('name'=>'message'),$_smarty_tpl);?>

        

    
</div>
<div class="ow_right">
    <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"set_suspend_message"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>