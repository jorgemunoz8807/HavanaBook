<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:51:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\user_list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:945548e930d654b50-53157718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '100999dedfd62d868a04d1bb97b7d891845662f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\user_list_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945548e930d654b50-53157718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'listType' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e930d660498_58201202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e930d660498_58201202')) {function content_548e930d660498_58201202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)){?><?php echo smarty_function_add_content(array('key'=>"base.mobile.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }?>

<div class="owm_user_list owm_content_list owm_std_margin_bottom">
    <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    <div class="owm_user_list_preloader owm_preloader" style="visibility: hidden"></div>
</div>
<?php }} ?>