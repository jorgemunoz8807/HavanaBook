<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:03:05
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\answer.html" */ ?>
<?php /*%%SmartyHeaderCode:16203548faef9531890-18201926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4ade6e5796bc15e19a0dbfbf9b49c71c51ffe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\answer.html',
      1 => 1404901670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16203548faef9531890-18201926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option' => 0,
    'questionUniqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faef954d709_29400130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faef954d709_29400130')) {function content_548faef954d709_29400130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="clearfix questions-answer" rel="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
">
	<div class="qa-check ow_left">
            <?php if (!$_smarty_tpl->tpl_vars['option']->value['disabled']){?><input type="<?php if ($_smarty_tpl->tpl_vars['option']->value['multiple']){?>checkbox<?php }else{ ?>radio<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['questionUniqId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['voted']){?>checked="checked" rel="1"<?php }else{ ?>rel="0"<?php }?> /><?php }?>
	</div>
	<div class="qa-users ow_right"><?php echo $_smarty_tpl->tpl_vars['option']->value['users'];?>
</div>
	<div class="qa-content ow_border">

        <div class="qa-content-clip">
            <div class="qa-content-wrap">
                <div class="qa-shaded qa-result ow_border  <?php if ($_smarty_tpl->tpl_vars['option']->value['percents']>=100){?>q-result-full<?php }?>" style="width: <?php echo $_smarty_tpl->tpl_vars['option']->value['percents'];?>
%" rel="<?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
"></div>
                <div class="qa-text"><?php echo $_smarty_tpl->tpl_vars['option']->value['text'];?>
</div>
            </div>
        </div>

        <div class="qa-hover-c ow_border clearfix q-opacity10">
            <div class="qa-votes"><span class="qa-vote-n"><?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
</span> <?php echo smarty_function_text(array('key'=>"questions+counter_votes_label"),$_smarty_tpl);?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['option']->value['editMode']){?>
                <div class="qa-delete-option questions-ic-delete"></div>
            <?php }?>
        </div>


	</div>
</div><?php }} ?>