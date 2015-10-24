<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 18:29:11
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\plugins_uninstall_request.html" */ ?>
<?php /*%%SmartyHeaderCode:5085548f98f730df72-58746243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394e5ff21f8a347002b1f0c3a0eeebde49d397f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\plugins_uninstall_request.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5085548f98f730df72-58746243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f98f73800e0_55571755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f98f73800e0_55571755')) {function content_548f98f73800e0_55571755($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div style="text-align:center;">

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br /><br />
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_positive','langLabel'=>'admin+plugin_update_yes_button_label','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['redirectUrl']->value)."'"),$_smarty_tpl);?>
</div></div>

</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>