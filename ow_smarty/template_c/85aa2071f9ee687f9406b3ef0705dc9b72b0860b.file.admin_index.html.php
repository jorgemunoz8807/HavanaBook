<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:16
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\mailbox\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:21014548e6798a81e45-95959596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85aa2071f9ee687f9406b3ef0705dc9b72b0860b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\mailbox\\views\\controllers\\admin_index.html',
      1 => 1416881094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21014548e6798a81e45-95959596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailModeEnabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6798ad3d84_94018654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6798ad3d84_94018654')) {function content_548e6798ad3d84_94018654($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tbody><tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'mailbox+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"active_mode_list"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>"active_mode_list"),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"></td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value){?>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"send_message_interval"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>"send_message_interval",'style'=>"width: 40px"),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'mailbox+settings_label_send_message_interval_seconds'),$_smarty_tpl);?>

        </td>
        <td>
            &nbsp;
        </td>
    </tr>
    <?php }?>

    
    </tbody></table>
<div class="clearfix ow_submit ow_smallmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>