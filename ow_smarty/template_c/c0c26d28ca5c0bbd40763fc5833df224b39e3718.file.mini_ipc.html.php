<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:57:28
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\decorators\mini_ipc.html" */ ?>
<?php /*%%SmartyHeaderCode:24951548e6a3876e231-28957681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c26d28ca5c0bbd40763fc5833df224b39e3718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\decorators\\mini_ipc.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24951548e6a3876e231-28957681',
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
  'unifunc' => 'content_548e6a387e13b1_85254814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6a387e13b1_85254814')) {function content_548e6a387e13b1_85254814($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_mini_ipc_toolbar span{
    display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_mini_ipc ow_smallmargin <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?> clearfix">
	<div class="ow_mini_ipc_picture">
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['avatar'])){?>
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','src'=>$_smarty_tpl->tpl_vars['data']->value['avatar']['src'],'title'=>$_smarty_tpl->tpl_vars['data']->value['avatar']['title']),$_smarty_tpl);?>

        <?php }else{ ?>
    		<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageSrc'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" />
    	<?php }?>
    </div>
	<div class="ow_mini_ipc_info">
		<div class="ow_mini_ipc_header"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['profileUrl'];?>
" class="mipc_url"><?php echo $_smarty_tpl->tpl_vars['data']->value['displayName'];?>
</a>
		<div class="ow_mini_ipc_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['date'])||!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
			<div class="clearfix">
	      		<div class="ow_mini_ipc_toolbar ow_remark ow_tiny">
	                <span class="ow_nowrap"><?php echo $_smarty_tpl->tpl_vars['data']->value['date'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?> &middot;<?php }?>
		            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
			      		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['toolbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['toolbar']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
                            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['toolbar']['first']){?> <span class="ow_delimiter">&middot;</span> <?php }?>
			      		    <span class="ow_nowrap<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>">                                                
                                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?><a<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

                                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?></a><?php }?>
			      		    </span>
			      		<?php } ?>
			      	<?php }?>
	      		</div>
      		</div>
      		<?php }?>
   </div>
</div>
<?php }} ?>