<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\components\forum_topics_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:22735548e53105f4889-51920272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff653bc71452274e1598569cb31f0b358aeda203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\components\\forum_topics_widget.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22735548e53105f4889-51920272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topics' => 0,
    'topic' => 0,
    'groups' => 0,
    'sectId' => 0,
    'sections' => 0,
    'postLength' => 0,
    'length' => 0,
    'avatars' => 0,
    'info_string' => 0,
    'content' => 0,
    'toolbars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e531062f143_62109873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e531062f143_62109873')) {function content_548e531062f143_62109873($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info_string', null); ob_start(); ?>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['postUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
    	<?php $_smarty_tpl->tpl_vars["sectId"] = new Smarty_variable($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['topic']->value['groupId']]->sectionId, null, 0);?>
		<div class="ow_smallmargin ow_small">
		    <a href="<?php echo smarty_function_url_for_route(array('for'=>"forum-default"),$_smarty_tpl);?>
#section-<?php echo $_smarty_tpl->tpl_vars['sectId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->tpl_vars['sectId']->value]->name;?>
</a> &raquo; <a href="<?php echo smarty_function_url_for_route(array('for'=>"group-default:[groupId=>".((string)$_smarty_tpl->tpl_vars['topic']->value['groupId'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['topic']->value['groupId']]->name;?>
</a>
		</div>
	    <div class="ow_smallmargin">
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'length', null); ob_start(); ?><?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['topic']->value['lastPost']['text'], $tmp);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['topic']->value['lastPost']['text'],$_smarty_tpl->tpl_vars['postLength']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['length']->value>$_smarty_tpl->tpl_vars['postLength']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['postUrl'];?>
" class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'base+more'),$_smarty_tpl);?>
</a><?php }?>
	    </div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['topic']->value['lastPost']['userId']],'infoString'=>$_smarty_tpl->tpl_vars['info_string']->value,'content'=>$_smarty_tpl->tpl_vars['content']->value,'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value[$_smarty_tpl->tpl_vars['topic']->value['lastPost']['postId']]),$_smarty_tpl);?>

	
<?php }
if (!$_smarty_tpl->tpl_vars['topic']->_loop) {
?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'forum+no_topics'),$_smarty_tpl);?>
, <a href="<?php echo smarty_function_url_for_route(array('for'=>'add-topic-default'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'forum+add_new'),$_smarty_tpl);?>
</a></div>
<?php } ?><?php }} ?>