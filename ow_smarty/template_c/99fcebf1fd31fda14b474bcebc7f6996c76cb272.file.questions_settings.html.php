<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:57:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\questions_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:26887548e782c608827-19813480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99fcebf1fd31fda14b474bcebc7f6996c76cb272' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\questions_settings.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26887548e782c608827-19813480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e782c659f19_58531384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e782c659f19_58531384')) {function content_548e782c659f19_58531384($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'questionSettings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'questionSettings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_form ow_full ow_automargin ow_center ow_table_1">
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,alt1'),$_smarty_tpl);?>
 ow_tr_first ow_tr_last">
            <td class="ow_label" ><?php echo smarty_function_label(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
            <td class="ow_value" style="text-align:left;padding-left:40px;"><?php echo smarty_function_input(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small" style="text-align:left"><?php echo smarty_function_desc(array('name'=>'user_view_presentation'),$_smarty_tpl);?>
</td>
        </tr>
    </table>
    <div class="clearfix ow_stdmargin">
       <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>"ow_ic_save"),$_smarty_tpl);?>

       </div>
   </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'questionSettings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>