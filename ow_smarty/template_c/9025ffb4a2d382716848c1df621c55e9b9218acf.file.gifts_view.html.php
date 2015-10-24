<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:09:03
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\controllers\gifts_view.html" */ ?>
<?php /*%%SmartyHeaderCode:22536548ea52f243dd8-77081211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9025ffb4a2d382716848c1df621c55e9b9218acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\controllers\\gifts_view.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22536548ea52f243dd8-77081211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noPermission' => 0,
    'gift' => 0,
    'senderUrl' => 0,
    'senderName' => 0,
    'infoString' => 0,
    'senderAvatar' => 0,
    'content' => 0,
    'toolbar' => 0,
    'title' => 0,
    'sendToFriends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ea52f2a3887_87505611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ea52f2a3887_87505611')) {function content_548ea52f2a3887_87505611($_smarty_tpl) {?><?php if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['noPermission']->value)){?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['noPermission']->value;?>
</div>
<?php }else{ ?>
	<div class="ow_wide ow_automargin">
        <div class="ow_stdmargin ow_center"><img src="<?php echo $_smarty_tpl->tpl_vars['gift']->value['imageUrl'];?>
" /></div>
        
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'infoString', null); ob_start(); ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['senderUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['senderName']->value;?>
</a>
            <span class="ow_nowrap ow_tiny ow_ipc_date"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['gift']->value['dto']->sendTimestamp),$_smarty_tpl);?>
</span>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
            <div class="ow_smallmargin"><?php if ($_smarty_tpl->tpl_vars['gift']->value['dto']->message!=''){?><?php echo $_smarty_tpl->tpl_vars['gift']->value['dto']->message;?>
<?php }?></div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_stdmargin','infoString'=>$_smarty_tpl->tpl_vars['infoString']->value,'avatar'=>$_smarty_tpl->tpl_vars['senderAvatar']->value,'content'=>$_smarty_tpl->tpl_vars['content']->value,'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>

        <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['title']->value,'description'=>$_smarty_tpl->tpl_vars['gift']->value['dto']->message,'image'=>$_smarty_tpl->tpl_vars['gift']->value['imageUrl'],'entityType'=>'virtualgifts','entityId'=>$_smarty_tpl->tpl_vars['gift']->value['dto']->id),$_smarty_tpl);?>

	</div>
    
	<?php echo smarty_function_add_content(array('key'=>'virtualgifts.gifts_view.content.between_gift_and_send_button'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['sendToFriends']->value){?>
	<div class="ow_wide ow_automargin ow_center">
        <?php echo smarty_function_decorator(array('name'=>'button','id'=>'send_gift_btn','langLabel'=>'virtualgifts+send_this_gift','class'=>'ow_ic_heart'),$_smarty_tpl);?>

	</div>
	<?php }?>
<?php }?><?php }} ?>