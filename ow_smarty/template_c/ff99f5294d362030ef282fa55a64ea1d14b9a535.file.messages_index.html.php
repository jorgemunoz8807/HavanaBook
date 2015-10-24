<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:11:41
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\controllers\messages_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2193548e5f7d125df1-75246921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff99f5294d362030ef282fa55a64ea1d14b9a535' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\controllers\\messages_index.html',
      1 => 1396396116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2193548e5f7d125df1-75246921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailModeEnabled' => 0,
    'isAuthorizedSendMessage' => 0,
    'chatModeEnabled' => 0,
    'conversationList' => 0,
    'conversationContainer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5f7d136ce9_98881776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5f7d136ce9_98881776')) {function content_548e5f7d136ce9_98881776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value&&$_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value){?>
<div class="ow_content_menu_wrap clearfix">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>"button",'type'=>"button",'class'=>"ow_ic_add",'id'=>"newMessageBtn",'langLabel'=>'mailbox+label_btn_new_message'),$_smarty_tpl);?>

    </div>
</div>
<?php }?>
<div class="ow_mailbox_table ow_alt1 clearfix <?php if (!$_smarty_tpl->tpl_vars['mailModeEnabled']->value||!$_smarty_tpl->tpl_vars['chatModeEnabled']->value){?>ow_mailbox_table_single<?php }?>" id="messagesContainerControl">
    <?php echo $_smarty_tpl->tpl_vars['conversationList']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['conversationContainer']->value;?>

</div><?php }} ?>