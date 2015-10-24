<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 11:01:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\photo_view_toplist.html" */ ?>
<?php /*%%SmartyHeaderCode:19696548f302274d575-81936378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c08a48cf53e97479ab02ac6b04fcfc50d6af668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\photo_view_toplist.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19696548f302274d575-81936378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uploadUrl' => 0,
    'menu' => 0,
    'authError' => 0,
    'photos' => 0,
    'loadMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f3022775de5_34814118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f3022775de5_34814118')) {function content_548f3022775de5_34814118($_smarty_tpl) {?><section>
    <div class="owm_photo_block">
        <div class="clearfix">
            <a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
" class="owm_add_photo"></a>
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

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
    </div>
</section><?php }} ?>