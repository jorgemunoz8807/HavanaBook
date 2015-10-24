<?php /* Smarty version Smarty-3.1.12, created on 2014-12-18 23:09:19
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\delete_user.html" */ ?>
<?php /*%%SmartyHeaderCode:67365493cf1fd20737-23777652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ec637f81f7a4f3ad216457cde133b09118d894' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\delete_user.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67365493cf1fd20737-23777652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5493cf1fd98ab2_70359875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493cf1fd98ab2_70359875')) {function content_5493cf1fd98ab2_70359875($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_stdmargin" style="text-align: center;">
        <?php echo smarty_function_text(array('key'=>"base+admin_delete_user_text"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseDCButton",'type'=>"submit",'buttonName'=>"delete_user_button",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>