<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\user_profile.html" */ ?>
<?php /*%%SmartyHeaderCode:27786548e92ac5a99f7-73480890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7bfe6c56ad8d09d996f631bf4528927477e43b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\user_profile.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27786548e92ac5a99f7-73480890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'userId' => 0,
    'header' => 0,
    'info' => 0,
    'about' => 0,
    'contentMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92ac5ba234_97662752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92ac5ba234_97662752')) {function content_548e92ac5ba234_97662752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="owm_padding">
        <div class="owm_box_nocap owm_anno">
            <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

        </div>
    </div>
<?php }else{ ?>
    <?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_view_top",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

    <div class="owm_profile_block owm_bg_color_1">
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['about']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

    </div>
    <?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_view_bottom",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>