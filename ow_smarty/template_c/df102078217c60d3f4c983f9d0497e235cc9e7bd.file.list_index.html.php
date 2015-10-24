<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:53:57
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_topusers\views\controllers\list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:13417548eafb53c9c13-06375956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df102078217c60d3f4c983f9d0497e235cc9e7bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_topusers\\views\\controllers\\list_index.html',
      1 => 1355935455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13417548eafb53c9c13-06375956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548eafb53ea7a0_91452941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548eafb53ea7a0_91452941')) {function content_548eafb53ea7a0_91452941($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['users']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['users']->value;?>

<?php }else{ ?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+user_no_users'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>