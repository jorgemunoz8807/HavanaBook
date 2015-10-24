<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:17:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\formats\image_content.html" */ ?>
<?php /*%%SmartyHeaderCode:27385548e60f2796455-97952738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a457982b64ffee60db8e2a1e661dba04c9b2dee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\formats\\image_content.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27385548e60f2796455-97952738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e60f27b3e78_53381277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e60f27b3e78_53381277')) {function content_548e60f27b3e78_53381277($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.more.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['thumbnail'];?>
" /></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
        
        <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']){?>
            <div class="owm_newsfeed_ulist">
                <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                    <div class="owm_newsfeed_ulist_count" style="display:inline-block">
                        <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }} ?>