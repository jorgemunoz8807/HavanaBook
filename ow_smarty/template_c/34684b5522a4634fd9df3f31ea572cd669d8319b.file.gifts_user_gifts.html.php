<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:01:23
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\controllers\gifts_user_gifts.html" */ ?>
<?php /*%%SmartyHeaderCode:5751548f13e3e2d4c0-68618570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34684b5522a4634fd9df3f31ea572cd669d8319b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\controllers\\gifts_user_gifts.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5751548f13e3e2d4c0-68618570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gifts' => 0,
    'gift' => 0,
    'senderId' => 0,
    'avatars' => 0,
    'infoString' => 0,
    'content' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f13e3e79b38_68008293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f13e3e79b38_68008293')) {function content_548f13e3e79b38_68008293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_column ow_automargin">
<?php if ($_smarty_tpl->tpl_vars['gifts']->value){?>
<?php  $_smarty_tpl->tpl_vars['gift'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gift']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gifts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gift']->key => $_smarty_tpl->tpl_vars['gift']->value){
$_smarty_tpl->tpl_vars['gift']->_loop = true;
?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'giftId', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['gift']->value['dto']->id;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'senderId', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['gift']->value['dto']->senderId;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'infoString', null); ob_start(); ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['senderId']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['senderId']->value]['title'];?>
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
    <div class="clearfix">
        <div class="ow_gift_image">
            <a href="<?php echo smarty_function_url_for_route(array('for'=>"virtual_gifts_view_gift:[giftId=>".((string)$_smarty_tpl->tpl_vars['gift']->value['dto']->id)."]"),$_smarty_tpl);?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['gift']->value['imageUrl'];?>
" />
            </a>
        </div>
        <div class="ow_gift_message"><?php if ($_smarty_tpl->tpl_vars['gift']->value['dto']->message!=''){?><?php echo $_smarty_tpl->tpl_vars['gift']->value['dto']->message;?>
<?php }?></div>
    </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_stdmargin','infoString'=>$_smarty_tpl->tpl_vars['infoString']->value,'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['senderId']->value],'content'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>

<?php } ?>
<?php }else{ ?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'virtualgifts+no_gifts'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

</div><?php }} ?>