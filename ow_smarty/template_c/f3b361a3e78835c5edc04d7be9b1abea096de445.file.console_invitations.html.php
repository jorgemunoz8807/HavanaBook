<?php /* Smarty version Smarty-3.1.12, created on 2014-12-20 18:22:58
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\console_invitations.html" */ ?>
<?php /*%%SmartyHeaderCode:418554962f02ba0111-28094453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b361a3e78835c5edc04d7be9b1abea096de445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\console_invitations.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418554962f02ba0111-28094453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'invId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54962f02e29033_85473016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54962f02e29033_85473016')) {function content_54962f02e29033_85473016($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['invId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['invId']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<li class="owm_sidebar_msg_item<?php if (!$_smarty_tpl->tpl_vars['item']->value['viewed']){?> owm_sidebar_msg_item_new<?php }?> clearfix" data-invid="<?php echo $_smarty_tpl->tpl_vars['invId']->value;?>
">
    <div class="owm_sidebar_msg_avatar">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['item']->value['avatar']),$_smarty_tpl);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['contentImage']){?>
    <div class="owm_sidebar_msg_img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['src'];?>
" />
    </div>
    <?php }?>
    <div class="owm_sidebar_msg_info">
        <div class="owm_sidebar_msg_string">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['acceptCommand'])&&!empty($_smarty_tpl->tpl_vars['item']->value['declineCommand'])){?>
        <div class="owm_sidebar_msg_toolbar">
            <a href="javascript://" class="owm_lbutton owm_invite_accept" data-ref="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
" data-cmd="<?php echo $_smarty_tpl->tpl_vars['item']->value['acceptCommand'];?>
">
                <span class="owm_lbutton_ico"><span><?php echo smarty_function_text(array('key'=>'base+accept'),$_smarty_tpl);?>
</span></span>
            </a>
            <a href="javascript://" class="owm_lbutton owm_invite_ignore" data-ref="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
" data-cmd="<?php echo $_smarty_tpl->tpl_vars['item']->value['declineCommand'];?>
">
                <span class="owm_lbutton_ico"><span><?php echo smarty_function_text(array('key'=>'base+ignore'),$_smarty_tpl);?>
</span></span>
            </a>
        </div>
        <?php }?>
    </div>
</li>
<?php } ?><?php }} ?>