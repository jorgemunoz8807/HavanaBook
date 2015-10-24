<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_topusers\views\components\total_score.html" */ ?>
<?php /*%%SmartyHeaderCode:5243548e56be246131-87018224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc03b0e26218937bde0d85e1c1bfa2f34eeab592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_topusers\\views\\components\\total_score.html',
      1 => 1324826326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5243548e56be246131-87018224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be24ff79_06496065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be24ff79_06496065')) {function content_548e56be24ff79_06496065($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="total_score ow_smallmargin">
	<span class="ow_small"><?php echo smarty_function_text(array('key'=>'ocstopusers+total_score_label','ratesCount'=>$_smarty_tpl->tpl_vars['info']->value['ratesCount'],'avgScore'=>$_smarty_tpl->tpl_vars['info']->value['avgScore']),$_smarty_tpl);?>
</span>
	<div style="width: 65px; margin: 0 auto;">
	    <div class="inactive_rate_list">
	        <div class="active_rate_list" style="width:<?php if ($_smarty_tpl->tpl_vars['info']->value['width']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['width'];?>
<?php }else{ ?>0<?php }?>%;"></div>
	   </div>
	</div>
</div><?php }} ?>