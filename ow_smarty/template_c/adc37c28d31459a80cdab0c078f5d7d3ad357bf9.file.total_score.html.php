<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:58:55
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\total_score.html" */ ?>
<?php /*%%SmartyHeaderCode:32469548e94bf0330d9-21285006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc37c28d31459a80cdab0c078f5d7d3ad357bf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\total_score.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32469548e94bf0330d9-21285006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e94bf0560d8_29706015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e94bf0560d8_29706015')) {function content_548e94bf0560d8_29706015($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+total_score_label','ratesCount'=>$_smarty_tpl->tpl_vars['info']->value['ratesCount'],'avgScore'=>$_smarty_tpl->tpl_vars['info']->value['avgScore']),$_smarty_tpl);?>

<div style="width:65px;margin:0 auto;">
	<div class="inactive_rate_list">
   	<div class="active_rate_list" style="width:<?php if ($_smarty_tpl->tpl_vars['info']->value['width']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['width'];?>
<?php }else{ ?>0<?php }?>%;">
      </div>
   </div>
</div>
</div>
<?php }} ?>