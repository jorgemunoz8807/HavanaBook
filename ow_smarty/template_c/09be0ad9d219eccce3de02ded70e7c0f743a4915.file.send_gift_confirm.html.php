<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 02:46:10
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\components\send_gift_confirm.html" */ ?>
<?php /*%%SmartyHeaderCode:14282548ebbf2271b49-70423382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09be0ad9d219eccce3de02ded70e7c0f743a4915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\components\\send_gift_confirm.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14282548ebbf2271b49-70423382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageUrl' => 0,
    'showPrice' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ebbf22b8bf6_45458472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ebbf22b8bf6_45458472')) {function content_548ebbf22b8bf6_45458472($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'confirm-gift-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'confirm-gift-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="clearfix ow_smallmargin">
    <div class="ow_gift_image">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" width="80" />
    </div>
    <?php if ($_smarty_tpl->tpl_vars['showPrice']->value&&$_smarty_tpl->tpl_vars['template']->value->price!=0){?>
    <div class="ow_gift_message">
        <?php echo smarty_function_text(array('key'=>'virtualgifts+gift_price'),$_smarty_tpl);?>
 <b><?php echo $_smarty_tpl->tpl_vars['template']->value->price;?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
<br />
    </div>
    <?php }?>
</div>
<table class="ow_table_3 ow_smallmargin">
    <tr class="ow_tr_first">
        <td class="ow_label" style="width: 13%;"><?php echo smarty_function_text(array('key'=>'virtualgifts+message'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'message','class'=>'ow_gift_message_area'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_tr_last">
        <td class="ow_label"></td>
        <td class="ow_value" style="border: none"><?php echo smarty_function_input(array('name'=>'isPrivate'),$_smarty_tpl);?>
 <?php echo smarty_function_label(array('name'=>'isPrivate'),$_smarty_tpl);?>
</td>
    </tr>
</table>

<div class="clearix">
    <div class="ow_right"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_ic_mail ow_positive'),$_smarty_tpl);?>
</div>
    <div class="ow_left"><?php echo smarty_function_decorator(array('name'=>'button','id'=>'cancel_btn','langLabel'=>'base+cancel','class'=>'ow_ic_reply ow_negative'),$_smarty_tpl);?>
</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'confirm-gift-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>