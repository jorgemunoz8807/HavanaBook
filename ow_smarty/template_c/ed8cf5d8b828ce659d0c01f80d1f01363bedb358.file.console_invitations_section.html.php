<?php /* Smarty version Smarty-3.1.12, created on 2014-12-20 18:22:58
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\console_invitations_section.html" */ ?>
<?php /*%%SmartyHeaderCode:1743854962f02e8a325-38165647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed8cf5d8b828ce659d0c01f80d1f01363bedb358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\console_invitations_section.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743854962f02e8a325-38165647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'itemsCmp' => 0,
    'loadMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54962f02ebe4a3_84258920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54962f02ebe4a3_84258920')) {function content_54962f02ebe4a3_84258920($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="owm_sidebar_msg_block owm_invitation_block">
    <div class="owm_sidebar_msg_block_cap" id="invitations-cap"><h3><?php echo smarty_function_text(array('key'=>'base+console_item_invitations_label'),$_smarty_tpl);?>
</h3></div>
    <div class="owm_sidebar_msg_block_cont">
        <ul class="owm_sidebar_msg_list" id="invitations-list">
            <?php echo $_smarty_tpl->tpl_vars['itemsCmp']->value;?>

        </ul>
        <?php if ($_smarty_tpl->tpl_vars['loadMore']->value){?>
        <ul class="owm_sidebar_msg_list">
        <li class="owm_sidebar_msg_item owm_sidebar_msg_load_more">
            <a href="javascript://" id="invitations-load-more" class="owm_sidebar_load_more"></a>
        </li>
        </ul>
        <?php }?>
    </div>
</div><?php }} ?>