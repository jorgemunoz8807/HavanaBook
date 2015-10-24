<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:00:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\switch_language.html" */ ?>
<?php /*%%SmartyHeaderCode:11525548e78e435e0a3-03827245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f28fb38c6b2a010fbd82b22c4153f75b7bb829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\switch_language.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11525548e78e435e0a3-03827245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e78e437efc6_19597833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e78e437efc6_19597833')) {function content_548e78e437efc6_19597833($_smarty_tpl) {?><ul class="ow_console_lang">
    <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value){
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
        <li class="ow_console_lang_item" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
';"><span class="<?php echo $_smarty_tpl->tpl_vars['language']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['label'];?>
</span></li>
    <?php } ?>
</ul><?php }} ?>