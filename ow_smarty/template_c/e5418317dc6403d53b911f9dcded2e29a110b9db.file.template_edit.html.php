<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:26:50
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\components\template_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:5787548ea95ac3c8f5-81261521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5418317dc6403d53b911f9dcded2e29a110b9db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\components\\template_edit.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5787548ea95ac3c8f5-81261521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'single' => 0,
    'imageUrl' => 0,
    'categoriesSetup' => 0,
    'setPrice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ea95ac7d462_23768537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ea95ac7d462_23768537')) {function content_548ea95ac7d462_23768537($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>
<div id="edit_template_form">
    <div>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-template-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-template-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_3">
            <?php if ($_smarty_tpl->tpl_vars['single']->value){?>
            <tr class="ow_tr_first">
            	<td class="ow_label"><?php echo smarty_function_label(array('name'=>'file'),$_smarty_tpl);?>
</td>
            	<td class="ow_value">
                	<div class="ow_smallmargin"><img src="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" width="80" /></div>
                	<?php echo smarty_function_input(array('name'=>'file'),$_smarty_tpl);?>

            	</td>
            </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['categoriesSetup']->value){?>
            <tr>
            	<td class="ow_label"><?php echo smarty_function_label(array('name'=>'category'),$_smarty_tpl);?>
</td>
            	<td class="ow_value"><?php echo smarty_function_input(array('name'=>'category'),$_smarty_tpl);?>
</td>
            </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['setPrice']->value){?>
            <tr class="ow_tr_last">
            	<td class="ow_label"><?php echo smarty_function_label(array('name'=>'price'),$_smarty_tpl);?>
</td>
            	<td class="ow_value"><?php echo smarty_function_input(array('name'=>'price','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</td>
            </tr>
            <?php }?>
        </table>
        <div class="clearfix">
			<div class="ow_right">
				<?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>

			</div>
		</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-template-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div><?php }} ?>