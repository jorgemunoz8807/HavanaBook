<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:16:38
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\formats\image.html" */ ?>
<?php /*%%SmartyHeaderCode:1700548e60a6eb8eb0-87907932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2677e2bf0763d464349496c6a6548539464e0cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\formats\\image.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700548e60a6eb8eb0-87907932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e60a6f2f430_52672258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e60a6f2f430_52672258')) {function content_548e60a6f2f430_52672258($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.more.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_large_image clearfix">
    <div class="ow_newsfeed_item_picture">
        <a <?php if (empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?>href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
" onclick="OW.showImageInFloatBox(this.href); return false;"<?php }else{ ?>href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
"<?php }?>>
            <img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
"></a>
    </div>
</div><?php }} ?>