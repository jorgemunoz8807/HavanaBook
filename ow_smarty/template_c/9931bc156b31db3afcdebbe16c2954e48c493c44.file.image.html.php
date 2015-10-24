<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\formats\image.html" */ ?>
<?php /*%%SmartyHeaderCode:22223548e92acb36331-40027267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9931bc156b31db3afcdebbe16c2954e48c493c44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\formats\\image.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22223548e92acb36331-40027267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92acb59223_10838716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92acb59223_10838716')) {function content_548e92acb59223_10838716($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div><?php }?>
<div class="owm_newsfeed_body_cont">
    <div class="owm_newsfeed_imglist_scroller owm_newsfeed_imglist_scroller_1">
        <div class="owm_newsfeed_imglist_wrap">
            <div class="owm_newsfeed_imglist clearfix">
                <div class="owm_newsfeed_imglist_section clearfix">
                    <div class="owm_newsfeed_imglist_item">
                        <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['blankImg'];?>
"></a>
                    </div>
                </div>
                <div class="owm_newsfeed_imglist_section clearfix">
                </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['vars']->value['info']){?>
    <div class="owm_newsfeed_imglist_info">
        <div class="owm_newsfeed_item_padding">
            <?php if (isset($_smarty_tpl->tpl_vars['vars']->value['info']['text'])){?>
                <?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['text'];?>

            <?php }elseif(isset($_smarty_tpl->tpl_vars['vars']->value['info']['route'])){?>
                <?php if (isset($_smarty_tpl->tpl_vars['vars']->value['info']['route']['textKey'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['vars']->value['info']['route']['textKey']),$_smarty_tpl);?>
: <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['route']['label'];?>
</a>
            <?php }?>
        </div>
    </div>
    <?php }?>
</div><?php }} ?>