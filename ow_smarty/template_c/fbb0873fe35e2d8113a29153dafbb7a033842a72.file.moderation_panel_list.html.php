<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 17:28:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\moderation_panel_list.html" */ ?>
<?php /*%%SmartyHeaderCode:11007548f8aa0563a83-88676836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbb0873fe35e2d8113a29153dafbb7a033842a72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\moderation_panel_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11007548f8aa0563a83-88676836',
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
  'unifunc' => 'content_548f8aa0586f16_04030878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f8aa0586f16_04030878')) {function content_548f8aa0586f16_04030878($_smarty_tpl) {?><ul class="ow_regular">
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a> <span class="ow_lbutton ow_green"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</span>
        </li>
    <?php } ?>
</ul><?php }} ?>