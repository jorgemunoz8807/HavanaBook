<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:04:54
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\language_value_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:6262548e7a0619afa3-41227001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4405081ef0302bec9614618a5e2fbedeaf5bd4d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\language_value_edit.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6262548e7a0619afa3-41227001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'lang' => 0,
    'prefix' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e7a0624a654_27828075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e7a0624a654_27828075')) {function content_548e7a0624a654_27828075($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_automargin">

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"lang-values-edit")); $_block_repeat=true; echo smarty_block_form(array('name'=>"lang-values-edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_smallmargin">
			<tr class="ow_center ow_tr_first">
				<th>Language</th>
				<th>Translation</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lang']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['lang']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->iteration++;
 $_smarty_tpl->tpl_vars['lang']->last = $_smarty_tpl->tpl_vars['lang']->iteration === $_smarty_tpl->tpl_vars['lang']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lang']['last'] = $_smarty_tpl->tpl_vars['lang']->last;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lang']['last']){?>ow_tr_last<?php }?>">
					<td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->getLabel();?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value->getTag();?>
)</td>
					<td class="ow_value"><?php echo smarty_function_input(array('name'=>"lang[".((string)$_smarty_tpl->tpl_vars['lang']->value->id)."][".((string)$_smarty_tpl->tpl_vars['prefix']->value)."][".((string)$_smarty_tpl->tpl_vars['key']->value)."]"),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		</table>
			<div class="clearfix ow_smallmargin"><div class="ow_right">
					<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

			</div></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"lang-values-edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div><?php }} ?>