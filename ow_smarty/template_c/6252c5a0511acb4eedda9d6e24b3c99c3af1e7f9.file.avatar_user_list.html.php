<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\avatar_user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:12226548e8c4774cfc4-08463151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6252c5a0511acb4eedda9d6e24b3c99c3af1e7f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\avatar_user_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12226548e8c4774cfc4-08463151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_class' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c4775b9f6_74670240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c4775b9f6_74670240')) {function content_548e8c4775b9f6_74670240($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="owm_avatar_list <?php if (!empty($_smarty_tpl->tpl_vars['css_class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['css_class']->value;?>
<?php }?>">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)){?>
    <div class="owm_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list'),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
<?php } ?>
    <?php }?>
</div><?php }} ?>