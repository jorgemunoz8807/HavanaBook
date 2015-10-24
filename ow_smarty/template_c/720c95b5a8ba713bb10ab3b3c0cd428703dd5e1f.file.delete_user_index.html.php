<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 19:21:54
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\delete_user_index.html" */ ?>
<?php /*%%SmartyHeaderCode:16093548fa55283f5c8-37744537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '720c95b5a8ba713bb10ab3b3c0cd428703dd5e1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\delete_user_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16093548fa55283f5c8-37744537',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fa55289c3e5_77479449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fa55289c3e5_77479449')) {function content_548fa55289c3e5_77479449($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_text(array('key'=>"base+delete_user_confirmation"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <form name="deleteUser" method="post">
        <?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'buttonName'=>"delete_user_button",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

        <?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'buttonName'=>"cansel_button",'langLabel'=>"base+delete_user_cancel_button"),$_smarty_tpl);?>

    </form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>