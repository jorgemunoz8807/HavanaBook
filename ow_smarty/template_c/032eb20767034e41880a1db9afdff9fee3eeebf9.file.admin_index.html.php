<?php /* Smarty version Smarty-3.1.12, created on 2014-12-21 23:36:23
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_guests\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:306895497c9f7537ff6-08791361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '032eb20767034e41880a1db9afdff9fee3eeebf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_guests\\views\\controllers\\admin_index.html',
      1 => 1394000586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306895497c9f7537ff6-08791361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5497c9f7706ea3_47851366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497c9f7706ea3_47851366')) {function content_5497c9f7706ea3_47851366($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>
<div class="clearfix">
    <div class="ow_right ow_stdmargin"><a href="http://oxcandystore.com/?pk=ocsguests"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" /></a></div>
</div>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="ow_automargin ow_wide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'config-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'config-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tr>
        <th class="ow_name ow_txtleft" colspan="2">
            <span class="ow_section_icon ow_ic_forum"><?php echo smarty_function_text(array('key'=>'ocsguests+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
">
        <td class="ow_label" style="width: 50%;"><?php echo smarty_function_label(array('name'=>'months'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>'months','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'ocsguests+months'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'months'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr><td colspan="2" class="ow_submit"><?php echo smarty_function_submit(array('name'=>'save'),$_smarty_tpl);?>
</td></tr>
</table>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'config-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>