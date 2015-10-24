<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:45:09
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\user_standard_sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:5071548e8375863143-35730069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ee0c489a6cd0151a0fea56a9d0c44569e75098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\user_standard_sign_in.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5071548e8375863143-35730069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_in_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e83758811f2_74389798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e83758811f2_74389798')) {function content_548e83758811f2_74389798($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }} ?>