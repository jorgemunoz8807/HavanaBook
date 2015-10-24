<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:30:09
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\controllers\admin_main.html" */ ?>
<?php /*%%SmartyHeaderCode:19887548e71e187f9b2-73098927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad679b13f81b1a5817a811142531f6e5ee80019' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\controllers\\admin_main.html',
      1 => 1340314700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19887548e71e187f9b2-73098927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e71e18b2436_05705884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e71e18b2436_05705884')) {function content_548e71e18b2436_05705884($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.q-extended-tab
{

}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'QUESTIONS_ConfigSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'QUESTIONS_ConfigSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr>
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'questions+admin_main_settings_title'),$_smarty_tpl);?>
</span>
        </th>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'enable_follow'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'enable_follow'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>"questions+admin_enable_follow_desc"),$_smarty_tpl);?>
</td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_comments'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_comments'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'list_order'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'list_order'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_popups'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_popups'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>"questions+admin_allow_popups_desc"),$_smarty_tpl);?>
</td>
    </tr>

    <tr><td colspan="3" class="ow_submit"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</td></tr>
</table>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'QUESTIONS_ConfigSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>