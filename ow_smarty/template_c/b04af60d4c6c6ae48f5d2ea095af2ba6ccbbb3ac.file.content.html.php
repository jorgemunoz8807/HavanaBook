<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:11:13
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\formats\content.html" */ ?>
<?php /*%%SmartyHeaderCode:13255548f163189f927-15118635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04af60d4c6c6ae48f5d2ea095af2ba6ccbbb3ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\formats\\content.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13255548f163189f927-15118635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f16318e3980_38193689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f16318e3980_38193689')) {function content_548f16318e3980_38193689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if ($_smarty_tpl->tpl_vars['vars']->value['status']){?><div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div><?php }?>
<div class="owm_newsfeed_body_cont">
    <div class="owm_newsfeed_item_box clearfix">
        <div class="owm_newsfeed_item_padding">
            <div class="owm_newsfeed_body_icon <?php if ($_smarty_tpl->tpl_vars['vars']->value['iconClass']){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['iconClass'];?>
<?php }?>"></div>
            <div class="owm_newsfeed_body_info_wrap">
                <div class="owm_newsfeed_body_info">
                    <div class="owm_newsfeed_body_title"><b><?php if ($_smarty_tpl->tpl_vars['vars']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['vars']->value['url']){?></a><?php }?></b></div>
                    <?php if ($_smarty_tpl->tpl_vars['vars']->value['description']){?><div class="owm_newsfeed_body_descr"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div><?php }?>
                </div>
            </div>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['activity'])){?>
        <div class="owm_newsfeed_body_activity">
            <div class="owm_newsfeed_item_padding">
                <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['activity']['avatarData'])){?>
                <div class="owm_newsfeed_body_activity_pic">
                    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['vars']->value['activity']['avatarData']),$_smarty_tpl);?>

                </div>
                <?php }?>
                <div class="owm_newsfeed_body_activity_info_wrap">
                    <div class="owm_newsfeed_body_activity_info">
                        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['activity']['title'])){?><div class="owm_newsfeed_body_activity_title"><?php echo $_smarty_tpl->tpl_vars['vars']->value['activity']['title'];?>
</div><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['activity']['description'])){?><div class="owm_newsfeed_body_activity_descr"><?php echo $_smarty_tpl->tpl_vars['vars']->value['activity']['description'];?>
</div><?php }?>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div><?php }} ?>