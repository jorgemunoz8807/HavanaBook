<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\photo_floatbox.html" */ ?>
<?php /*%%SmartyHeaderCode:2405548e53106f0879-56508755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309fc6d3659658bae1f1e3de0c727f5a72fd5e5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\photo_floatbox.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2405548e53106f0879-56508755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authError' => 0,
    'layout' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5310709ea1_19063567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5310709ea1_19063567')) {function content_548e5310709ea1_19063567($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?>

<div class="ow_hidden">
    <div id="ow-photo-view" class="ow_photoview_wrap clearfix ow_bg_color">
        <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)){?>
            <div id="ow-photo-view-error" style="padding: 45px 10px 65px">
                <div class="ow_anno ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
            </div>
        <?php }else{ ?>
            <div class="ow_photoview_stage_wrap<?php if ($_smarty_tpl->tpl_vars['layout']->value=='page'){?> ow_smallmargin<?php }?>">
                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="ow_photo_img ow_photo_view" />
                <div class="ow_photoview_bottom_menu_wrap">
                    <div class="ow_photoview_bottom_menu clearfix">
                        <a  href="javascript://" class="ow_photoview_albumlink">
                            '': 
                        </a>
                        <div class="ow_photoview_fullscreen_toolbar_wrap">
                            <div class="ow_photoview_play_btn" title="<?php echo smarty_function_text(array('key'=>'photo+play_pause'),$_smarty_tpl);?>
"></div>
                            <div class="ow_photoview_slide_settings" style="float: none">
                                <div class="ow_photoview_slide_settings_btn" title="<?php echo smarty_function_text(array('key'=>'photo+slideshow_settings'),$_smarty_tpl);?>
"></div>
                                <div class="ow_photoview_slide_settings_controls clearfix">
                                    <div class="ow_photoview_slide_time" title="<?php echo smarty_function_text(array('key'=>'photo+slideshow_interval'),$_smarty_tpl);?>
3"></div>
                                    <div class="ow_photoview_slide_settings_effects">
                                        <div class="ow_photoview_slide_settings_effect ow_small active" effect="fade" title="<?php echo smarty_function_text(array('key'=>'photo+effects'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'photo+effect_fade'),$_smarty_tpl);?>
</div>
                                        <div class="ow_photoview_slide_settings_effect ow_small" effect="slide" title="<?php echo smarty_function_text(array('key'=>'photo+effects'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'photo+effect_slide'),$_smarty_tpl);?>
</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript://" class="ow_photoview_info_btn open ow_right"></a>
                        <a href="javascript://" class="ow_photoview_fullscreen ow_right"></a>
                    </div>
                </div>
                <div class="ow_photo_context_action" style="display: none"></div>
                <a class="ow_photoview_arrow_left" href="javascript://"><i></i></a>
                <a class="ow_photoview_arrow_right" href="javascript://"><i></i></a>
                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" style="display: none" class="ow_photo_img slide" />
            </div>
            <div class="ow_photoview_info_wrap">
                <div class="ow_photoview_info<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                    <div class="ow_photo_scroll_cont">
                        <div class="ow_photoview_user ow_smallmargin clearfix">
                            <div class="ow_user_list_picture">
                                <div class="ow_avatar">
                                    <a href="javascript://"><img alt="" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" style="max-width: 100%; display: none"></a>
                                </div>
                            </div>
                            <div class="ow_user_list_data">
                                <a href="" class="ow_photo_avatar_url"></a>
                                <div class="ow_small ow_timestamp"></div>
                                <a href="" class="ow_small ow_photo_album_url"><span></span></a>
                            </div>
                        </div>
                        
                        <?php echo smarty_function_add_content(array('key'=>"photo.content.betweenInfoAndDescription"),$_smarty_tpl);?>

                        
                        <div class="ow_photoview_description ow_small">
                            <span id="photo-description"></span>
                        </div>
                        
                        <?php echo smarty_function_add_content(array('key'=>"photo.content.betweenDescriptionAndRates"),$_smarty_tpl);?>

                        
                        <div class="ow_rates_wrap ow_small ow_hidden">
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
                        <div class="ow_photo_share"></div>
                        
                        <?php echo smarty_function_add_content(array('key'=>"photo.content.betweenRatesAndComments"),$_smarty_tpl);?>

                        
                        <div class="ow_feed_comments ow_small"></div>
                    </div>
                </div>
                <div class="ow_feed_comments_input_sticky"></div>
            </div>
        <?php }?>
    </div>
</div>
<?php }} ?>