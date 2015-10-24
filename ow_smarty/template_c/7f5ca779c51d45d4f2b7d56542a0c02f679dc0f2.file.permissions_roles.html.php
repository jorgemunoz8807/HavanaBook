<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:01:33
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\permissions_roles.html" */ ?>
<?php /*%%SmartyHeaderCode:15532548ea36dbdb384-47635349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f5ca779c51d45d4f2b7d56542a0c02f679dc0f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\permissions_roles.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15532548ea36dbdb384-47635349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAction' => 0,
    'roles' => 0,
    'role' => 0,
    'groupActionList' => 0,
    'colspanForRoles' => 0,
    'groupAction' => 0,
    'labels' => 0,
    'action' => 0,
    'actionName' => 0,
    'roleId' => 0,
    'guestRoleId' => 0,
    'actionId' => 0,
    'perms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ea36dca9aa2_14650619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ea36dca9aa2_14650619')) {function content_548ea36dca9aa2_14650619($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_automargin ow_wide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rolesPageUrl", null); ob_start(); ?><?php echo smarty_function_url_for(array('for'=>'ADMIN_CTRL_Users:roles'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo smarty_function_text(array('key'=>'admin+permissions_go_to_role_management_page','url'=>((string)$_smarty_tpl->tpl_vars['rolesPageUrl']->value)),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
">
<div class="ow_admin_permissions ow_automargin ow_superwide ow_stdmargin ow_center">
<table class="ow_table_2 ow_form ow_automargin ow_superwide">
	<tr class="ow_tr_first">
		<th><?php echo smarty_function_text(array('key'=>'admin+permissions_role_actions_label'),$_smarty_tpl);?>
</th>
		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
		<th width='1'><?php echo smarty_function_text(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>
</th>
		<?php } ?>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['groupAction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupAction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupActionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupAction']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['groupAction']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['groupAction']->key => $_smarty_tpl->tpl_vars['groupAction']->value){
$_smarty_tpl->tpl_vars['groupAction']->_loop = true;
 $_smarty_tpl->tpl_vars['groupAction']->iteration++;
 $_smarty_tpl->tpl_vars['groupAction']->last = $_smarty_tpl->tpl_vars['groupAction']->iteration === $_smarty_tpl->tpl_vars['groupAction']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['groupAction']['last'] = $_smarty_tpl->tpl_vars['groupAction']->last;
?>	
	<tr>
		<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspanForRoles']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['label'])){?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['label'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['groupAction']->value['name'];?>
<?php }?></th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupAction']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['action']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['action']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->iteration++;
 $_smarty_tpl->tpl_vars['action']->last = $_smarty_tpl->tpl_vars['action']->iteration === $_smarty_tpl->tpl_vars['action']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['action']['last'] = $_smarty_tpl->tpl_vars['action']->last;
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['groupAction']['last']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['action']['last']){?>ow_tr_last<?php }?>">
        <?php $_smarty_tpl->tpl_vars['actionName'] = new Smarty_variable($_smarty_tpl->tpl_vars['action']->value->name, null, 0);?>
		<td class="ow_label ow_autowidth"><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value])){?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['actionName']->value;?>
<?php }?></td>
		<?php $_smarty_tpl->tpl_vars['actionId'] = new Smarty_variable($_smarty_tpl->tpl_vars['action']->value->id, null, 0);?>		
		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['roleId'] = new Smarty_variable($_smarty_tpl->tpl_vars['role']->value->id, null, 0);?>		
		<td><?php if (!($_smarty_tpl->tpl_vars['action']->value->availableForGuest==false&&$_smarty_tpl->tpl_vars['roleId']->value==$_smarty_tpl->tpl_vars['guestRoleId']->value)){?><input type="checkbox" name="perm[]" value="<?php echo $_smarty_tpl->tpl_vars['actionId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['roleId']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['perms']->value[$_smarty_tpl->tpl_vars['actionId']->value][$_smarty_tpl->tpl_vars['roleId']->value])){?> checked="checked"<?php }?> /><?php }?></td>
		<?php } ?>
	</tr>
	<?php } ?>
	<?php } ?>
</table>

</div>
<div class="clearfix ow_automargin ow_superwide"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>'admin+permissions_index_save','class'=>"ow_button ow_ic_save ow_positive",'onclick'=>'this.form.submit();'),$_smarty_tpl);?>
</div></div>
</form>
<?php }} ?>