<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:20:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\friends\mobile\views\components\console_items.html" */ ?>
<?php /*%%SmartyHeaderCode:24817548f1844c31147-78573666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a149eb85abf449cf9b1880c80988e41e625c3f18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\friends\\mobile\\views\\components\\console_items.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24817548f1844c31147-78573666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'reqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1844c45ba3_53167779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1844c45ba3_53167779')) {function content_548f1844c45ba3_53167779($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['reqId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['reqId']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<li class="owm_sidebar_msg_item<?php if (!$_smarty_tpl->tpl_vars['item']->value['viewed']){?> owm_sidebar_msg_item_new<?php }?> clearfix" data-reqid="<?php echo $_smarty_tpl->tpl_vars['reqId']->value;?>
">
    <div class="owm_sidebar_msg_avatar">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['item']->value['avatar']),$_smarty_tpl);?>

    </div>
    <div class="owm_sidebar_msg_control">
        <a href="javascript://" class="owm_lbutton owm_friend_request_accept" data-rid="<?php echo $_smarty_tpl->tpl_vars['item']->value['userId'];?>
">
            <span class="owm_lbutton_ico"><span><?php echo smarty_function_text(array('key'=>'friends+accept_request'),$_smarty_tpl);?>
</span></span>
        </a>
        <a href="javascript://" class="owm_lbutton owm_friend_request_ignore" data-rid="<?php echo $_smarty_tpl->tpl_vars['item']->value['userId'];?>
">
            <span class="owm_lbutton_ico"><span><?php echo smarty_function_text(array('key'=>'friends+ignore_request'),$_smarty_tpl);?>
</span></span>
        </a>
    </div>
    <div class="owm_sidebar_msg_info">
        <div class="owm_sidebar_msg_string">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

        </div>
    </div>
</li>
<?php } ?><?php }} ?>