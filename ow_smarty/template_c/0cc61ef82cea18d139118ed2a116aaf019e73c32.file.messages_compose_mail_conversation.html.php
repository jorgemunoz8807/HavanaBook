<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:10:23
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\mobile\views\controllers\messages_compose_mail_conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:8440548f15ffa35156-54975712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc61ef82cea18d139118ed2a116aaf019e73c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\mobile\\views\\controllers\\messages_compose_mail_conversation.html',
      1 => 1398369522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8440548f15ffa35156-54975712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profileUrl' => 0,
    'avatarUrl' => 0,
    'displayName' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f15ffa689e4_88516803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f15ffa689e4_88516803')) {function content_548f15ffa689e4_88516803($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'composeMessageForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'composeMessageForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="owm_mail_compose_window" id="composeMessageCmp">
    <div class="owm_mail_info_wrap clearfix">
        <div class="owm_mail_info" id="mailboxBackToConversations">
            <div class="owm_mail_back"><a class="owm_nav_next" href="javascript://"></a></div>
            <div class="owm_mail_name_block owm_padding">
                <div class="owm_avatar">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['profileUrl']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['avatarUrl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
"></a>
                </div>
                <div class="owm_profile_online" style="<?php if ($_smarty_tpl->tpl_vars['status']->value=='offline'){?>display: none;<?php }?>" id="onlineStatusBlock"></div>
                <div class="owm_mail_name"><a href="<?php echo $_smarty_tpl->tpl_vars['profileUrl']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
</span></a></div>
            </div>
        </div>
        <div class="owm_mail_subject_block">
            <div class="owm_mail_subject owm_mail_subject_invitation owm_padding">
                <?php echo smarty_function_input(array('name'=>'subject'),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="owm_mail_block owm_mail_compose">
        <div class="owm_field_wrap"><?php echo smarty_function_input(array('name'=>'message'),$_smarty_tpl);?>
</div>
    </div>
    <div class="owm_mail_compose_submit clearfix owm_bg_color_3 comment_submit" id="newMessageForm">
        <div class="owm_mail_btns owm_padding clearfix">
            <div class="owm_float_right owm_mail_btn" id="newmessage-mail-send-btn"><?php echo smarty_function_submit(array('name'=>'sendBtn'),$_smarty_tpl);?>
</div>
            <div id="mailbox_att_btn_c" class="owm_mail_add_cont owm_float_left">
                <a href="javascript://" class="owm_mail_add_icon"><input accept="image/*" type="file" id="newmessage-mail-att-file" name="attachment"></a>
                <span class="owm_mail_add_name" id="newmessage-mail-att-file-prevew"><img style="height: 30px; display: none;" /><span></span></span>
            </div>
       </div>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'composeMessageForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>