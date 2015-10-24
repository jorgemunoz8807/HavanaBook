<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 00:42:30
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\birthdays\views\components\my_birthday_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:170548ff076683ee5-32106299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c28fb53e75a850d52aefd0411ce18c52cc45911' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\birthdays\\views\\components\\my_birthday_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170548ff076683ee5-32106299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ballonGreenSrc' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ff076746038_71511536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ff076746038_71511536')) {function content_548ff076746038_71511536($_smarty_tpl) {?><center>
<img src="<?php echo $_smarty_tpl->tpl_vars['ballonGreenSrc']->value;?>
" /><br />
<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</center><?php }} ?>