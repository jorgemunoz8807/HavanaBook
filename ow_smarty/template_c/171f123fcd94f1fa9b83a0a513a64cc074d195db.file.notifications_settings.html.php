<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:31:42
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\notifications\views\controllers\notifications_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:5135548e642eaf3dc9-07232786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171f123fcd94f1fa9b83a0a513a64cc074d195db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\notifications\\views\\controllers\\notifications_settings.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5135548e642eaf3dc9-07232786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'actions' => 0,
    'plugin' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e642eb38d04_97537603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e642eb38d04_97537603')) {function content_548e642eb38d04_97537603($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>




<div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"notificationSettingForm")); $_block_repeat=true; echo smarty_block_form(array('name'=>"notificationSettingForm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">

    <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['plugin']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['plugin']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->iteration++;
 $_smarty_tpl->tpl_vars['plugin']->last = $_smarty_tpl->tpl_vars['plugin']->iteration === $_smarty_tpl->tpl_vars['plugin']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["plugins"]['last'] = $_smarty_tpl->tpl_vars['plugin']->last;
?>
	    <tr class="ow_tr_first">
	        <th class="ow_name ow_txtleft" colspan="2">
	            <span class="ow_section_icon <?php echo $_smarty_tpl->tpl_vars['plugin']->value['icon'];?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['label'];?>
</span>
	        </th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['action']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['action']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->iteration++;
 $_smarty_tpl->tpl_vars['action']->last = $_smarty_tpl->tpl_vars['action']->iteration === $_smarty_tpl->tpl_vars['action']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["actions"]['last'] = $_smarty_tpl->tpl_vars['action']->last;
?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['actions']['last']){?>ow_tr_last<?php }?>">
		        <td class="ow_label"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['action']->value['action']),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['action']->value['description'];?>
</td>
		    </tr>
	    <?php } ?>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['plugins']['last']){?>
			<tr class="ow_tr_delimiter"><td></td></tr>
		<?php }?>
    <?php } ?>

</table>

<table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>"notifications+config_schedule_title"),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="ow_alt1 ow_tr_last">
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"schedule"),$_smarty_tpl);?>
</td>
        </tr>
</table>

<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"notificationSettingForm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>