<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:11:41
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\components\conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:8888548e5f7d0936c0-59585456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef932bc0e2c336cc1d84d0a793be698bca2ef39a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\components\\conversation.html',
      1 => 1413847694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8888548e5f7d0936c0-59585456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultAvatarUrl' => 0,
    'isAuthorizedReplyToMessage' => 0,
    'mailbox_message' => 0,
    'enableAttachments' => 0,
    'isAuthorizedReplyToChatMessage' => 0,
    'replyToMessageActionPromotedText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5f7d0f5806_23668743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5f7d0f5806_23668743')) {function content_548e5f7d0f5806_23668743($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_mailbox_right ow_mailbox_right_loading" id="conversationContainer">

    <div class="ow_mailbox_right_preloading"><div class="ow_mailbox_no_content"><?php echo smarty_function_text(array('key'=>"mailbox+conversation_empty"),$_smarty_tpl);?>
</div></div>

    <!--<div class="ow_mailbox_no_content"><?php echo smarty_function_text(array('key'=>"mailbox+conversation_not_found"),$_smarty_tpl);?>
</div>-->

    <div class="ow_mailbox_cap clearfix" id="conversationCapBlock">
        <div class="ow_mailbox_avatar" id="conversationAvatarBlock">
            <div class="ow_avatar">
                <a href="javascript://" id="conversationOpponentProfileUrl"><img style="max-width: 100%;" alt="" src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" id="conversationOpponentAvatar" /></a>
            </div>
        </div>
        <div class="ow_mailbox_username">
            <span class="ow_mailbox_username_text"><div class="ow_chat_status" id="conversationOpponentProfileStatus"></div><span id="conversationOpponentDisplayname"></span></span>
            <span class="ow_mailbox_switch_to_chat ow_small" id="conversationSwitchToChatBlock"><a class="ow_lbutton" href="javascript://" id="conversationSwitchToChatBtn"><?php echo smarty_function_text(array('key'=>"mailbox+switch_to_chat_mode"),$_smarty_tpl);?>
</a></span>
            <div class="ow_mailbox_subject_block" id="conversationSubjectBlock">
                <span class="ow_mailbox_subject_text" id="conversationSubject"></span>
            </div>
        </div>
        <div class="ow_mailbox_convers_actions clearfix">
            <a href="javascript://" class="ow_miniic_control" id="conversationSettingsBtn">
                <span></span>
            </a>
            <div class="ow_tooltip  ow_newsfeed_context_tooltip ow_small ow_tooltip_top_right ow_hidden" style="opacity: 1; top: 18px;" id="conversationSettingsBlock">
                <div class="ow_tooltip_tail">
                    <span></span>
                </div>
                <div class="ow_tooltip_body">
                    <ul class="ow_context_action_list ow_border">
                        <li><a href="javascript://" id="conversationMarkUnreadBtn"><?php echo smarty_function_text(array('key'=>'mailbox+mark_unread_conversation_title'),$_smarty_tpl);?>
</a></li>
                        <li><a href="javascript://" id="conversationDeleteBtn"><?php echo smarty_function_text(array('key'=>'mailbox+delete_conversation_title'),$_smarty_tpl);?>
</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="ow_mailbox_log_wrap">
        <div class="ow_mailbox_date_cap sticky ow_alt2 clearfix" id="conversationMessageGroupStickyBlock" style="display: none;">
            <span class="ow_mailbox_converstion_date ow_remark ow_small ow_left" id="conversationStickyDateCap"></span>
        </div>
        <div class="ow_mailbox_log" id="conversationLog"></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['isAuthorizedReplyToMessage']->value){?>
    <!-- Mail mode -->
    <div class="ow_mailbox_form ow_alt2 ow_hidden" id="conversationMessageFormBlock">
        <div class="form_auto_click">
            <div class="ow_mailbox_message_input ow_smallmargin">
                <textarea name="fake_mailbox_message" id="fake_conversationTextarea" placeholder="<?php echo smarty_function_text(array('key'=>'mailbox+write_reply'),$_smarty_tpl);?>
"></textarea>
                <?php echo $_smarty_tpl->tpl_vars['mailbox_message']->value;?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
            
            <div class="mailboxConversationAttachmentsPreviewContainer">
                <div class="ow_file_attachment_preview clearfix"></div>
            </div>
            <?php }?>
            <div class="clearfix">
                <span class="ow_attachment_btn"> <?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'id'=>"conversationSendMessageBtn",'langLabel'=>"mailbox+add_button"),$_smarty_tpl);?>
 </span>
                <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
                <span class="ow_attachment_icons">
                    <div id="nfa-feed1" class="ow_attachments">
                        <span class="buttons clearfix">
                            <a class="attach" href="javascript://" id="conversationAttachmentsBtn"></a>
                        </span>
                    </div>
                </span>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['isAuthorizedReplyToChatMessage']->value){?>
    <!-- Chat mode -->
    <div class="ow_chat_message_block ow_hidden" id="conversationChatFormBlock">
        <div class="ow_chat_message" id="dialogMessageFormBlock">
            <span class="ow_attachment_icons">
                <div class="ow_attachments clearfix">
                    <a class="attach" href="javascript://" id="dialogAttachmentsBtn"></a>
                </div>
            </span>
            <textarea id="dialogTextarea" class="invitation"></textarea>
            <a href="javascript://" class="ow_chat_attach_btn"></a>
        </div>
    </div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['replyToMessageActionPromotedText']->value!=''){?>
            <div class="ow_smallmargin ow_anno ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['replyToMessageActionPromotedText']->value;?>
</div>
        <?php }?>

    <div class="ow_mailbox_form ow_alt2" id="conversationUserIsUnreachable" style="display:none;">
        <span style="padding: 8px; text-align: center; display: block;" id="conversationUserIsUnreachableText"><?php echo smarty_function_text(array('key'=>'mailbox+user_is_unreachable'),$_smarty_tpl);?>
</span>
    </div>
</div>

<div id="mailbox_conversation_prototypes" style="display: none;">
    <div class="ow_mailbox_grouped_messages conversationMessageGroup" id="conversationMessageGroupPrototypeBlock">
        <div class="ow_mailbox_date_cap ow_alt2 clearfix">
            <span class="ow_mailbox_converstion_date ow_remark ow_small ow_left" id="conversationMessageGroupDate">#</span>
        </div>
    </div>

    <div class="ow_mailbox_log_message clearfix" id="conversationMessagePrototypeBlock">
        <div class="ow_mailbox_avatar">
            <div class="ow_avatar">
                <a href="javascript://" id="conversationMessageAvatarProfileUrl"><img src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" alt="" style="max-width: 100%;" id="conversationMessageAvatarUrl"></a>
            </div>
        </div>
        <div class="ow_mailbox_convers_info_body">
            <span class="ow_mailbox_message_date ow_remark" id="conversationMessageDateTime">#</span>
            <div class="ow_mailbox_message_header">
                <a href="javascript://" id="conversationMessageProfile">#</a>
            </div>
            <div class="ow_mailbox_message_content" id="conversationMessageText">#</div>
        </div>
    </div>

    <div class="ow_mailbox_log_action clearfix" id="conversationActionPrototypeBlock">
        <div class="ow_mailbox_avatar">
            <div class="ow_avatar">
                <a href="javascript://" id="conversationActionAvatarProfileUrl"><img src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" alt="" style="max-width: 100%;" id="conversationActionAvatarUrl"></a>
            </div>
        </div>
        <div class="ow_mailbox_convers_info_body">
            <span class="ow_mailbox_message_date ow_remark" id="conversationActionDateTime">#</span>
            <div class="ow_mailbox_message_header">
                <a href="javascript://" id="conversationActionProfile">#</a><span class="ow_small" id="conversationActionText">#</span>
            </div>
        </div>
    </div>
</div><?php }} ?>