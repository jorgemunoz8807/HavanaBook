<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:51:55
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\friends\views\controllers\list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:28375548e850b2eccf3-39241116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb622d3bfbc3500f7c35e7eba6c15bbc24c9b3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\friends\\views\\controllers\\list_index.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28375548e850b2eccf3-39241116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'list' => 0,
    'item' => 0,
    'dto' => 0,
    'id' => 0,
    'questionList' => 0,
    'onlineInfo' => 0,
    'case' => 0,
    'toolbar' => 0,
    'avatars' => 0,
    'fields' => 0,
    'activity' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e850b443bf1_34834572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e850b443bf1_34834572')) {function content_548e850b443bf1_34834572($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_question_value_lang')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.question_value_lang.php';
if (!is_callable('smarty_function_age')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.age.php';
if (!is_callable('smarty_function_online_now')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.online_now.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
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

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "fields", null); ob_start(); ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['id']->value]['sex'])){?><?php echo smarty_function_question_value_lang(array('name'=>'sex','value'=>$_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['id']->value]['sex']),$_smarty_tpl);?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['id']->value]['birthdate'])){?><?php echo smarty_function_age(array('dateTime'=>$_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['id']->value]['birthdate']),$_smarty_tpl);?>
<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "activity", null); ob_start(); ?>
            <?php if (empty($_smarty_tpl->tpl_vars['onlineInfo']->value)||empty($_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value])){?>
            <?php }else{ ?>
                <?php if ((!empty($_smarty_tpl->tpl_vars['onlineInfo']->value)&&$_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value])){?><?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['dto']->value->id),$_smarty_tpl);?>
<?php }else{ ?>Activity: <?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['dto']->value->activityStamp),$_smarty_tpl);?>
<?php }?>
            <?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'toolbar', null); ob_start(); ?>
			<?php if ($_smarty_tpl->tpl_vars['case']->value=='sent-requests'){?>
				<div class=" ow_tiny" style="margin-left: 53px;">
					<a href="<?php echo smarty_function_url_for(array('for'=>"FRIENDS_CTRL_Action:cancel:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'friends+cancel_request'),$_smarty_tpl);?>
</a>
				</div>
			<?php }elseif($_smarty_tpl->tpl_vars['case']->value=='got-requests'){?>
				<div class="ow_tiny" style="margin-left: 53px;">
					<a href="<?php echo smarty_function_url_for(array('for'=>"FRIENDS_CTRL_Action:accept:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'friends+accept_request'),$_smarty_tpl);?>
</a> &middot; <a href="<?php echo smarty_function_url_for(array('for'=>"FRIENDS_CTRL_Action:ignore:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'friends+ignore_request'),$_smarty_tpl);?>
</a>
				</div>
			<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php echo smarty_function_decorator(array('name'=>"user_list_item",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value,'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value],'userUrl'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]['url'],'displayName'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]['title'],'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'activity'=>$_smarty_tpl->tpl_vars['activity']->value,'set_class'=>'ow_item_set3'),$_smarty_tpl);?>


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

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

<?php }else{ ?>
	<center><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</center>
<?php }?><?php }} ?>