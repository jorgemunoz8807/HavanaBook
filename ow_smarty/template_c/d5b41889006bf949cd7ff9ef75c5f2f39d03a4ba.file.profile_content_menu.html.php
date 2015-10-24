<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\profile_content_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:9973548e92ac53e8b1-61918886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b41889006bf949cd7ff9ef75c5f2f39d03a4ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\profile_content_menu.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9973548e92ac53e8b1-61918886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92ac54ef49_36162034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92ac54ef49_36162034')) {function content_548e92ac54ef49_36162034($_smarty_tpl) {?><div class="owm_profile_nav">
    <ul class="owm_profile_nav_list clearfix">
        <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
            <li>
                <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
>
                    <span class="owm_profile_nav_img<?php if (!empty($_smarty_tpl->tpl_vars['action']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['action']->value['img'])){?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['action']->value['img'];?>
)"<?php }?>></span>
                    <span class="owm_profile_nav_txt"><?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>
</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div><?php }} ?>