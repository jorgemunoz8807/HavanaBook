<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 07:01:10
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\components\profile_page_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:11313548ef7b63627f8-13941736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38fa01f17d922775cac38b6ab84dbf18bf597931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\components\\profile_page_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11313548ef7b63627f8-13941736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_events' => 0,
    'event' => 0,
    'toolbars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ef7b6397a87_72232453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ef7b6397a87_72232453')) {function content_548ef7b6397a87_72232453($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (empty($_smarty_tpl->tpl_vars['my_events']->value)){?>
<div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php } ?>
<?php if (!empty($_smarty_tpl->tpl_vars['toolbars']->value)){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value),$_smarty_tpl);?>
<?php }?>
<?php }?>
<?php }} ?>