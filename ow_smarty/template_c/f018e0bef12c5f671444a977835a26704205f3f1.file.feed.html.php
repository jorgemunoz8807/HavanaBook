<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\components\feed.html" */ ?>
<?php /*%%SmartyHeaderCode:4331548e92ace166e1-44355230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f018e0bef12c5f671444a977835a26704205f3f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\components\\feed.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4331548e92ace166e1-44355230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'autoId' => 0,
    'status' => 0,
    'list' => 0,
    'viewMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92ad0de9a3_21144158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92ad0de9a3_21144158')) {function content_548e92ad0de9a3_21144158($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['autoId']->value;?>
" class="owm_newsfeed_block">
    <?php if (!empty($_smarty_tpl->tpl_vars['status']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

    <?php }?>
    
    <div class="owm_newsfeed_list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['viewMore']->value)){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("feedMoreCount", null, null); ob_start(); ?><span class="feed-more-count"><?php echo $_smarty_tpl->tpl_vars['viewMore']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div style="visibility: hidden;" class="feed-load-more owm_newsfeed_comment_load_more owm_load_more">
            <span class="owm_newsfeed_comment_load_txt">
                <?php echo smarty_function_text(array('key'=>'newsfeed+view_more_count_label','count'=>Smarty::$_smarty_vars['capture']['feedMoreCount']),$_smarty_tpl);?>

            </span>
        </div>
    <?php }?>
</div><?php }} ?>