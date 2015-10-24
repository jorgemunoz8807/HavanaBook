<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 22:41:43
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\block_user.html" */ ?>
<?php /*%%SmartyHeaderCode:4391548fd427668221-27824060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84604d953ff43f793e8e04dccbfb909e6c66f883' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\block_user.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4391548fd427668221-27824060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fd4277c1596_89692341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fd4277c1596_89692341')) {function content_548fd4277c1596_89692341($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_center">
        <?php echo smarty_function_text(array('key'=>"base+user_block_confirm_message"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseBlockButton",'type'=>"submit",'buttonName'=>"user_block_btn",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+user_block_btn_lbl"),$_smarty_tpl);?>

        </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>