<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:24:30
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\mobile\views\components\chat_conversation.html" */ ?>
<?php /*%%SmartyHeaderCode:25181548f194eb45958-05110470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eab5f0121a64adace7630a372c2dd3666404cd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\mobile\\views\\components\\chat_conversation.html',
      1 => 1402355836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25181548f194eb45958-05110470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultAvatarUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f194ec08082_47260827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f194ec08082_47260827')) {function content_548f194ec08082_47260827($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="owm_chat_window" id="mailboxConversation">
    <div class="owm_chat_info_wrap clearfix">
        <div class="owm_chat_info" id="mailboxBackToConversations">
            <div class="owm_chat_back"><a class="owm_nav_next" href="javascript://"></a></div>
            <div class="owm_chat_name_block owm_padding">
                <div class="owm_avatar">
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" title="#" alt="#"></a>
                </div>
                <div class="owm_profile_online" style="display: none;" id="onlineStatusBlock"></div>
                <div class="owm_chat_name"><a href="#"><span>#</span></a></div>
            </div>
        </div>
    </div>
    <div class="owm_align_center owm_padding" id="mailboxLoadHistoryBtn" style="display: none;"><div class="owm_info owm_box_padding owm_load_earlier"><?php echo smarty_function_text(array('key'=>"mailbox+load_earlier"),$_smarty_tpl);?>
</div></div>
    <div class="owm_preloader" id="mailboxLoadHistoryPreloader"></div>
    <div class="owm_chat_block owm_std_margin_top" id="messageList"></div>
    <div id="mailboxConversationFooter" style="position: absolute; width: 100%; bottom: 0px;">
        <div class="owm_input_wrap" id="newMessageForm">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"newMessageForm",'target'=>"conversation-newmessage-submit-frame")); $_block_repeat=true; echo smarty_block_form(array('name'=>"newMessageForm",'target'=>"conversation-newmessage-submit-frame"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="owm_chat_add_cont owm_float_right">
                <a href="javascript://" class="owm_chat_add_icon"><input accept="image/*" type="file" id="newmessage-att-file" name="attachment"></a>
                
            </div>
            <input type="submit" style="display: none" id="newMessageAttBtn" name="newMessageAttBtn" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"newMessageForm",'target'=>"conversation-newmessage-submit-frame"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <div class="owm_fake_input owm_chat_input_wrap"><input type="text" id="newMessageText" name="newMessageText" value="<?php echo smarty_function_text(array('key'=>'mailbox+text_message_invitation'),$_smarty_tpl);?>
" class="invitation"/></div>
        </div>
        <div class="owm_chat_submit owm_bg_color_3 comment_submit" id="newMessageSubmitForm">
            <div class="owm_chat_btns owm_padding clearfix">
                <div class="owm_float_right owm_chat_btn" id="newmessage-mail-send-btn"><?php echo smarty_function_decorator(array('name'=>'button','type'=>'submit','langLabel'=>'mailbox+add_button','id'=>'newMessageSendBtn','buttonName'=>'newMessageSendBtn'),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
</div>

<div style="display: none">
    <iframe name="conversation-newmessage-submit-frame"></iframe>
</div>


<div id="mailbox_mobile_conversation_prototypes" style="display: none;">
    <div class="owm_chat_time" id="dialogTimeBlockPrototypeBlock">#</div>
</div>

<script type="text/template" id="dialogChatMessagePrototypeBlock">
    <div class="owm_chat_bubble_wrap">
            <div class="owm_chat_bubble"><<?php ?>%= text %<?php ?>></div>
    </div>
</script>

<?php }} ?>