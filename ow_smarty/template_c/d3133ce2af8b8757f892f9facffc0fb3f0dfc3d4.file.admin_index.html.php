<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:45:11
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:30298548e6757062752-33573780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3133ce2af8b8757f892f9facffc0fb3f0dfc3d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\controllers\\admin_index.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30298548e6757062752-33573780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67570c1932_83903777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67570c1932_83903777')) {function content_548e67570c1932_83903777($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_automargin ow_wide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form">
	    <tr class="ow_tr_first">
	        <th class="ow_name ow_txtleft" colspan="2">
	            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>"blogs+settings"),$_smarty_tpl);?>
</span>
	        </th>
	    </tr>
	    
	    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 ow_tr_last">
	    	<td style="width: 50%">
	    		<?php echo smarty_function_text(array('key'=>"blogs+admin_settings_results_per_page"),$_smarty_tpl);?>

	    	</td>
	    	<td>
	    		<?php echo smarty_function_input(array('name'=>'results_per_page','style'=>"width: 50px;"),$_smarty_tpl);?>
<br />
	    		<?php echo smarty_function_error(array('name'=>'results_per_page'),$_smarty_tpl);?>

	    	</td>
	    </tr>
	</table>
    <div class="clearfix ow_submit ow_stdmargin">
    	<div class="ow_right">
    	<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

    	</div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>