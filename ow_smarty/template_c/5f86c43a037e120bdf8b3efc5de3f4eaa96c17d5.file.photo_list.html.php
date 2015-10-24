<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:25:06
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\photo_list.html" */ ?>
<?php /*%%SmartyHeaderCode:29970548e5492b307e3-41554705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f86c43a037e120bdf8b3efc5de3f4eaa96c17d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\photo_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29970548e5492b307e3-41554705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasSideBar' => 0,
    'isClassicMode' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5492bc3415_07243072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5492bc3415_07243072')) {function content_548e5492bc3415_07243072($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>

<div class="ow_photo_list_wrap<?php if (!$_smarty_tpl->tpl_vars['hasSideBar']->value){?> ow_photo_no_sidebar<?php }?>">
    <div id="browse-photo" class="ow_photo_list<?php if (!$_smarty_tpl->tpl_vars['isClassicMode']->value){?> ow_photo_pint_mode<?php }?> clearfix"></div>
    <div id="browse-photo-preloader" class="ow_fw_menu ow_preloader"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['isClassicMode']->value){?>
    <div id="browse-photo-item-prototype" class="ow_photo_item_wrap<?php if ($_smarty_tpl->tpl_vars['type']->value=='albums'){?> ow_photo_album<?php }?>" style="display: none">
        <div class="ow_photo_item">
            <?php if ($_smarty_tpl->tpl_vars['type']->value=='albums'){?>
                <div class="ow_photo_item_info ow_small clearfix">
                    <div class="ow_photo_item_info_description ow_left"></div>
                </div>
            <?php }else{ ?>
                <div class="ow_photo_item_info ow_small">
                    <div style="display: none" class="ow_photo_item_info_description"></div>
                    <div style="display: none" class="ow_photo_item_info_user ow_photo_by_user"><?php echo smarty_function_text(array('key'=>"base+by"),$_smarty_tpl);?>

                        <a href="javascript://"><b></b></a>
                    </div>
                    <div style="display: none" class="ow_photo_item_info_album">
                        <?php echo smarty_function_text(array('key'=>'photo+album'),$_smarty_tpl);?>
:
                        '<a href="javascript://"><b></b></a>'
                    </div>
                    <div class="ow_rates_wrap ow_small">
                        <span><?php echo smarty_function_text(array('key'=>'photo+rating'),$_smarty_tpl);?>
:</span>
                        <div class="ow_rates">
                            <div class="rates_cont clearfix">
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                            </div>
                            <div class="inactive_rate_list">
                                <div style="width:0%;" class="active_rate_list">
                                </div>
                            </div>
                        </div>
                        <span style="font-style: italic;" class="rate_title"></span>
                    </div>
                    <div style="margin-bottom: 0" class="ow_photo_item_info_user ow_photo_comment_count">
                        <?php echo smarty_function_text(array('key'=>'photo+comment_count'),$_smarty_tpl);?>
 <a href="javascript://"></a>
                    </div>
                </div>
            <?php }?>
            <img src="data:image/png;base64,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" alt="" />
            <img class="ow_hidden" style="display: none; visibility: hidden" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" width="0" height="0" alt="" />
        </div>
    </div>
<?php }else{ ?>
    <div id="browse-photo-item-prototype" class="ow_photo_item_wrap<?php if ($_smarty_tpl->tpl_vars['type']->value=='albums'){?> ow_photo_album<?php }?>" style="display: none">
        <div class="ow_photo_item">
            <div class="ow_photo_pint_album">
                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" width="0" height="0" alt="" />
            </div>
            <?php if ($_smarty_tpl->tpl_vars['type']->value=='albums'){?>
                <div class="ow_photo_item_info clearfix">
                    <div class="ow_photo_item_info_description ow_left"></div>
                </div>
            <?php }else{ ?>
                <div class="ow_photo_item_info ow_small">
                    <div style="display: none" class="ow_photo_item_info_description"></div>
                    <div style="display: none" class="ow_photo_item_info_user ow_photo_by_user">
                        <?php echo smarty_function_text(array('key'=>"base+by"),$_smarty_tpl);?>

                        <a href="javascript://"></a>
                    </div>
                    <div style="display: none" class="ow_photo_item_info_album">
                        <?php echo smarty_function_text(array('key'=>'photo+album'),$_smarty_tpl);?>
:
                        '<a href="javascript://"></a>'
                    </div>
                    <div class="ow_rates_wrap ow_small">
                        <span><?php echo smarty_function_text(array('key'=>'photo+rating'),$_smarty_tpl);?>
:</span>
                        <div class="ow_rates">
                            <div class="rates_cont clearfix">
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                                <a class="rate_item" href="javascript://">&nbsp;</a>
                            </div>
                            <div class="inactive_rate_list">
                                <div style="width:0%;" class="active_rate_list"></div>
                            </div>
                        </div>
                        <span style="font-style: italic;" class="rate_title"></span>
                    </div>
                    <div style="margin-bottom: 0" class="ow_photo_item_info_user ow_photo_comment_count">
                        <?php echo smarty_function_text(array('key'=>'photo+comment_count'),$_smarty_tpl);?>
 <a href="javascript://"></a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php }?>

<div class="ow_hidden">
    <div id="context-action-prototype" class="ow_context_action">              
        <div class="ow_tooltip ow_small ow_tooltip_top_right" style="opacity: 1; top: 19px;">
            <div class="ow_tooltip_tail"><span></span></div>
            <div class="ow_tooltip_body"></div>
        </div>
    </div>
    <iframe name="photo-downloader"  style="display:none;"></iframe>
</div>
<?php }} ?>