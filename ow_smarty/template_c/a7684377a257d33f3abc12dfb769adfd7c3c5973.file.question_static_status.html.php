<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:05:05
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\question_static_status.html" */ ?>
<?php /*%%SmartyHeaderCode:11972548faf71ad0078-88959678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7684377a257d33f3abc12dfb769adfd7c3c5973' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\question_static_status.html',
      1 => 1404901684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11972548faf71ad0078-88959678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'voteCount' => 0,
    'postCount' => 0,
    'followCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faf71b0a307_13972767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faf71b0a307_13972767')) {function content_548faf71b0a307_13972767($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="questions-status-c" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-status" <?php if (!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?>>

    <span class="ow_nowrap questions-status">

        <span class="q-status-votes ow_remark" <?php if (!$_smarty_tpl->tpl_vars['voteCount']->value){?>style="display: none;"<?php }?>><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['voteCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_votes_label"),$_smarty_tpl);?>
</span>

        <span class="q-status-delim qsd-1" <?php if ((!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['followCount']->value)||!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?> >&middot;</span>

        <span class="q-status-posts ow_remark" <?php if (!$_smarty_tpl->tpl_vars['postCount']->value){?>style="display: none;"<?php }?> ><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['postCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_comments_label"),$_smarty_tpl);?>
</span>

        <span class="q-status-delim qsd-2" <?php if ((!$_smarty_tpl->tpl_vars['voteCount']->value&&!$_smarty_tpl->tpl_vars['postCount']->value)||!$_smarty_tpl->tpl_vars['followCount']->value){?>style="display: none;"<?php }?> >&middot;</span>

        <a href="javascript://" onclick="QUESTIONS_AnswerListCollection.<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
.showFollowers();" class="q-status-follows ow_remark" <?php if (!$_smarty_tpl->tpl_vars['followCount']->value){?>style="display: none;"<?php }?> ><span class="qs-number ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['followCount']->value;?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_follows_label"),$_smarty_tpl);?>
</a>

    </span>

</div><?php }} ?>