<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:45:26
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:26485548e676635aa79-96634750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a8b2a35dc79f6b264fda12588cb86b34145d93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\admin_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26485548e676635aa79-96634750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e676639e439_12559959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e676639e439_12559959')) {function content_548e676639e439_12559959($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_automargin ow_superwide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_forum"><?php echo smarty_function_text(array('key'=>'forum+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+enable_attachments'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>'enableAttachments'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'enableAttachments'),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"></td>
    </tr>
</table>
<div class="clearfix ow_stdmargin">
	<?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_submit ow_right'),$_smarty_tpl);?>

</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>