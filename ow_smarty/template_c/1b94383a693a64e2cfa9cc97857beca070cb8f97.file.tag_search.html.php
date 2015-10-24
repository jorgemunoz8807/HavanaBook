<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:00:08
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\tag_search.html" */ ?>
<?php /*%%SmartyHeaderCode:4991548e6ad83f3b70-69081520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b94383a693a64e2cfa9cc97857beca070cb8f97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\tag_search.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4991548e6ad83f3b70-69081520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_id' => 0,
    'el_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6ad8414f22_54949301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6ad8414f22_54949301')) {function content_548e6ad8414f22_54949301($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
">
   	<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['el_id']->value;?>
" />
   </form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_tag','langLabel'=>'base+tag_search'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>