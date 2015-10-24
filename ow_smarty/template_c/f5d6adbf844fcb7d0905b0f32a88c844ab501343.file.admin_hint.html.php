<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:47:00
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\profile_progressbar\views\controllers\admin_hint.html" */ ?>
<?php /*%%SmartyHeaderCode:12551548e67c40c6660-81339413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d6adbf844fcb7d0905b0f32a88c844ab501343' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\profile_progressbar\\views\\controllers\\admin_hint.html',
      1 => 1390625808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12551548e67c40c6660-81339413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67c40f8db3_98635152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67c40f8db3_98635152')) {function content_548e67c40f8db3_98635152($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"hint-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"hint-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first ow_txtleft">
            <th colspan="3">Settings</th>
        </tr>

        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"show-hint"),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"show-hint"),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>"show-hint"),$_smarty_tpl);?>
</td>
        </tr>

        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"hint-text"),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"hint-text"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>"hint-text"),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>"hint-text"),$_smarty_tpl);?>
</td>
        </tr>

        <tr class="ow_alt1">
            <td colspan="3" class="ow_center">
                <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

            </td>
        </tr>
    </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"hint-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<table class="ow_table_2">
    <tr class="ow_tr_first ow_txtleft">
        <th>Preview</th>
    </tr>
    <tr>
        <td>
            <div class="profile-progressbar" id="profile-progressbar">
                <span class="profile-progressbar-caption">69%</span>
                <div class="profile-progressbar-complete" style="width: 69%;"></div>
            </div>
        </td>
    </tr>
</table>
<?php }} ?>