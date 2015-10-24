<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:10:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\leave_button_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:25301548e894ccf7915-99450262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4d105bfb332c12c2b5f18b2cc8953195146dd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\leave_button_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25301548e894ccf7915-99450262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e894cd137f9_28678307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e894cd137f9_28678307')) {function content_548e894cd137f9_28678307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_leave_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }} ?>