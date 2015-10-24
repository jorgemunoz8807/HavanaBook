<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_topusers\views\components\index_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:4807548e5310979024-20617720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58d9a91b88a8f686bfc33fc5a9098e42afda1ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_topusers\\views\\components\\index_widget.html',
      1 => 1355934962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4807548e5310979024-20617720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'user' => 0,
    'userId' => 0,
    'avatars' => 0,
    'scores' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e531098f721_05417653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e531098f721_05417653')) {function content_548e531098f721_05417653($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .topuser_cont {
        display: inline-block; 
        width: 70px;
        margin: 5px;
        text-align: center;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix ow_center">
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userId', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['user']->value['dto']->id;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <div class="topuser_cont">
	    <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

	    <?php if ($_smarty_tpl->tpl_vars['scores']->value[$_smarty_tpl->tpl_vars['userId']->value]){?><?php echo BASE_CTRL_Rate::displayRate(array('avg_rate'=>$_smarty_tpl->tpl_vars['scores']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>
<?php }?>
    </div>
<?php } ?>
</div><?php }} ?>