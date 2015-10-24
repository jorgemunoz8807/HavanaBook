<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:10:51
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\ajax_oembed_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:19466548e897bee5188-26573055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0f4682f5f2d1ea3462be71580e908155e9dda5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\ajax_oembed_attachment.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19466548e897bee5188-26573055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'uniqId' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e897c07f0e7_96000602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e897c07f0e7_96000602')) {function content_548e897c07f0e7_96000602($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.ow_oembed_attachment {
    position: relative;
    padding-right: 20px;
    margin-bottom: 4px;
}

.ow_oembed_attachment .two_column  .attachment_left {
    float: left;
    max-width: 150px;
    margin-right: 8px;
}

.ow_oembed_attachment .two_column .attachment_right {
    display: inline-block;
}

.ow_oembed_attachment .video div.attachment_left {
    position: relative;
}

.ow_oembed_attachment .video div.attachment_right {
    display: inline-block;
}

.ow_oembed_attachment .one_column .attachment_left {
    display: none;
}

.ow_oembed_attachment .attachment_left img
{
    width: 100%;
    height: auto;
    max-width: none;
}

.ow_oembed_attachment .attachment_left embed,
.ow_oembed_attachment .attachment_left object,
.ow_oembed_attachment .attachment_left iframe
{
    width: 300px;
    height: 220px;
}

.ow_oembed_attachment:hover .attachment_delete {
    display: block;
}

.attachment_delete {
    position: absolute;
    right: 0;
    width:12px;
    height:12px;
    display: none;
}
.ow_oembed_attachment .link.two_column,
.ow_oembed_attachment .video.two_column {
    padding-left: 108px;
}

.ow_oembed_attachment .video.two_column.ow_video_playing {
    padding-left: 0;
}
.ow_oembed_attachment .link.two_column .attachment_left,
.ow_oembed_attachment .video.two_column .attachment_left {
    max-width: 100px;
    margin-left: -108px;
    margin-top: 4px;
}
.ow_oembed_attachment .video.two_column.ow_video_playing .attachment_left {
    margin: 0 0 4px 0;
    width: 100%;
    max-width: none;
}
.ow_oembed_attachment .link .ow_oembed_video_cover {
    display: none;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php if ($_smarty_tpl->tpl_vars['data']->value['type']=="photo"){?>
<div class="ow_comment_attachment ow_photo_attachment_preview ow_smallmargin" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank" class="ow_photo_attachment_pic ow_attachment_preload" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
);">
        <div class="ow_attachment_delete ow_miniic_delete OW_AttachmentDelete"></div>
    </a>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
    <a href="javascript://" class="ow_photo_attachment_pic ow_attachment_preload" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
);">
        <div class="ow_attachment_delete ow_miniic_delete OW_AttachmentDelete"></div>
    </a>
    <?php }?>
</div>
<?php }else{ ?>
<div class="ow_comment_attachment ow_oembed_attachment_preview ow_smallmargin" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])||!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
        <div class="ow_oembed_attachment_pic">
            
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
" class="attachment_thumb OW_AttachmentImage" />
                </a>
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
                <a href="javascript://" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="attachment_thumb from_fullsize_photo OW_AttachmentImage" />
                </a>
            <?php }?>
            
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['allImages'])&&count($_smarty_tpl->tpl_vars['data']->value['allImages'])>1){?>
                <a href="javascript://" class="attachment_other_images_btn ow_lbutton OW_AttachmentSelectPicture"><?php echo smarty_function_text(array('key'=>"base+ajax_attachment_select_image"),$_smarty_tpl);?>
</a>
                
                <div style="display: none">
                    <div class="attachment_other_images_fbtitle OW_AttachmentPicturesFbTitle"><?php echo smarty_function_text(array('key'=>"base+ajax_attachment_select_image_title"),$_smarty_tpl);?>
</div>
                    <div class="attachment_other_images_fbcontent clearfix OW_AttachmentPicturesFbContent">
                        <?php  $_smarty_tpl->tpl_vars["img"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["img"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['allImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["img"]->key => $_smarty_tpl->tpl_vars["img"]->value){
$_smarty_tpl->tpl_vars["img"]->_loop = true;
?>
                            <div class="attachment_image_item ow_border OW_AttachmentPictureItem">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" />
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php }?>
    
    <div class="ow_attachment_title">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
        <?php }?>
        <a class="ow_attachment_delete ow_miniic_delete OW_AttachmentDelete" href="javascript://"></a>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>
        <div class="ow_attachment_description ow_remark"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
    <?php }?>
</div>
<?php }?><?php }} ?>