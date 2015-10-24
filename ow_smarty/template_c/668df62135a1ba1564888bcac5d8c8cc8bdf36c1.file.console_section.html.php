<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:20:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\friends\mobile\views\components\console_section.html" */ ?>
<?php /*%%SmartyHeaderCode:25814548f1844c5ec97-22311799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668df62135a1ba1564888bcac5d8c8cc8bdf36c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\friends\\mobile\\views\\components\\console_section.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25814548f1844c5ec97-22311799',
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
  'unifunc' => 'content_548f1844c67a14_60240100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1844c67a14_60240100')) {function content_548f1844c67a14_60240100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="owm_sidebar_msg_block owm_friend_request_block">
    <div class="owm_sidebar_msg_block_cap" id="friend-requests-cap"><h3><?php echo smarty_function_text(array('key'=>'friends+console_requests_title'),$_smarty_tpl);?>
</h3></div>
    <div class="owm_sidebar_msg_block_cont">
        <ul class="owm_sidebar_msg_list" id="friend-requests-list">
            <?php echo $_smarty_tpl->tpl_vars['itemsCmp']->value;?>

        </ul>
        <?php if ($_smarty_tpl->tpl_vars['loadMore']->value){?>
        <ul class="owm_sidebar_msg_list">
        <li class="owm_sidebar_msg_item owm_sidebar_msg_load_more">
            <a href="javascript://" id="friends-load-more" class="owm_sidebar_load_more"></a>
        </li>
        </ul>
        <?php }?>
    </div>
</div><?php }} ?>