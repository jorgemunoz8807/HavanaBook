<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:58:38
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\friends\views\components\user_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:16533548e5c6e276186-28999125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0edb7c4b5b80ed33e4d01a0aceead91f6cb07915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\friends\\views\\components\\user_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16533548e5c6e276186-28999125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userList' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c6e29ce30_57183341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c6e29ce30_57183341')) {function content_548e5c6e29ce30_57183341($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_lp_avatars">
	<?php if (!empty($_smarty_tpl->tpl_vars['userList']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

		<?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)){?>
			<?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>

		<?php }?>

    <?php }else{ ?>
    	<center><?php echo smarty_function_text(array('key'=>'friends+user_widget_empty'),$_smarty_tpl);?>
</center>
    <?php }?>	
</div><?php }} ?>