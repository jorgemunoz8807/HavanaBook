<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:25:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\comments_form.html" */ ?>
<?php /*%%SmartyHeaderCode:22126548f196c235a73-23351244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73162bbf1a6f122f5265ad3e17d906a5833c6208' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\comments_form.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22126548f196c235a73-23351244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f196c25f9d4_52089953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f196c25f9d4_52089953')) {function content_548f196c25f9d4_52089953($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>$_smarty_tpl->tpl_vars['formName']->value)); $_block_repeat=true; echo smarty_block_form(array('name'=>$_smarty_tpl->tpl_vars['formName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="owm_newsfeed_comment_input">
    <?php echo smarty_function_input(array('name'=>'commentText'),$_smarty_tpl);?>

</div>
<div class="owm_newsfeed_comment_submit clearfix comment_submit" style="display:none;">
    <div class="owm_float_right"><?php echo smarty_function_submit(array('name'=>'comment-submit'),$_smarty_tpl);?>
</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>$_smarty_tpl->tpl_vars['formName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>