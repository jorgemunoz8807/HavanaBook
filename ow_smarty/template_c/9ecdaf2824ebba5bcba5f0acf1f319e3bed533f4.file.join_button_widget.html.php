<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:20:45
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\join_button_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:7851548e8bcd1e9708-22169345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ecdaf2824ebba5bcba5f0acf1f319e3bed533f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\join_button_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7851548e8bcd1e9708-22169345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8bcd206063_29628375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8bcd206063_29628375')) {function content_548e8bcd206063_29628375($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_highbox ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_join_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }} ?>