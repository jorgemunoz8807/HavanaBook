<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:10:47
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\mobile\views\components\mail_conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:22621548f16171783c5-87191336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb4179bbac999081eb8d9e99c75648cf256a11a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\mobile\\views\\components\\mail_conversation.html',
      1 => 1398366922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22621548f16171783c5-87191336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultAvatarUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f16171aaa34_43570066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f16171aaa34_43570066')) {function content_548f16171aaa34_43570066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="owm_mail_window" id="mailboxMailConversation">
    <div class="owm_mail_info_wrap clearfix">
        <div class="owm_mail_info" id="mailboxBackToConversations">
            <div class="owm_mail_back"><a class="owm_nav_next" href="javascript://"></a></div>
            <div class="owm_mail_name_block owm_padding">
                <div class="owm_avatar">
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" title="#" alt="#"></a>
                </div>
                <div class="owm_profile_online" style="display: none;" id="onlineStatusBlock"></div>
                <div class="owm_mail_name"><a href="javascript://"><span></span></a></div>
            </div>
        </div>
        <div class="owm_mail_subject_block owm_bg_color_1">
            <div class="owm_mail_subject owm_padding" id="mailboxPreviewText"></div>
            <!--<span class="owm_mail_theme_prefix">RE:</span>-->
        </div>
    </div>
<div class="owm_align_center owm_padding" id="mailboxLoadHistoryBtn" style="display: none;"><div class="owm_info owm_box_padding owm_load_earlier"><?php echo smarty_function_text(array('key'=>"mailbox+load_earlier"),$_smarty_tpl);?>
</div></div>
<div class="owm_preloader" id="mailboxLoadHistoryPreloader"></div>
<div class="owm_mail_block owm_std_margin_top" id="messageList"></div>
    <div id="mailboxConversationFooter" style="position: absolute; width: 100%; bottom: 0px;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"newMailMessageForm",'target'=>"conversation-newmessage-submit-frame")); $_block_repeat=true; echo smarty_block_form(array('name'=>"newMailMessageForm",'target'=>"conversation-newmessage-submit-frame"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="owm_mail_input_wrap owm_field_wrap" id="newMessageForm">
            <?php echo smarty_function_input(array('name'=>'newMessageText','class'=>'invitation'),$_smarty_tpl);?>

        </div>
        <div class="owm_mail_submit clearfix owm_bg_color_3 comment_submit" id="newMessageSubmitForm">
            <div class="owm_mail_btns owm_padding clearfix">
                <div id="mailbox_att_btn_c" class="owm_mail_add_cont owm_float_left">
                    <a href="javascript://" class="owm_mail_add_icon"><input accept="image/*" type="file" id="newmessage-mail-att-file" name="attachment"></a>
                    <span class="owm_mail_add_name" id="newmessage-mail-att-file-prevew"><img style="height: 30px; display: none;" /><span></span></span>
                </div>
                <div class="owm_float_right owm_mail_btn" id="newmessage-mail-send-btn"><?php echo smarty_function_submit(array('name'=>'newMessageSendBtn'),$_smarty_tpl);?>
</div>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"newMailMessageForm",'target'=>"conversation-newmessage-submit-frame"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>

<div style="display: none">
    <iframe name="conversation-newmessage-submit-frame"></iframe>
</div>


<div id="mailbox_mobile_conversation_prototypes" style="display: none;">
    <div class="owm_mail_time" id="dialogTimeBlockPrototypeBlock">#</div>

    <div class="owm_mail_attach" id="mailboxMailMessageAttachmentPrototypeBlock"><a href="javascript://"> <span class="owm_mail_attach_size">(...)</span><span class="owm_mail_attach_ico"></span></a></div>
</div>

<script type="text/template" id="dialogMailMessagePrototypeBlock">
    <div class="owm_mail_msg_wrap clearfix">
        <div class="owm_mail_msg">
            <div class="owm_avatar">
                <a href="<<?php ?>%= profileUrl %<?php ?>>"><img src="<<?php ?>%= avatarUrl %<?php ?>>" title="<<?php ?>%= displayName %<?php ?>>" alt="<<?php ?>%= displayName %<?php ?>>"></a>
            </div>
            <div class="owm_mail_msg_cont">
                <div class="owm_mail_txt"><<?php ?>%= text %<?php ?>></div>
            </div>
        </div>
    </div>
</script>
<?php }} ?>