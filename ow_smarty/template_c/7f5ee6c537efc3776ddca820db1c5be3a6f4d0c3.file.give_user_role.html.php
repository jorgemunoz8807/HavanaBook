<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:58:40
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\give_user_role.html" */ ?>
<?php /*%%SmartyHeaderCode:24938548e5c70bfe720-48226150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f5ee6c537efc3776ddca820db1c5be3a6f4d0c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\give_user_role.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24938548e5c70bfe720-48226150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c70c34086_77452088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c70c34086_77452088')) {function content_548e5c70c34086_77452088($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"give-role")); $_block_repeat=true; echo smarty_block_form(array('name'=>"give-role"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_2 ow_form ow_stdmargin ow_center">
<tr class="ow_tr_first">
	<th></th>
	<th>User Role</th>
</th>
<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['role']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['role']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->iteration++;
 $_smarty_tpl->tpl_vars['role']->last = $_smarty_tpl->tpl_vars['role']->iteration === $_smarty_tpl->tpl_vars['role']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['role']['last'] = $_smarty_tpl->tpl_vars['role']->last;
?>
<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['role']['last']){?>ow_tr_last<?php }?>">
	<td><?php echo smarty_function_input(array('name'=>"roles[".((string)$_smarty_tpl->tpl_vars['role']->value->id)."]"),$_smarty_tpl);?>
</td>
	<td><?php echo smarty_function_label(array('name'=>"roles[".((string)$_smarty_tpl->tpl_vars['role']->value->id)."]"),$_smarty_tpl);?>
</td>
</tr>
<?php } ?>
</table>

	<div class="clearfix ow_smallmargin"><div class="ow_right">
		<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

	</div></div>	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"give-role"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>