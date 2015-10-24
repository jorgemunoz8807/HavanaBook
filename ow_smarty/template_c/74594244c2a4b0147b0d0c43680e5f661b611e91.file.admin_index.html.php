<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:44:26
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\uavatars\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:12421548e672ae6e643-72765368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74594244c2a4b0147b0d0c43680e5f661b611e91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\uavatars\\views\\controllers\\admin_index.html',
      1 => 1416989860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12421548e672ae6e643-72765368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active' => 0,
    'pluginUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e672ae9e477_14436218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e672ae9e477_14436218')) {function content_548e672ae9e477_14436218($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>



<?php if ($_smarty_tpl->tpl_vars['active']->value){?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'configForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>'uavatars+general_section'),$_smarty_tpl);?>
</span>
            </th>
        </tr>

        <tr class="ow_tr_last ow_alt1">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'uavatars+config_photo_album_name'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'photo_album_name'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'photo_album_name'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'uavatars+config_photo_album_name_desc'),$_smarty_tpl);?>
</td>
        </tr>

    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>

<div class="ow_anno ow_stdmargin" style="text-align: center;">
    <?php echo smarty_function_text(array('key'=>"uavatars+plugin_required_tip",'pluginUrl'=>$_smarty_tpl->tpl_vars['pluginUrl']->value),$_smarty_tpl);?>

</div>

<?php }?>

<?php }} ?>