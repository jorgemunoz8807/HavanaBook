<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 19:40:58
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\tabs.html" */ ?>
<?php /*%%SmartyHeaderCode:14095548fa9ca868584-38926114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03afb2fe37c447cf08c8ba158ef0aa3f27752cfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\tabs.html',
      1 => 1404901688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14095548fa9ca868584-38926114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'tabs' => 0,
    't' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fa9ca883a27_83944983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fa9ca883a27_83944983')) {function content_548fa9ca883a27_83944983($_smarty_tpl) {?><div class="gtabs" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">

    <div class="gtabs-tabs-c ow_smallmargin clearfix">
    <?php  $_smarty_tpl->tpl_vars["t"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["t"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["t"]->key => $_smarty_tpl->tpl_vars["t"]->value){
$_smarty_tpl->tpl_vars["t"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["t"]->key;
?>
        <a class="gtabs-tab <?php echo $_smarty_tpl->tpl_vars['t']->value['icon'];?>
 <?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>gtabs-active<?php }?>" href="javascript://" data-key="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['t']->value['label'];?>

        </a>
    <?php } ?>
    </div>

    <div class="gtabs-contents-c">
    <?php  $_smarty_tpl->tpl_vars["t"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["t"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["t"]->key => $_smarty_tpl->tpl_vars["t"]->value){
$_smarty_tpl->tpl_vars["t"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["t"]->key;
?>
        <div class="gtabs-contents" data-key="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['t']->value['active']){?>style="display: none;"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['t']->value['content'];?>

        </div>
    <?php } ?>
    </div>

</div><?php }} ?>