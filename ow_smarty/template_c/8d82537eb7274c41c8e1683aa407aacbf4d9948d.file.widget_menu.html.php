<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\widget_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:24848548e8c477bf736-05202767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d82537eb7274c41c8e1683aa407aacbf4d9948d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\widget_menu.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24848548e8c477bf736-05202767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c477cabc5_03155166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c477cabc5_03155166')) {function content_548e8c477cabc5_03155166($_smarty_tpl) {?>
<div class="owm_box_menu owm_float_right">
   <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?><a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
" class="owm_box_menu_item <?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active'])&&$_smarty_tpl->tpl_vars['tab']->value['active']){?> owm_box_menu_item_active<?php }?>"><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a><?php } ?>
</div>
<?php }} ?>