<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:20:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\notifications\mobile\views\components\console_items.html" */ ?>
<?php /*%%SmartyHeaderCode:2683548f1844ba4f20-48126138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69cf9d720b3ce971ccd37c1763f3e719a58f852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\notifications\\mobile\\views\\components\\console_items.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2683548f1844ba4f20-48126138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'nid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f1844be23f0_97882702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f1844be23f0_97882702')) {function content_548f1844be23f0_97882702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['nid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['nid']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<li class="owm_sidebar_msg_item<?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']){?> owm_sidebar_msg_disabled<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['item']->value['viewed']){?> owm_sidebar_msg_item_new<?php }?> clearfix" data-nid="<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
"
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['url'])){?> <?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']){?>data-disabled-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php }else{ ?>data-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php }?><?php }?> onclick="" style="cursor: pointer">
    <div class="owm_sidebar_msg_avatar">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['item']->value['avatar']),$_smarty_tpl);?>

    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['contentImage'])){?>
    <div class="owm_sidebar_msg_img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['src'];?>
" />
    </div>
    <?php }?>
    <div class="owm_sidebar_msg_info">
        <div class="owm_sidebar_msg_string">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']){?><div class="owm_sidebar_msg_disabled_item"></div><?php }?>
</li>
<?php } ?><?php }} ?>