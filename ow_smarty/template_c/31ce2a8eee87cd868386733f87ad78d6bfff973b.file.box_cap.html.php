<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\decorators\box_cap.html" */ ?>
<?php /*%%SmartyHeaderCode:31473548e56be2cafb3-44411508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ce2a8eee87cd868386733f87ad78d6bfff973b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\decorators\\box_cap.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31473548e56be2cafb3-44411508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be2f3a29_79839060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be2f3a29_79839060')) {function content_548e56be2f3a29_79839060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])){?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
<?php }else{ ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php }else{ ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }else{ ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])){?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
<?php }?>
		</div>
	</div>
</div><?php }} ?>