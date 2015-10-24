<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:56:39
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\user_list_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:15223548e8627c9a947-93864457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531b747d929599bac928c6c8f8581faaafdc8daa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\user_list_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15223548e8627c9a947-93864457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userIdList' => 0,
    'id' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8627ca6a63_00187873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8627ca6a63_00187873')) {function content_548e8627ca6a63_00187873($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_lp_avatars">
        <?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userIdList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

        <?php }
if (!$_smarty_tpl->tpl_vars['id']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'groups+user_list_widget_empty'),$_smarty_tpl);?>
</div>
        <?php } ?>
</div>
<?php }} ?>