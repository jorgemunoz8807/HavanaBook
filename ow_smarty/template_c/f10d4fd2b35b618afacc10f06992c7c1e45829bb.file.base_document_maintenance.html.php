<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:05:39
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\base_document_maintenance.html" */ ?>
<?php /*%%SmartyHeaderCode:10810548e88435e7d32-66258330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10d4fd2b35b618afacc10f06992c7c1e45829bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\base_document_maintenance.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10810548e88435e7d32-66258330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disableMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e884360cfc2_83769615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e884360cfc2_83769615')) {function content_548e884360cfc2_83769615($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.maintenance_cont{
    width:500px;
    margin:0 auto;
    padding-top: 200px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="maintenance_cont">
    <?php echo smarty_function_text(array('key'=>'admin+maintenance_text_value'),$_smarty_tpl);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['disableMessage']->value)){?><div style="padding-top: 50px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['disableMessage']->value;?>
</div><?php }?>
</div><?php }} ?>