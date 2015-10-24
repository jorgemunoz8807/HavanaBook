<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:57:46
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\permissions_moderators.html" */ ?>
<?php /*%%SmartyHeaderCode:28110548e5c3adf6342-75684700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85b4e10f8aa0f0b7242cb55b7f51963d2d1d347' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\permissions_moderators.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28110548e5c3adf6342-75684700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAction' => 0,
    'moderators' => 0,
    'moderator' => 0,
    'userId' => 0,
    'avatars' => 0,
    'groups' => 0,
    'group' => 0,
    'groupName' => 0,
    'groupLabels' => 0,
    'superModeratorId' => 0,
    'myModeratorId' => 0,
    'groupId' => 0,
    'adminGroupId' => 0,
    'moderatorId' => 0,
    'perms' => 0,
    'deleteModerUrls' => 0,
    'addFormAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c3ae62491_38185398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c3ae62491_38185398')) {function content_548e5c3ae62491_38185398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
">
  <div class="ow_admin_permissions ow_stdmargin ow_center">
	<div class="ow_automargin ow_stdmargin ow_wide ow_admin_permissions_overflow">
		<table class="ow_table_2 ow_form">
			<tr class="ow_tr_first">
				<th></th>
				<?php  $_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moderator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moderators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->key => $_smarty_tpl->tpl_vars['moderator']->value){
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_variable($_smarty_tpl->tpl_vars['moderator']->value->id, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['moderator']->value->userId, null, 0);?>
					<th width="1">
						<?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

					</th>
				<?php } ?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['groupName'] = new Smarty_variable($_smarty_tpl->tpl_vars['group']->value->name, null, 0);?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
">
					<td class="ow_txtleft"><?php echo $_smarty_tpl->tpl_vars['groupLabels']->value[$_smarty_tpl->tpl_vars['groupName']->value];?>
</td>
					<?php  $_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moderator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moderators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->key => $_smarty_tpl->tpl_vars['moderator']->value){
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['groupId'] = new Smarty_variable($_smarty_tpl->tpl_vars['group']->value->id, null, 0);?>
						<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_variable($_smarty_tpl->tpl_vars['moderator']->value->id, null, 0);?>
						<td><input <?php if ($_smarty_tpl->tpl_vars['moderator']->value->id==$_smarty_tpl->tpl_vars['superModeratorId']->value||($_smarty_tpl->tpl_vars['myModeratorId']->value!=$_smarty_tpl->tpl_vars['superModeratorId']->value&&$_smarty_tpl->tpl_vars['groupId']->value==$_smarty_tpl->tpl_vars['adminGroupId']->value)){?> disabled="disabled"<?php }?> type="checkbox" name="perm[]" value="<?php echo $_smarty_tpl->tpl_vars['moderatorId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['perms']->value[$_smarty_tpl->tpl_vars['moderatorId']->value][$_smarty_tpl->tpl_vars['groupId']->value])||$_smarty_tpl->tpl_vars['moderator']->value->id==$_smarty_tpl->tpl_vars['superModeratorId']->value){?> checked="checked"<?php }?> /></td>
					<?php } ?>
				</tr>
			<?php } ?>
			<tr class="ow_tr_last">
				<td></td>
				<?php  $_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moderator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moderators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->key => $_smarty_tpl->tpl_vars['moderator']->value){
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_variable($_smarty_tpl->tpl_vars['moderator']->value->id, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['moderator']->value->userId, null, 0);?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['moderator']->value->id!==$_smarty_tpl->tpl_vars['myModeratorId']->value&&$_smarty_tpl->tpl_vars['moderator']->value->id!==$_smarty_tpl->tpl_vars['superModeratorId']->value){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['deleteModerUrls']->value[$_smarty_tpl->tpl_vars['userId']->value];?>
" onclick="return confirm('<?php echo smarty_function_text(array('key'=>"base+are_you_sure"),$_smarty_tpl);?>
');" style="width:16px; height:16px; display:block; margin:0 auto;background-repeat:no-repeat;background-position: 50% 50%;" class="ow_ic_delete"></a>
						<?php }?>
					</td>
				<?php } ?>
			</tr>
		</table>
	</div>
    <div class="clearfix ow_automargin ow_wide"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+permissions_index_save','class'=>'ow_button ow_ic_save ow_positive','onclick'=>'this.form.submit();'),$_smarty_tpl);?>
</div></div>
  </div>
</form>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['addFormAction']->value;?>
">
<div class="ow_wide ow_automargin">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'admin+permissions_moders_username'),$_smarty_tpl);?>
 <input type="text" name="username" style="width: 170px" />
    	<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+permissions_moders_make_moderator','type'=>"submit"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</form><?php }} ?>