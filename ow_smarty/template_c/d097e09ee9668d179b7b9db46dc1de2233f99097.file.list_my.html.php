<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:02:10
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\controllers\list_my.html" */ ?>
<?php /*%%SmartyHeaderCode:11693548faec21305e1-62435115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd097e09ee9668d179b7b9db46dc1de2233f99097' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\controllers\\list_my.html',
      1 => 1404901696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11693548faec21305e1-62435115',
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
  'unifunc' => 'content_548faec2151f53_34081292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faec2151f53_34081292')) {function content_548faec2151f53_34081292($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="questions-page questions-my">
    <?php if (!empty($_smarty_tpl->tpl_vars['add']->value)){?>
        <div class="qp-add ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['add']->value;?>

        </div>
    <?php }?>
    <div class="qp-list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
</div><?php }} ?>