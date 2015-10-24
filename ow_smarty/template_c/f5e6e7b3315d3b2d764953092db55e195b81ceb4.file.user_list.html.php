<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:50:01
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\hint\views\components\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3325548e5a69045238-75444148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e6e7b3315d3b2d764953092db55e195b81ceb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\hint\\views\\components\\user_list.html',
      1 => 1399527838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3325548e5a69045238-75444148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'avatars' => 0,
    'user' => 0,
    'viewAll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5a69071f65_98355671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5a69071f65_98355671')) {function content_548e5a69071f65_98355671($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>



<div class="hint-user-list" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avatars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['src'];?>
" /></a>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['viewAll']->value){?>
        <a href="javascript://" class="hint-view-all avatar_list_more_icon" title="<?php echo smarty_function_text(array('key'=>"hint+view_all_users_title"),$_smarty_tpl);?>
"></a>
    <?php }?>
</div><?php }} ?>