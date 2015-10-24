<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:02:07
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\feed_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:8122548faebf5bf697-77183513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f67546b181ed26cc070574de516e09cf0e2c38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\feed_menu.html',
      1 => 1404901678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8122548faebf5bf697-77183513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'sortControl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faebf5c2c68_66445917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faebf5c2c68_66445917')) {function content_548faebf5c2c68_66445917($_smarty_tpl) {?><div class="questions-list-menu-wrap clearfix">
    <div class="ql-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        <div class="ql-sort-wrap">
            <?php echo $_smarty_tpl->tpl_vars['sortControl']->value;?>

        </div>
    </div>
</div><?php }} ?>