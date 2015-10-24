<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:49:54
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\decorators\ic.html" */ ?>
<?php /*%%SmartyHeaderCode:12184548e6872dbf288-06035578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f7b132b8de12667a7490fc533699f934800c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\decorators\\ic.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12184548e6872dbf288-06035578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6872e1da92_19615125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6872e1da92_19615125')) {function content_548e6872e1da92_19615125($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_ic_toolbar span{
    display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['first']){?>
	<ul class="ow_regular ow_ic">
<?php }?>

<li>
	<div class="ow_ic_header"><a <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['titleHrefBlank'])){?>target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['data']->value['titleHref'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></div>

	<div class="ow_ic_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['info'];?>
</div>

	<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
  		<div class="ow_ic_toolbar ow_small ow_remark clearfix">
  		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['toolbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['toolbar']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['toolbar']['first']&&(empty($_smarty_tpl->tpl_vars['item']->value['class'])||$_smarty_tpl->tpl_vars['item']->value['class']!='ow_ipc_date')){?> <span class="ow_delimiter">&middot;</span> <?php }?>
  		    <span class="ow_nowrap<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>">
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['href'])){?><a <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['href'])){?></a><?php }?>
  		    </span>
  		<?php } ?>
  		</div>
    <?php }?>
</li>

<?php if ($_smarty_tpl->tpl_vars['data']->value['last']){?>
	</ul>
<?php }?><?php }} ?>