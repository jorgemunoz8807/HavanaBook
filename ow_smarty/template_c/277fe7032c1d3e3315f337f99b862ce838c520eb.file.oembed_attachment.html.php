<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:30:22
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\oembed_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:19413548e63de371667-40747814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277fe7032c1d3e3315f337f99b862ce838c520eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\oembed_attachment.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19413548e63de371667-40747814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'containerClass' => 0,
    'delete' => 0,
    'deleteClass' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e63de424eb3_34281646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e63de424eb3_34281646')) {function content_548e63de424eb3_34281646($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


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
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="ow_oembed_attachment clearfix <?php if (!empty($_smarty_tpl->tpl_vars['containerClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['containerClass']->value;?>
<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['delete']->value)){?>
            <a class="attachment_delete ow_miniic_delete <?php if (!empty($_smarty_tpl->tpl_vars['deleteClass']->value)){?><?php echo $_smarty_tpl->tpl_vars['deleteClass']->value;?>
<?php }?>" href="javascript://"></a>
         <?php }?>

        <div class="<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])||!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>two_column has_thumbnail<?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>two_column has_html<?php }else{ ?>one_column<?php }?> clearfix">
            <div class="attachment_left">
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
                    
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
" class="attachment_thumb" /> <div class="ow_oembed_video_cover"></div>
                    </a>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
                <a href="javascript://" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');">
                    <div class="ow_photo_attachment_stage" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
);"></div>
                </a>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['html'];?>

                <?php }?>
            </div>
            <div class="attachment_right ">
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?>
                    <div class="attachment_title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>
                    <div class="attachment_desc ow_remark"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }} ?>