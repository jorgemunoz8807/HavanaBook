<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:48:25
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\email_verify_index.html" */ ?>
<?php /*%%SmartyHeaderCode:15375548e5a095310d8-55348112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b65973043d3ea03a3cdf00f7dc72bee0a55376' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\email_verify_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15375548e5a095310d8-55348112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5a09593dd9_41183825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5a09593dd9_41183825')) {function content_548e5a09593dd9_41183825($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 215px 15px 15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 215px 15px 15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_text(array('key'=>"base+email_verify_promo"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 215px 15px 15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'emailVerifyForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'emailVerifyForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div style="display: inline;"><?php echo smarty_function_label(array('name'=>'email'),$_smarty_tpl);?>
:</div><div style="display: inline;"> <?php echo smarty_function_input(array('name'=>'email','style'=>"width:330px;"),$_smarty_tpl);?>
</div>
                        <?php echo smarty_function_submit(array('name'=>'sendVerifyMail','class'=>'ow_ic_mail'),$_smarty_tpl);?>
<br/><div style="color: red;"><?php echo smarty_function_error(array('name'=>'email'),$_smarty_tpl);?>
</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'emailVerifyForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>