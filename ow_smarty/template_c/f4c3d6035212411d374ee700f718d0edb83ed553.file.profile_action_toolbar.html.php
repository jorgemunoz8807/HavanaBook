<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\profile_action_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:31973548e56be581f55-27119557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c3d6035212411d374ee700f718d0edb83ed553' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\profile_action_toolbar.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31973548e56be581f55-27119557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'action' => 0,
    'groups' => 0,
    'group' => 0,
    'cmpsMarkup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be58d617_84407046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be58d617_84407046')) {function content_548e56be58d617_84407046($_smarty_tpl) {?><div class="ow_profile_gallery_action_toolbar ow_profile_action_toolbar_wrap clearfix ow_stdmargin">
    <ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_left">
        <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
            <li>
                <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                    <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

                </a>
            </li>
        <?php } ?>
    </ul>

    <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value){
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

    <?php } ?>

    <?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

</div>
<?php }} ?>