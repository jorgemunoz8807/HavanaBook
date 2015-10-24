<?php /* Smarty version Smarty-3.1.12, created on 2014-12-18 01:04:16
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\pages_splash_screen.html" */ ?>
<?php /*%%SmartyHeaderCode:1168549298906ac825-07089096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13270bac1cc72f8ea857d939756990dae0ff4ee8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\pages_splash_screen.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168549298906ac825-07089096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5492989095e659_59297242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492989095e659_59297242')) {function content_5492989095e659_59297242($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_stdmargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'splash_screen')); $_block_repeat=true; echo smarty_block_form(array('name'=>'splash_screen'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>"admin+splash_screen_section_label"),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'intro'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'intro'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'intro'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
		<td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
	</tr>
</table>
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_button ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'splash_screen'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>