<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 17:01:05
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\user_about.html" */ ?>
<?php /*%%SmartyHeaderCode:218035490d5d13e5052-72256479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483681d9da163b81cba8f60278ab421655a94404' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\user_about.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218035490d5d13e5052-72256479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userId' => 0,
    'header' => 0,
    'info' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5490d5d140aed7_77823868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490d5d140aed7_77823868')) {function content_5490d5d140aed7_77823868($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_about_top",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<div class="owm_profile_block owm_bg_color_2">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['about']->value;?>

</div>
<?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_about_bottom",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }} ?>