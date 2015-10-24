<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:27:26
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\base_document_page404.html" */ ?>
<?php /*%%SmartyHeaderCode:6518548e632ea372b3-86146081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac95e16b6ab8ddd0535e1f1ee72782414e95ed94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\base_document_page404.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6518548e632ea372b3-86146081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base404RedirectMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e632ea56da3_40392827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e632ea56da3_40392827')) {function content_548e632ea56da3_40392827($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)){?><?php echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);?>
<?php }?>
<?php }} ?>