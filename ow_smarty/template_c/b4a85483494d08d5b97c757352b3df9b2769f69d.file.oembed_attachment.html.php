<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:10:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\components\oembed_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:7291548e897e3ce377-57384890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a85483494d08d5b97c757352b3df9b2769f69d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\components\\oembed_attachment.html',
      1 => 1401128664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7291548e897e3ce377-57384890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e897e405f47_62648834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e897e405f47_62648834')) {function content_548e897e405f47_62648834($_smarty_tpl) {?><div class="ow_dialog_item">
    <div class="ow_dialog_in_item " id="dialogMessageWrapper">
        <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)){?>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <?php }?>
        <div class="ow_oembed_attachment_preview">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['thumbnail_url'])){?>
            <div class="ow_oembed_attachment_pic">
                <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail_url'];?>
">
                </a>
            </div>
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
            <div class="ow_oembed_attachment_pic">
                <a href="javascript://" target="_blank" onclick="OW.showImageInFloatBox('<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
');">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="attachment_thumb from_fullsize_photo OW_AttachmentImage" />
                </a>
            </div>
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['data']->value['html'])){?>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['html'];?>

            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?>
            <div class="ow_attachment_title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['description'])){?>
            <div class="ow_attachment_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
            <?php }?>
        </div>
    </div><i></i>
</div><?php }} ?>