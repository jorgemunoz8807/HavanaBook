<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:31:03
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\photo_albums.html" */ ?>
<?php /*%%SmartyHeaderCode:24376548f1ad773a6c6-72122098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2771c4808be72b7594ec38c0240f62202ee8af1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\photo_albums.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24376548f1ad773a6c6-72122098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authError' => 0,
    'albums' => 0,
    'uploadUrl' => 0,
    'loadMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1ad774fcd6_98297145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1ad774fcd6_98297145')) {function content_548f1ad774fcd6_98297145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)){?>
    <div class="owm_padding">
        <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
    </div>
<?php }else{ ?>
    <?php if ($_smarty_tpl->tpl_vars['albums']->value){?>
    <div class="owm_photo_album_list_wrap">
        <div class="clearfix owm_align_right owm_padding owm_add_photo_wrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
" class="owm_add_photo"></a><span class="owm_add_photo_label"><?php echo smarty_function_text(array('key'=>'photo+upload_photos'),$_smarty_tpl);?>
</span>
        </div>
        <ul id="album-list-cont">
        <?php echo $_smarty_tpl->tpl_vars['albums']->value;?>

        </ul>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['loadMore']->value){?>
    <div class="owm_photo_list_load_more owm_bg_color_3">
        <a href="javascript://" id="btn-photo-load-more"></a>
    </div>
    <?php }?>
    <?php }else{ ?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_album_found'),$_smarty_tpl);?>
</div>
    <?php }?>
<?php }?><?php }} ?>