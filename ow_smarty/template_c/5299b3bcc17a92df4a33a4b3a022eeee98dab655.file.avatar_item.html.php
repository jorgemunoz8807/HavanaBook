<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\decorators\avatar_item.html" */ ?>
<?php /*%%SmartyHeaderCode:8659548e8c47771853-33870700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5299b3bcc17a92df4a33a4b3a022eeee98dab655' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\decorators\\avatar_item.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8659548e8c47771853-33870700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c47791859_31851032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c47791859_31851032')) {function content_548e8c47791859_31851032($_smarty_tpl) {?>
<div class="owm_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><span class="owm_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?></a>
<?php }else{ ?>
<img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
</div><?php }} ?>