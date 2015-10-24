<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:55:56
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\breadcrumb.html" */ ?>
<?php /*%%SmartyHeaderCode:11974548e85fc505f12-37881888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3d275c1a2c9042d369ca1aafb19b57365e8f29f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\breadcrumb.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11974548e85fc505f12-37881888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'items' => 0,
    'crumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e85fc560876_15428331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e85fc560876_15428331')) {function content_548e85fc560876_15428331($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_breadcrumb ow_stdmargin clearfix')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_breadcrumb ow_stdmargin clearfix'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	<?php if ($_smarty_tpl->tpl_vars['title']->value!=''){?><span class="ow_breadcrumb_title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><?php }?>
	
	<?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['crumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['crumb']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value){
$_smarty_tpl->tpl_vars['crumb']->_loop = true;
 $_smarty_tpl->tpl_vars['crumb']->iteration++;
 $_smarty_tpl->tpl_vars['crumb']->last = $_smarty_tpl->tpl_vars['crumb']->iteration === $_smarty_tpl->tpl_vars['crumb']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c']['last'] = $_smarty_tpl->tpl_vars['crumb']->last;
?>
        <span class="ow_breadcrumb_item<?php if (!empty($_smarty_tpl->tpl_vars['crumb']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['crumb']->value['class'];?>
<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['crumb']->value['href'])){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['label'];?>
</a>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['crumb']->value['label'];?>

        <?php }?>
        </span>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['c']['last']){?>&raquo;<?php }?>
	<?php } ?>
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_breadcrumb ow_stdmargin clearfix'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>