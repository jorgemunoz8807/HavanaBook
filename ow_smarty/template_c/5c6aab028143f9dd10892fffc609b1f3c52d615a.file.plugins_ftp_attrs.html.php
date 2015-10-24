<?php /* Smarty version Smarty-3.1.12, created on 2014-12-21 22:02:24
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\plugins_ftp_attrs.html" */ ?>
<?php /*%%SmartyHeaderCode:112145497b3f087aee8-27820016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c6aab028143f9dd10892fffc609b1f3c52d615a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\plugins_ftp_attrs.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112145497b3f087aee8-27820016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5497b3f09d4f40_73669344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497b3f09d4f40_73669344')) {function content_5497b3f09d4f40_73669344($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_active_plugins tr, .ow_inactive_plugins tr{
    border-top:1px solid #ccc;
}
.ow_plugin_controls{
    display:none;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_narrow ow_automargin" >
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'ftp')); $_block_repeat=true; echo smarty_block_form(array('name'=>'ftp'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_form ow_smallmargin">
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'host'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'host'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'login'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'login'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'password'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'port'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'port'),$_smarty_tpl);?>
</td>
       </tr>
   </table>
   <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'ftp'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>