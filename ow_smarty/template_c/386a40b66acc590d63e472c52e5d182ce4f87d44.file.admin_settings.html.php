<?php /* Smarty version Smarty-3.1.12, created on 2014-12-21 01:45:18
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\autoviewmore\views\controllers\admin_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:23894549696ae410301-55987270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386a40b66acc590d63e472c52e5d182ce4f87d44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\autoviewmore\\views\\controllers\\admin_settings.html',
      1 => 1387064254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23894549696ae410301-55987270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_549696ae43b3c2_65732145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549696ae43b3c2_65732145')) {function content_549696ae43b3c2_65732145($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_automargin ow_superwide">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'adminForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'adminForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <table class="ow_table_1 ow_form">

           <tr> 
               <td class="ow_label"><?php echo smarty_function_label(array('name'=>"autoclick"),$_smarty_tpl);?>
</td>
               <td class="ow_value"><?php echo smarty_function_input(array('name'=>"autoclick"),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'autoclick'),$_smarty_tpl);?>
</td>
           </tr>

          

           <tr>
               <td colspan="2" class="ow_submit"><?php echo smarty_function_submit(array('name'=>"saveSettings",'class'=>'ow_ic_save'),$_smarty_tpl);?>
</td>
           </tr>
         </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'adminForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>