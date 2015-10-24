<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:08:50
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\permissions_index.html" */ ?>
<?php /*%%SmartyHeaderCode:19165548e6ce2c947c1-88427006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646c54af7b0e9b836f13d36954210dbd811c0bec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\permissions_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19165548e6ce2c947c1-88427006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6ce2cc8dd0_74194511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6ce2cc8dd0_74194511')) {function content_548e6ce2cc8dd0_74194511($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_superwide ow_automargin ow_stdmargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'privacy_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'privacy_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_first">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'user_approve'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'user_approve'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_join'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_join'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"></td>
	</tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
" style="display:none;">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'guests_can_view'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <div class="clearfix">
                <div style="float: left;width: 50%;"><?php echo smarty_function_input(array('name'=>'guests_can_view'),$_smarty_tpl);?>
</div>
                <div style="float: left;width: 50%;padding-top: 35px;"><?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>
</div>
            </div>
        </td>
		<td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>'guests_can_view'),$_smarty_tpl);?>
</td>
	</tr>
</table>
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_button ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'privacy_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>