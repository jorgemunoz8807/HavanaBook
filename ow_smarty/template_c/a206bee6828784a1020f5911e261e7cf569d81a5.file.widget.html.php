<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\profile_progressbar\views\components\widget.html" */ ?>
<?php /*%%SmartyHeaderCode:4164548e56be501105-51045335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a206bee6828784a1020f5911e261e7cf569d81a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\profile_progressbar\\views\\components\\widget.html',
      1 => 1390625800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4164548e56be501105-51045335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be50af90_40286239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be50af90_40286239')) {function content_548e56be50af90_40286239($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>

<table class="ow_table_1 ow_form ow_stdmargin" style="margin: 0">
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'profileprogressbar+progressbar_label_for_user'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <div id="profile_progressbar" class="profile-progressbar">
                <span class="profile-progressbar-caption"><?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
%</span>
                <div class="profile-progressbar-complete" style="width: <?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
%"></div>
            </div>
        </td>
    </tr>
</table>
<?php }} ?>