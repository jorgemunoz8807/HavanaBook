<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 03:50:39
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\controllers\groups_create.html" */ ?>
<?php /*%%SmartyHeaderCode:10287548ecb0f5944e6-00298971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0002728e9acaffc888808232c6758321d083bd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\controllers\\groups_create.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10287548ecb0f5944e6-00298971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ecb0f5f4b25_95422139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ecb0f5f4b25_95422139')) {function content_548ecb0f5f4b25_95422139($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="ow_create_group clearfix">

    <div class="ow_superwide ow_automargin">
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'GROUPS_CreateGroupForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	        <table class="ow_table_1 ow_form">
	            <tr class="ow_alt2 ow_tr_first">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt2">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanView'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt2 ow_tr_last">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	        </table>
            <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_new'),$_smarty_tpl);?>
</div></div>

	    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

</div>
<?php }} ?>