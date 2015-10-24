<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\component_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:14929548e5310ad7f58-35266185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7107780936ed4ce74f06daccf042faf1b778614f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\component_panel.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14929548e5310ad7f58-35266185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5310ae24b1_15766761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5310ae24b1_15766761')) {function content_548e5310ae24b1_15766761($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>