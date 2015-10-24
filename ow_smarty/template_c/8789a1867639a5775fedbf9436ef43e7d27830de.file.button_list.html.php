<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:10:18
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\button_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3479548f15fa827249-16560515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8789a1867639a5775fedbf9436ef43e7d27830de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\button_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3479548f15fa827249-16560515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'buttons' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f15fa860154_91107889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f15fa860154_91107889')) {function content_548f15fa860154_91107889($_smarty_tpl) {?><div class="owm_btn_list owm_std_margin_bottom clearfix">
    <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value){
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?>
        <div class="owm_btn_list_item_wrap owm_view_more owm_float_right">
            <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

        </div>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
        <div class="owm_btn_list_item_wrap owm_float_right">
            <a <?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
>
                <span class="owm_btn_list_item_c"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            </a>
        </div>
    <?php } ?>
    
</div><?php }} ?>