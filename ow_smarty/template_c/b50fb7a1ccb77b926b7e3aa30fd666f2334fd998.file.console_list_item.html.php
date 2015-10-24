<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:56:16
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\console_list_item.html" */ ?>
<?php /*%%SmartyHeaderCode:486548e5be05b1267-21062531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50fb7a1ccb77b926b7e3aa30fd666f2334fd998' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\console_list_item.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486548e5be05b1267-21062531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5be05c19c2_45536399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5be05c19c2_45536399')) {function content_548e5be05c19c2_45536399($_smarty_tpl) {?><li class="ow_console_list_item<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

</li><?php }} ?>