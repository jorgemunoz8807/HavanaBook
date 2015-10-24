<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:51:42
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\users.html" */ ?>
<?php /*%%SmartyHeaderCode:29896548e5ace9e6199-17816664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eeeafb932c301e65203225d9bb29a69fe4509c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\users.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29896548e5ace9e6199-17816664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'dto' => 0,
    'fields' => 0,
    'id' => 0,
    'field' => 0,
    'showPresenceList' => 0,
    'onlineInfo' => 0,
    'usernameList' => 0,
    'displayNameList' => 0,
    'avatars' => 0,
    'username' => 0,
    'name' => 0,
    'contextMenuList' => 0,
    '_fields' => 0,
    'activity' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5acea5bdb6_79556078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5acea5bdb6_79556078')) {function content_548e5acea5bdb6_79556078($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_online_now')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.online_now.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>

<div class="ow_user_list ow_full ow_stdmargin">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['first'] = $_smarty_tpl->tpl_vars['item']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
		<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['dto'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->id, null, 0);?>

		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['first']){?>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
		<?php }?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_fields", null); ob_start(); ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value)){?>
				<?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
<br />
				<?php } ?>
			<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "activity", null); ob_start(); ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['showPresenceList']->value)&&!empty($_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value])&&$_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value]){?>
                <?php if ($_smarty_tpl->tpl_vars['onlineInfo']->value){?>
                    <?php if ((!empty($_smarty_tpl->tpl_vars['onlineInfo']->value)&&$_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value])||empty($_smarty_tpl->tpl_vars['onlineInfo']->value)){?><?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['dto']->value->id),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
: <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['dto']->value->activityStamp),$_smarty_tpl);?>
</span><?php }?>
                <?php }?>
            <?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->tpl_vars["username"] = new Smarty_variable($_smarty_tpl->tpl_vars['usernameList']->value[$_smarty_tpl->tpl_vars['id']->value], null, 0);?>

		<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable($_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value], null, 0);?>

		<?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value],'username'=>$_smarty_tpl->tpl_vars['username']->value,'displayName'=>$_smarty_tpl->tpl_vars['name']->value,'contextMenu'=>$_smarty_tpl->tpl_vars['contextMenuList']->value[$_smarty_tpl->tpl_vars['id']->value],'fields'=>$_smarty_tpl->tpl_vars['_fields']->value,'activity'=>$_smarty_tpl->tpl_vars['activity']->value,'set_class'=>'ow_item_set3'),$_smarty_tpl);?>


		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['iteration']%3==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
			</div>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
		<?php }?>

		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
		  </div>
		<?php }?>

	<?php } ?>

</div>

<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
<?php }else{ ?>
	<center><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</center>
<?php }?><?php }} ?>