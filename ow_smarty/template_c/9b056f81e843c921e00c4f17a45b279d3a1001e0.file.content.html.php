<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:17:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\formats\content.html" */ ?>
<?php /*%%SmartyHeaderCode:27385548e60f27ddb90-88898350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b056f81e843c921e00c4f17a45b279d3a1001e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\formats\\content.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27385548e60f27ddb90-88898350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e60f28038a5_51560308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e60f28038a5_51560308')) {function content_548e60f28038a5_51560308($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.more.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>
<div class="clearfix">
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>

        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['activity'])){?>
        <div class="ow_newsfeed_action_activity forum_newsfeed_activity">
        <div class="ow_small ow_newsfeed_activity">
            <div class="ow_newsfeed_activity_title">
                <?php if (isset($_smarty_tpl->tpl_vars['vars']->value['activity']['url'])){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['activity']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vars']->value['activity']['title'];?>
</a>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['activity']['title'];?>

                <?php }?>
            </div>
            <div class="ow_border ow_newsfeed_activity_content">
                <?php echo smarty_function_decorator(array('name'=>'mini_ipc','avatar'=>$_smarty_tpl->tpl_vars['vars']->value['activity']['avatarData'],'content'=>$_smarty_tpl->tpl_vars['vars']->value['activity']['description'],'profileUrl'=>$_smarty_tpl->tpl_vars['vars']->value['activity']['avatarData']['url'],'displayName'=>$_smarty_tpl->tpl_vars['vars']->value['activity']['avatarData']['title']),$_smarty_tpl);?>

            </div>
        </div>
        </div>
        <?php }?>
    </div>
</div><?php }} ?>