<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\components\upcoming_events.html" */ ?>
<?php /*%%SmartyHeaderCode:22241548e531092ef35-30755422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096774e9d6f9e79e135b43fc408f71ca02e0f197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\components\\upcoming_events.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22241548e531092ef35-30755422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'no_content_message' => 0,
    'event' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5310941967_84047426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5310941967_84047426')) {function content_548e5310941967_84047426($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (empty($_smarty_tpl->tpl_vars['events']->value)){?>
<div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['no_content_message']->value;?>
</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php } ?>
<?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>
<?php }?>
<?php }?><?php }} ?>