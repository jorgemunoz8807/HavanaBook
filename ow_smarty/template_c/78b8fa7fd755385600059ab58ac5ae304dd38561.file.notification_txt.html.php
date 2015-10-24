<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:57:09
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\notifications\views\components\notification_txt.html" */ ?>
<?php /*%%SmartyHeaderCode:10091548e5c15c160a7-58269826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78b8fa7fd755385600059ab58ac5ae304dd38561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\notifications\\views\\components\\notification_txt.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10091548e5c15c160a7-58269826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
    'nl' => 0,
    'items' => 0,
    'time' => 0,
    'section' => 0,
    'tab' => 0,
    'item' => 0,
    'space' => 0,
    'single' => 0,
    'unsubscribeUrl' => 0,
    'settingsUrl' => 0,
    'unsubscribeAllUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c15c8d1f8_98366866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c15c8d1f8_98366866')) {function content_548e5c15c8d1f8_98366866($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_modifier_simple_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.simple_date.php';
?><?php echo smarty_function_text(array('key'=>"notifications+email_txt_head",'userName'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['section']->key;
?><?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo smarty_modifier_simple_date($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time']->value,true);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['string']);?>
: <?php echo $_smarty_tpl->tpl_vars['space']->value;?>
<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
 <?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']){?><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php }?><?php } ?><?php } ?><?php echo smarty_function_text(array('key'=>"notifications+email_txt_bottom"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php if ($_smarty_tpl->tpl_vars['single']->value){?><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_one_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php }?><?php echo smarty_function_text(array('key'=>"notifications+settings_edit_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['settingsUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nl']->value;?>
<?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_all_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeAllUrl']->value;?>
<?php }} ?>