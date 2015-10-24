<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:56:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\controllers\groups_view.html" */ ?>
<?php /*%%SmartyHeaderCode:11494548e862808d4d0-91320143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28cc4a2dfc386221bb312cc917b929522177b56d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\controllers\\groups_view.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11494548e862808d4d0-91320143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8628093e70_05633501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8628093e70_05633501')) {function content_548e8628093e70_05633501($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>