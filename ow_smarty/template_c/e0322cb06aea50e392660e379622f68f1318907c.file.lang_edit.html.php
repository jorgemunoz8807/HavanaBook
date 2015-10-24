<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:00:01
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\components\lang_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:7425548e78e10a3fa3-72482970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0322cb06aea50e392660e379622f68f1318907c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\components\\lang_edit.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7425548e78e10a3fa3-72482970',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e78e10d6133_10626680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e78e10d6133_10626680')) {function content_548e78e10d6133_10626680($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"lang_edit")); $_block_repeat=true; echo smarty_block_form(array('name'=>"lang_edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo smarty_function_input(array('name'=>'langId'),$_smarty_tpl);?>

<table class="ow_table_1 ow_form">
    <tr class="ow_alt2 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'label'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'label'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'label'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'tag'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'tag'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'tag'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'rtl'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'rtl'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'rtl'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"lang_edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>