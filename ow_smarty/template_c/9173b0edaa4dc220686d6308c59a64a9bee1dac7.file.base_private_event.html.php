<?php /* Smarty version Smarty-3.1.12, created on 2014-12-17 00:51:48
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\controllers\base_private_event.html" */ ?>
<?php /*%%SmartyHeaderCode:236525491442428f573-80346592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9173b0edaa4dc220686d6308c59a64a9bee1dac7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\controllers\\base_private_event.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236525491442428f573-80346592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
    'creator' => 0,
    'userUrl' => 0,
    'displayName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5491442439c1b6_12106149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5491442439c1b6_12106149')) {function content_5491442439c1b6_12106149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_center ow_std_margin" style="margin-top: 90px;">
    <?php echo smarty_function_text(array('key'=>'event+private_event_text'),$_smarty_tpl);?>

</div>

<?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_automargin ow_supernarrow','avatar'=>$_smarty_tpl->tpl_vars['avatar']->value,'content'=>$_smarty_tpl->tpl_vars['creator']->value,'infoString'=>"<a href='".((string)$_smarty_tpl->tpl_vars['userUrl']->value)."'>".((string)$_smarty_tpl->tpl_vars['displayName']->value)."</a>"),$_smarty_tpl);?>

<?php }} ?>