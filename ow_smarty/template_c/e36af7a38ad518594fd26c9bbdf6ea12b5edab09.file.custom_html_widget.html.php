<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\custom_html_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:11972548e531049b749-12813322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36af7a38ad518594fd26c9bbdf6ea12b5edab09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\custom_html_widget.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11972548e531049b749-12813322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e53104a2752_59246440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e53104a2752_59246440')) {function content_548e53104a2752_59246440($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }else{ ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }} ?>