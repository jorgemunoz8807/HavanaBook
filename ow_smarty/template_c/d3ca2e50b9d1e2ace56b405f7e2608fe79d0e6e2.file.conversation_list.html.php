<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:11:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\components\conversation_list.html" */ ?>
<?php /*%%SmartyHeaderCode:7978548e5f7cd97e98-22940426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ca2e50b9d1e2ace56b405f7e2608fe79d0e6e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\components\\conversation_list.html',
      1 => 1416595422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7978548e5f7cd97e98-22940426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'singleMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5f7cdf99c4_12849685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5f7cdf99c4_12849685')) {function content_548e5f7cdf99c4_12849685($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_mailbox_left <?php if ($_smarty_tpl->tpl_vars['singleMode']->value){?>ow_mailbox_single_mode<?php }?> ow_mailbox_left_loading" id="conversationListControl">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'conversationSearchForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'conversationSearchForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_mailbox_search">
        <?php echo smarty_function_input(array('name'=>'conversation_search','id'=>"conversation_search"),$_smarty_tpl);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'conversationSearchForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="ow_mailbox_conv_options active ow_small ow_alt2 clearfix" id="openBulkOptionsBtn">
        <div class="ow_mailbox_conv_options_inner">
            <span class="ow_mailbox_conv_options_label" ><?php echo smarty_function_text(array('key'=>'mailbox+bulk_options'),$_smarty_tpl);?>
</span>
            <input type="checkbox" id="mailboxConvOptionSelectAll"> <span class="ow_mailbox_conv_options_checklab"><?php echo smarty_function_text(array('key'=>'mailbox+check_all'),$_smarty_tpl);?>
</span>
            <div class="ow_context_action_block clearfix ow_context_action_value_block ow_profile_toolbar_group">
                <div class="ow_context_action">
                    <a href="javascript://" class="ow_context_action_value" id="mailboxConvOpenActions"><?php echo smarty_function_text(array('key'=>'mailbox+actions'),$_smarty_tpl);?>
</a>
                    <span class="ow_context_more"></span>
                    <div style="opacity: 1; top: 18px;" class="ow_tooltip ow_small ow_tooltip_top_right ow_hidden" id="mailboxConvOpenActionsContainer">
                        <div class="ow_tooltip_tail">
                            <span></span>
                        </div>
                        <div class="ow_tooltip_body">
                            <ul class="ow_context_action_list ow_border">
                                <li><a href="javascript://" id="mailboxConvActionMarkUnread"><?php echo smarty_function_text(array('key'=>'mailbox+bulk_mark_unread_btn'),$_smarty_tpl);?>
</a></li>
                                <li><a href="javascript://" id="mailboxConvActionMarkRead"><?php echo smarty_function_text(array('key'=>'mailbox+bulk_mark_as_read_btn'),$_smarty_tpl);?>
</a></li>
                                <li><a href="javascript://"  id="mailboxConvActionDelete" class="ow_mild_red"><?php echo smarty_function_text(array('key'=>'mailbox+delete_conversation_title'),$_smarty_tpl);?>
</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript://" id="closeBulkOptionsBtn" class="ow_miniic_delete">
            </a>
        </div>
    </div>
    <div id="conversationItemListWrapper">
        <div class="ow_mailbox_left_body" id="conversationItemListContainer">
            <div id="conversationItemListSub"><!-- list of conversations will be loaded here --></div>
        </div>
    </div>
</div>


<script type="text/template" id="conversationListNoContentPrototypeBlock">
    <div class="ow_mailbox_no_content"><?php echo smarty_function_text(array('key'=>"mailbox+conversation_item_list_empty"),$_smarty_tpl);?>
</div>
</script>

<script type="text/template" id="conversationItemPrototypeBlock">
    <div class="ow_mailbox_convers_info clearfix">
        <input type="checkbox" class="ow_mailbox_conv_option" id="conversation_<<?php ?>%= conversationId %<?php ?>>">
        <div class="ow_mailbox_avatar">
            <div class="ow_avatar">
                <a id="conversationItemAvatarProfileUrl"><img src="<<?php ?>%= avatarUrl %<?php ?>>" alt="" title="<<?php ?>%= shortUserData %<?php ?>>" style="max-width: 100%;" id="conversationItemAvatarUrl"></a>
            </div>
        </div>
        <div class="ow_mailbox_convers_info_body">
            <div class="ow_mailbox_convers_info_string ow_small">
                <a id="conversationItemProfileUrl"><b><<?php ?>%= displayName %<?php ?>></b></a><div class="ow_mailbox_convers_info_date ow_small" id="conversationItemDateTime"><<?php ?>%= dateLabel %<?php ?>></div>
            </div>
            <div class="ow_mailbox_convers_info_content ow_small clearfix">
                <div class="ow_left"> <span class="ic_reply" id="conversationItemHasReply" style="display: <<?php ?>% if (reply){ %<?php ?>> none<<?php ?>% } else { %<?php ?>> inline-block <<?php ?>% } %<?php ?>>;"></span> <span class="ow_mailbox_convers_preview" id="conversationItemPreviewText"><<?php ?>%= previewText %<?php ?>></span></div>
                <div class="ow_mailbox_convers_count_new"></div>
                <div class="ow_mailbox_convers_info_attach"></div>
            </div>
        </div>
    </div>
</script>
<?php }} ?>