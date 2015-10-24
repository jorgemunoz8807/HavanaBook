<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:51:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\content_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:16187548e930d524a60-89300656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc15edf08d6e66346dc194caa514ee55908df20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\content_menu.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16187548e930d524a60-89300656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e930d5550e5_87152365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e930d5550e5_87152365')) {function content_548e930d5550e5_87152365($_smarty_tpl) {?><div class="owm_content_menu_wrap owm_padding">
	<ul class="owm_content_menu clearfix">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li><?php } ?>
	</ul>
</div><?php }} ?>