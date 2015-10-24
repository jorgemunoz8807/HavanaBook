<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:02:07
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\controllers\list_all.html" */ ?>
<?php /*%%SmartyHeaderCode:20381548faebf5dea34-58483017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b11b177c2b7c31797654c77938ca9e814e5e0a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\controllers\\list_all.html',
      1 => 1404901694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20381548faebf5dea34-58483017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'add' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faebf5e5e13_36782987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faebf5e5e13_36782987')) {function content_548faebf5e5e13_36782987($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="questions-page questions-all">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qp-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qp-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
</div><?php }} ?>