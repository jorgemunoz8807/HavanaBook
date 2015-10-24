<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 11:01:08
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\photo_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:10802548f2ff4e5ace8-55021070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb4a8e054f0f562c9cd23f42a0fc666658e86eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\photo_view_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10802548f2ff4e5ace8-55021070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authError' => 0,
    'uploadUrl' => 0,
    'menu' => 0,
    'photos' => 0,
    'loadMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f2ff4e825a5_84461003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f2ff4e825a5_84461003')) {function content_548f2ff4e825a5_84461003($_smarty_tpl) {?><section>
    <div class="owm_photo_block">
        <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)){?>
            <div class="owm_padding">
                <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
            </div>
        <?php }else{ ?>
            <div class="clearfix">
                <a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
" class="owm_add_photo"></a>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            </div>
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
    </div>
</section><?php }} ?>