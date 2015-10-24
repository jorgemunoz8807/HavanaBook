<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:19:53
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\theme_graphics.html" */ ?>
<?php /*%%SmartyHeaderCode:6998548e7d892710e3-83835396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3c26513738e11f5e401a48b29ad01eba5f2ef02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\theme_graphics.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6998548e7d892710e3-83835396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'images' => 0,
    'image' => 0,
    'confirmMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e7d892d3eb9_00426444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e7d892d3eb9_00426444')) {function content_548e7d892d3eb9_00426444($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.css_image{
	background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #666;
	display:block;
	height:30px;
	margin:0 auto;
	width:300px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<div class="ow_automargin ow_wide">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin ow_txtcenter','iconClass'=>"ow_ic_up_arrow",'langLabel'=>'admin+theme_graphics_upload_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_txtcenter','iconClass'=>"ow_ic_up_arrow",'langLabel'=>'admin+theme_graphics_upload_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'upload_graphics')); $_block_repeat=true; echo smarty_block_form(array('name'=>'upload_graphics'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo smarty_function_input(array('name'=>'file'),$_smarty_tpl);?>

<?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'upload_graphics'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_txtcenter','iconClass'=>"ow_ic_up_arrow",'langLabel'=>'admin+theme_graphics_upload_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_picture",'langLabel'=>'admin+theme_graphics_list_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_picture",'langLabel'=>'admin+theme_graphics_list_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1">
<tr class="ow_tr_first">
	<th style="width:350px;"><?php echo smarty_function_text(array('key'=>'admin+theme_graphics_table_preview'),$_smarty_tpl);?>
</th>
	<th style="width:300px;"><?php echo smarty_function_text(array('key'=>'admin+theme_graphics_table_url'),$_smarty_tpl);?>
</th>
	<th><?php echo smarty_function_text(array('key'=>'admin+theme_graphics_table_delete'),$_smarty_tpl);?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>ow_tr_last<?php }?>  <?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
" onmouseover="$('a', $(this)).css({display:'inline'});" onmouseout="$('a', $(this)).css({display:'none'});">
	<td><span class="css_image" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
);"></span></td>
	<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" /></td>
	<td style="text-align:center;">
            <a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['image']->value['delUrl'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirmMessage']->value;?>
');" style="display:none;">Delete</a>
	</td>
</tr>
<?php } ?>
</table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_picture",'langLabel'=>'admin+theme_graphics_list_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>