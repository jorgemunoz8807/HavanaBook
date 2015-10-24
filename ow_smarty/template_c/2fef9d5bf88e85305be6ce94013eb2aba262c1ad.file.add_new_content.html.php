<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:59
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\add_new_content.html" */ ?>
<?php /*%%SmartyHeaderCode:13592548e5323b6e481-20363600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fef9d5bf88e85305be6ce94013eb2aba262c1ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\add_new_content.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13592548e5323b6e481-20363600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5323b7a818_84474250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5323b7a818_84474250')) {function content_548e5323b7a818_84474250($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a class="ow_add_content <?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
<?php } ?><?php }} ?>