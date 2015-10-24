<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:58:25
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\users_role.html" */ ?>
<?php /*%%SmartyHeaderCode:8488548e5c6132d379-80648530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd7a917f4a2419670d20e3a419a325a596fecc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\users_role.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8488548e5c6132d379-80648530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c61334510_48394105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c61334510_48394105')) {function content_548e5c61334510_48394105($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="clearfix">
    <div class="ow_stdmargin ow_right"><?php echo smarty_function_decorator(array('name'=>'button','id'=>'back-to-roles','langLabel'=>'admin+back_to_roles'),$_smarty_tpl);?>
</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['userList']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

<?php }?><?php }} ?>