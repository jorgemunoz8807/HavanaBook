<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:00:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\controllers\groups_user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:32479548e87066a1550-89656323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4af3d7b06e51477d35c9515de21f6ce7b7f1a1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\controllers\\groups_user_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32479548e87066a1550-89656323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupBriefInfo' => 0,
    'groupId' => 0,
    'listCmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e87066a9fb4_65881457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e87066a9fb4_65881457')) {function content_548e87066a9fb4_65881457($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><div class="ow_stdmargin">
    <?php echo $_smarty_tpl->tpl_vars['groupBriefInfo']->value;?>

</div>

<?php echo smarty_function_add_content(array('key'=>'groups.content.user_list.after_cap','groupId'=>$_smarty_tpl->tpl_vars['groupId']->value),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['listCmp']->value;?>


<?php echo smarty_function_add_content(array('key'=>'groups.content.user_list.bottom','groupId'=>$_smarty_tpl->tpl_vars['groupId']->value),$_smarty_tpl);?>
<?php }} ?>