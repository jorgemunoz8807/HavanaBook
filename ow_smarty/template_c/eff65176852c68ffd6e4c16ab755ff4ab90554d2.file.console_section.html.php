<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:20:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\notifications\mobile\views\components\console_section.html" */ ?>
<?php /*%%SmartyHeaderCode:8344548f1844c05871-13884236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff65176852c68ffd6e4c16ab755ff4ab90554d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\notifications\\mobile\\views\\components\\console_section.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8344548f1844c05871-13884236',
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
  'unifunc' => 'content_548f1844c0f558_40339830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1844c0f558_40339830')) {function content_548f1844c0f558_40339830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="owm_sidebar_msg_block owm_notification_block">
    <div class="owm_sidebar_msg_block_cap"><h3><?php echo smarty_function_text(array('key'=>'notifications+console_item_label'),$_smarty_tpl);?>
</h3></div>
    <div class="owm_sidebar_msg_block_cont">
        <ul class="owm_sidebar_msg_list" id="notifications-list">
            <?php echo $_smarty_tpl->tpl_vars['itemsCmp']->value;?>

        </ul>
        <?php if ($_smarty_tpl->tpl_vars['loadMore']->value){?>
        <ul class="owm_sidebar_msg_list">
            <li class="owm_sidebar_msg_item owm_sidebar_msg_load_more">
                <a href="javascript://" id="notifications-load-more" class="owm_sidebar_load_more"></a>
            </li>
        </ul>
        <?php }?>
    </div>
</div><?php }} ?>