<?php /* Smarty version Smarty-3.1.12, created on 2015-01-12 01:24:47
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\controllers\groups_private_group.html" */ ?>
<?php /*%%SmartyHeaderCode:2229054b392df0be260-28551568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d42326dae7bb004e25e86703fcb046c02b63b95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\controllers\\groups_private_group.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229054b392df0be260-28551568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
    'creator' => 0,
    'userUrl' => 0,
    'displayName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54b392df27f2d0_57173885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b392df27f2d0_57173885')) {function content_54b392df27f2d0_57173885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_center ow_std_margin" style="margin-top: 90px;">
    <?php echo smarty_function_text(array('key'=>'groups+private_group_text'),$_smarty_tpl);?>

</div>

<?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_automargin ow_supernarrow','avatar'=>$_smarty_tpl->tpl_vars['avatar']->value,'content'=>$_smarty_tpl->tpl_vars['creator']->value,'infoString'=>"<a href='".((string)$_smarty_tpl->tpl_vars['userUrl']->value)."'>".((string)$_smarty_tpl->tpl_vars['displayName']->value)."</a>"),$_smarty_tpl);?>

<?php }} ?>