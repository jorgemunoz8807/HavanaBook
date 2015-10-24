<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:41
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\controllers\admin_customization.html" */ ?>
<?php /*%%SmartyHeaderCode:16890548e67b18301b5-53586445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06476a46ca6eee60423b3fc11b6867f5af99c7b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\controllers\\admin_customization.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16890548e67b18301b5-53586445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'types' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67b189b7e7_82919491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67b189b7e7_82919491')) {function content_548e67b189b7e7_82919491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<p><?php echo smarty_function_text(array('key'=>'newsfeed+admin_customization_legend'),$_smarty_tpl);?>
</p>

<div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"NEWSFEED_CustomizationForm")); $_block_repeat=true; echo smarty_block_form(array('name'=>"NEWSFEED_CustomizationForm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <?php  $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["type"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["type"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["type"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["type"]->key => $_smarty_tpl->tpl_vars["type"]->value){
$_smarty_tpl->tpl_vars["type"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->iteration++;
 $_smarty_tpl->tpl_vars["type"]->last = $_smarty_tpl->tpl_vars["type"]->iteration === $_smarty_tpl->tpl_vars["type"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["t"]['last'] = $_smarty_tpl->tpl_vars["type"]->last;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_te_first <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['t']['last']){?>ow_tr_last<?php }?>">
                <td class="ow_label"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['type']->value['activity']),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['type']->value['label'];?>
</td>
            </tr>
    <?php } ?>

</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"NEWSFEED_CustomizationForm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>