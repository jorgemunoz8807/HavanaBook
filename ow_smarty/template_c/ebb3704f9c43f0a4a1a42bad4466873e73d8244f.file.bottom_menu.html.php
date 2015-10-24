<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\bottom_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:20007548e8c4794e688-65633640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb3704f9c43f0a4a1a42bad4466873e73d8244f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\bottom_menu.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20007548e8c4794e688-65633640',
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
  'unifunc' => 'content_548e8c47954cb0_49449764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c47954cb0_49449764')) {function content_548e8c47954cb0_49449764($_smarty_tpl) {?><nav class="owm_nav_left_bottom">
    <ul class="owm_nav_left">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li class="owm_nav_left_item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a>
        </li>
        <?php } ?>
    </ul>
</nav><?php }} ?>