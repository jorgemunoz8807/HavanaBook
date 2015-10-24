<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:01:51
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\group_index.html" */ ?>
<?php /*%%SmartyHeaderCode:21406548e875f035142-23730122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1150fe2ae1d675d580d495927af2c51c65ba721e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\group_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21406548e875f035142-23730122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupCmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e875f052f74_71848118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e875f052f74_71848118')) {function content_548e875f052f74_71848118($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'forum.add_content.list.top','listType'=>'group'),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['groupCmp']->value;?>
<?php }} ?>