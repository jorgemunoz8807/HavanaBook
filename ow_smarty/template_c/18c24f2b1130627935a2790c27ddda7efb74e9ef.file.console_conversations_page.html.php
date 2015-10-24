<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:51:23
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\mobile\views\components\console_conversations_page.html" */ ?>
<?php /*%%SmartyHeaderCode:27126548e92fbbbdcd2-71371284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c24f2b1130627935a2790c27ddda7efb74e9ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\mobile\\views\\components\\console_conversations_page.html',
      1 => 1397688442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27126548e92fbbbdcd2-71371284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92fbbff929_93370087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92fbbff929_93370087')) {function content_548e92fbbff929_93370087($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.owm_mchat_convers_list, .owm_mchat_user_list, .owm_sidebar_search_active .owm_mchat_user_list.active, .owm_sidebar_search_active .owm_mchat_convers_list.active {
    display: none;
}
.owm_mchat_convers_list.active, .owm_mchat_user_list.active {
    display: block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="owm_mchat_block">
    <div class="owm_sidebar_top_block">
        <div class="owm_sidebar_search_block_wrap clearfix owm_padding owm_bg_color_2">            
            <div class="owm_sidebar_search_close"><a href="javascript://" class="owm_close_btn" id="mailboxSidebarCloseSearchBtn"></a></div>
            <div class="owm_sidebar_search_input_wrap"><input type="text" value="<?php echo smarty_function_text(array('key'=>'mailbox+label_invitation_conversation_search'),$_smarty_tpl);?>
" class="owm_sidebar_search_input invitation" name="mailbox_search_users_btn" id="mailboxSidebarSearchTextField" /></div>
        </div>
        <div class="owm_sidebar_sub_menu_wrap clearfix owm_padding owm_bg_color_2 owm_small_margin_bottom">
            <div class="owm_sidebar_search"><a href="javascript://" class="owm_sidebar_search_ico" id="mailboxSidebarSearchBtn"></a></div>     
            <ul class="owm_sidebar_sub_menu clearfix" id="mailboxSidebarMenu">
                <li class="owm_sidebar_sub_menu_item" data-mode="conversations" id="menuItem_conversations">
                    <a class="owm_sidebar_sub_menu_item_url" href="javascript://">
                        <span class="owm_sidebar_sub_menu_item_txt"><?php echo smarty_function_text(array('key'=>"mailbox+conversations"),$_smarty_tpl);?>
</span>
                    </a>
                </li>
                <li class="owm_sidebar_sub_menu_item" data-mode="userlist" id="menuItem_userlist">
                    <a class="owm_sidebar_sub_menu_item_url" href="javascript://">
                        <span class="owm_sidebar_sub_menu_item_txt"><?php echo smarty_function_text(array('key'=>"mailbox+userlist"),$_smarty_tpl);?>
</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="owm_user_list owm_mchat_convers_list owm_std_margin_bottom owm_convers_list" id="mailboxSidebarItemListConversations">
        <div class="owm_convers_list_cont"></div>
        <ul class="owm_sidebar_msg_list" id="mailboxConversationsLoadMoreBlock">
            <li class="owm_sidebar_msg_item owm_sidebar_msg_load_more">
                <a href="javascript://" id="mailboxConversationsLoadMore" class="owm_sidebar_load_more"></a>
            </li>
        </ul>
        <div style="visibility: hidden" class="owm_user_list_preloader owm_preloader" id="mailboxSidebarItemListConversationsPreloader"></div>
    </div>

    <div class="owm_user_list owm_mchat_user_list owm_std_margin_bottom owm_convers_list" id="mailboxSidebarItemListUserlist">
        <div class="owm_convers_list_cont"></div>
        <ul class="owm_sidebar_msg_list" id="mailboxUsersLoadMoreBlock">
            <li class="owm_sidebar_msg_item owm_sidebar_msg_load_more">
                <a href="javascript://" id="mailboxUsersLoadMore" class="owm_sidebar_load_more"></a>
            </li>
        </ul>
        <div style="visibility: hidden" class="owm_user_list_preloader owm_preloader" id="mailboxSidebarItemListUserlistPreloader"></div>
    </div>

    <div class="owm_user_list owm_mchat_search_list owm_std_margin_bottom" id="mailboxSidebarSearchItemList">
        <div class="owm_user_not_found owm_padding owm_align_center" style="display: none;"><?php echo smarty_function_text(array('key'=>"mailbox+user_not_found"),$_smarty_tpl);?>
</div>
        <div class="owm_convers_list_cont"></div>
    </div>
</div>

<script type="text/template"  id="mailboxSidebarItemPrototype" >
<div class="owm_content_list_item">
    <div class="owm_user_list_item">
        <div class="owm_avatar">
            <a href="javascript://" href="<<?php ?>%= profileUrl %<?php ?>>"><img src="<<?php ?>%= avatarUrl %<?php ?>>" /><span style="background-color: rgb(255, 152, 0)" class="owm_avatar_label"><<?php ?>%= avatarLabel %<?php ?>></span></a>
        </div>
        <div class="owm_sidebar_convers_status_ico" id="mailboxSidebarItemConversationsMode"></div>
        <div class="owm_user_list_name"><span id="mailboxSidebarConversationsItemDisplayName"><<?php ?>%= displayName %<?php ?>></span></div>
        <div class="owm_sidebar_convers_mail_theme" id="mailboxSidebarConversationsItemSubject"><<?php ?>%= previewText %<?php ?>></div>
        <div class="owm_profile_online" id="mailboxSidebarConversationsItemOnlineStatus" style="display: none;"></div>
    </div>
</div>
</script>

<script type="text/template"  id="mailboxSidebarUserItemPrototype" >
<div class="owm_content_list_item">
    <div class="owm_user_list_item">
        <div class="owm_avatar">
            <a href="javascript://" href="<<?php ?>%= profileUrl %<?php ?>>"><img src="<<?php ?>%= avatarUrl %<?php ?>>" /><span style="background-color: rgb(255, 152, 0)" class="owm_avatar_label"><<?php ?>%= avatarLabel %<?php ?>></span></a>
        </div>
        <div class="owm_user_list_name"><span id="mailboxSidebarConversationsItemDisplayName"><<?php ?>%= displayName %<?php ?>></span></div>
        <div class="owm_profile_online" id="mailboxSidebarConversationsItemOnlineStatus" style="display: none;"></div>
    </div>
</div>
</script>
<?php }} ?>