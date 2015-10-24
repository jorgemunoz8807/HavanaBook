<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\user_groups_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:30636548e56be183f14-15503213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd41ab9d432e301f75b5b83f1e7d63efe724c3e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\user_groups_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30636548e56be183f14-15503213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be18efe6_44936211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be18efe6_44936211')) {function content_548e56be18efe6_44936211($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_lp_avatars">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="ow_lp_wrapper" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="45" />
            </a>
        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>'groups+user_groups_widget_empty'),$_smarty_tpl);?>

            </div>
        <?php } ?>
</div>
<?php }} ?>