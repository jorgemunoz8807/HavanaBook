<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:51:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:5720548e930d58bc18-62729425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3941c06a5b18240336dc9f9391ae787f1357f869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\user_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5720548e930d58bc18-62729425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'dto' => 0,
    'id' => 0,
    'avatars' => 0,
    'displayNameList' => 0,
    'onlineInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e930d5aa878_14511460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e930d5aa878_14511460')) {function content_548e930d5aa878_14511460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['dto'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['dto']->value->id, null, 0);?>
<div class="owm_content_list_item" onclick=" window.location.href='<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]['url'];?>
'  ">
    <div class="owm_user_list_item">
        <div class="owm_avatar">
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

        </div>
        <div class="owm_user_list_name"><span><?php echo $_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value];?>
</span></div>
        <?php if (!empty($_smarty_tpl->tpl_vars['onlineInfo']->value)&&$_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value]){?>
            <div class="owm_profile_online">
            </div>
        <?php }?>
    </div>
</div>
<?php } ?>
<?php }else{ ?>
    <div class="owm_nocontent"><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</div>
<?php }?>
<?php }} ?>