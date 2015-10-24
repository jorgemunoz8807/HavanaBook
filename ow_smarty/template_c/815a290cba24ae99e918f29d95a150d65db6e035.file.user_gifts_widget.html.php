<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 02:39:20
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\components\user_gifts_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:21447548eba58274968-60812368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815a290cba24ae99e918f29d95a150d65db6e035' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\components\\user_gifts_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21447548eba58274968-60812368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gifts' => 0,
    'gift' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548eba5846a895_69093724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548eba5846a895_69093724')) {function content_548eba5846a895_69093724($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_user_gifts .ow_gift_wrapper {
        margin: 0px 2px 0px 0px;
        height: 83px;
        width: 80px;
        overflow: hidden;
    }
    
    .ow_user_gifts .ow_gift_wrapper img { width: 80px; }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix ow_user_gifts">
<?php  $_smarty_tpl->tpl_vars['gift'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gift']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gifts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gift']->key => $_smarty_tpl->tpl_vars['gift']->value){
$_smarty_tpl->tpl_vars['gift']->_loop = true;
?>
	<div class="ow_gift_wrapper">
        <a href="<?php echo smarty_function_url_for_route(array('for'=>"virtual_gifts_view_gift:[giftId=>".((string)$_smarty_tpl->tpl_vars['gift']->value['dto']->id)."]"),$_smarty_tpl);?>
">
            <img <?php if ($_smarty_tpl->tpl_vars['gift']->value['dto']->message!=''){?>title="<?php echo $_smarty_tpl->tpl_vars['gift']->value['dto']->message;?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['gift']->value['imageUrl'];?>
" />
        </a>
	</div>
<?php } ?>
</div><?php }} ?>