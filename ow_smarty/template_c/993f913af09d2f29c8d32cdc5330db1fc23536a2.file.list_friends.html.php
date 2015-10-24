<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 00:04:58
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\controllers\list_friends.html" */ ?>
<?php /*%%SmartyHeaderCode:5669548fe7aab5f1b8-65001235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993f913af09d2f29c8d32cdc5330db1fc23536a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\controllers\\list_friends.html',
      1 => 1404901694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5669548fe7aab5f1b8-65001235',
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
  'unifunc' => 'content_548fe7aab80683_52068582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fe7aab80683_52068582')) {function content_548fe7aab80683_52068582($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="questions-page questions-friends">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qp-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qp-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
</div><?php }} ?>