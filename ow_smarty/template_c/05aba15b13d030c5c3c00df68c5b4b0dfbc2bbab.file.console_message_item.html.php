<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:02:06
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\components\console_message_item.html" */ ?>
<?php /*%%SmartyHeaderCode:23056548e5d3e0d8032-95985475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05aba15b13d030c5c3c00df68c5b4b0dfbc2bbab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\components\\console_message_item.html',
      1 => 1404509014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23056548e5d3e0d8032-95985475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'url' => 0,
    'convId' => 0,
    'opponentId' => 0,
    'avatarUrl' => 0,
    'displayName' => 0,
    'unreadMessageCount' => 0,
    'dateLabel' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5d3e123124_88267388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5d3e123124_88267388')) {function content_548e5d3e123124_88267388($_smarty_tpl) {?><div class="clearfix console_list_ipc_item ow_cursor_pointer <?php if ($_smarty_tpl->tpl_vars['mode']->value=='mail'){?>console_item_with_url<?php }?> <?php if ($_smarty_tpl->tpl_vars['mode']->value=='chat'){?>consoleChatItem<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-convid="<?php echo $_smarty_tpl->tpl_vars['convId']->value;?>
" data-opponentid="<?php echo $_smarty_tpl->tpl_vars['opponentId']->value;?>
" id="mailboxConsoleMessageItem<?php echo $_smarty_tpl->tpl_vars['convId']->value;?>
">
    <div class="ow_avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['avatarUrl']->value;?>
">
    </div>
    <div class="ow_console_invt_cont ow_console_invt_no_img">
        <div class="ow_console_invt_txt"><div class="ow_console_mailbox_cont" target="_blank">
            <div class="ow_console_mailbox_title"><?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
<?php if ($_smarty_tpl->tpl_vars['unreadMessageCount']->value>0){?> (<?php echo $_smarty_tpl->tpl_vars['unreadMessageCount']->value;?>
)<?php }?> <div id="conversationLastMessageDate" class="ow_mailbox_convers_info_date"><?php echo $_smarty_tpl->tpl_vars['dateLabel']->value;?>
</div></div>
            <div class="ow_console_mailbox_txt ow_remark">
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            </div>
        </div></div>
        <div class="ow_console_invt_toolbar">
        </div>
    </div>
</div><?php }} ?>