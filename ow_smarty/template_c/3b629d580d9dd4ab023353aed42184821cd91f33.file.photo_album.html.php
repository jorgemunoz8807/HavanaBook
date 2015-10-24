<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:31:16
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\photo_album.html" */ ?>
<?php /*%%SmartyHeaderCode:30470548f1ae445f207-95044476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b629d580d9dd4ab023353aed42184821cd91f33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\photo_album.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30470548f1ae445f207-95044476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uploadUrl' => 0,
    'authError' => 0,
    'photos' => 0,
    'loadMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1ae446fcb1_46589444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1ae446fcb1_46589444')) {function content_548f1ae446fcb1_46589444($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="owm_photo_block">
    <div class="clearfix owm_align_right owm_padding owm_add_photo_wrap">
        <a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
" class="owm_add_photo"></a><span class="owm_add_photo_label"><?php echo smarty_function_text(array('key'=>'photo+upload_photos'),$_smarty_tpl);?>
</span>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)){?>
        <div class="owm_padding">
            <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
        </div>
    <?php }else{ ?>
        <div class="owm_photo_list">
            <div class="owm_photo_list_tr clearfix" id="photo-list-cont"><?php echo $_smarty_tpl->tpl_vars['photos']->value;?>
</div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['loadMore']->value){?>
        <div class="owm_photo_list_load_more owm_bg_color_3">
            <a href="javascript://" id="btn-photo-load-more"></a>
        </div>
        <?php }?>
    <?php }?>
</div><?php }} ?>