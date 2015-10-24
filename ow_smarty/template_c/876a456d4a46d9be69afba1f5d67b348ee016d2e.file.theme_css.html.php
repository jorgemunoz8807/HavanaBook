<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:19:51
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\theme_css.html" */ ?>
<?php /*%%SmartyHeaderCode:9656548e7d87a1e6c6-20388597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876a456d4a46d9be69afba1f5d67b348ee016d2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\theme_css.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9656548e7d87a1e6c6-20388597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e7d87a7ef83_59382485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e7d87a7ef83_59382485')) {function content_548e7d87a7ef83_59382485($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


textarea.edit_css{
    height:400px;
}
.css_code pre{
	padding:10px;
	height:400px;
	overflow:scroll;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="css_code"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-css')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-css'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo smarty_function_input(array('name'=>'css','class'=>'edit_css'),$_smarty_tpl);?>

<div class="clearfix ow_smallmargin">
<div class="ow_right" style="padding-top: 20px;padding-left: 10px; padding-right: 15px;">
<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-css'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>