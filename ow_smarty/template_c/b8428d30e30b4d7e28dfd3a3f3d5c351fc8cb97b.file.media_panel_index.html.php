<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:23:12
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\media_panel_index.html" */ ?>
<?php /*%%SmartyHeaderCode:26502548e8c60f30033-93084792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8428d30e30b4d7e28dfd3a3f3d5c351fc8cb97b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\media_panel_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26502548e8c60f30033-93084792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'maxSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c61041084_54486871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c61041084_54486871')) {function content_548e8c61041084_54486871($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"image-upload")); $_block_repeat=true; echo smarty_block_form(array('name'=>"image-upload"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<center>
	<table class="ow_table_1 ow_form">
		<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
 ow_tr_first">
			<td class="ow_label">
				<?php echo smarty_function_label(array('name'=>"file"),$_smarty_tpl);?>

			</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>"file"),$_smarty_tpl);?>
<br />
				<?php echo smarty_function_error(array('name'=>"file"),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_tr_last">
			<td colspan="2" align="center">
				<p>
					<?php echo smarty_function_text(array('key'=>'base+tf_img_types'),$_smarty_tpl);?>
 <span class="ow_txt_value">JPG</span>/<span class="ow_txt_value">PNG</span>/<span class="ow_txt_value">GIF</span>. <?php echo smarty_function_text(array('key'=>'base+tf_img_max_size'),$_smarty_tpl);?>
 <span class="ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['maxSize']->value;?>
 Mb</span>.
	
				</p>	
			</td>
		</tr>
	</table>
	<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>
</div></div>	
</center>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"image-upload"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>