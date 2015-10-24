<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:19:01
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\components\blog_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:32173548e5325a24ea6-66722101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3491282e09806b493ff207e47c76d1fad7e1ae65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\components\\blog_widget.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32173548e5325a24ea6-66722101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'post' => 0,
    'dto' => 0,
    'commentInfo' => 0,
    'moreLink' => 0,
    'info_string' => 0,
    'content' => 0,
    'userId' => 0,
    'avatars' => 0,
    'tbars' => 0,
    'addnewurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5325a68489_80132852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5325a68489_80132852')) {function content_548e5325a68489_80132852($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.ow_ipc .ow_ipc_info .clearfix .ow_ipc_toolbar{
    white-space: normal;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		
		<?php $_smarty_tpl->tpl_vars["dto"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['dto'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->getAuthorId(), null, 0);?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info_string', null); ob_start(); ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['dto']->getTitle());?>
</a>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "moreLink", null); ob_start(); ?><a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo smarty_function_text(array('key'=>'blogs+more'),$_smarty_tpl);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
			<?php if ($_smarty_tpl->tpl_vars['commentInfo']->value[$_smarty_tpl->tpl_vars['dto']->value->id]>0){?>
				<div class="ow_small ow_smallmargin">
					<span class="ow_txt_value">
						<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value[$_smarty_tpl->tpl_vars['dto']->value->id];?>

					</span>
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
">
						<?php echo smarty_function_text(array('key'=>'blogs+toolbar_comments'),$_smarty_tpl);?>

					</a>
				</div>
			<?php }?>
			<div class="ow_smallmargin"><?php if ($_smarty_tpl->tpl_vars['post']->value['truncated']){?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']);?>
... <?php echo $_smarty_tpl->tpl_vars['moreLink']->value;?>
<?php }else{ ?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']);?>
<?php }?></div>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','infoString'=>$_smarty_tpl->tpl_vars['info_string']->value,'content'=>$_smarty_tpl->tpl_vars['content']->value,'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value],'toolbar'=>$_smarty_tpl->tpl_vars['tbars']->value[$_smarty_tpl->tpl_vars['dto']->value->id]),$_smarty_tpl);?>

	<?php } ?>
<?php }else{ ?>
	<div class="ow_nocontent">
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'addnewurl', null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>'post-save-new'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo smarty_function_text(array('key'=>"blogs+index_widget_empty"),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['addnewurl']->value;?>
"><?php echo smarty_function_text(array('key'=>'blogs+add_new'),$_smarty_tpl);?>
</a>
	</div>
<?php }?><?php }} ?>