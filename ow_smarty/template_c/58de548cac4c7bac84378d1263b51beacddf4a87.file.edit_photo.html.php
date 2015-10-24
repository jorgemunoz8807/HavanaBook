<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 19:07:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\edit_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:1605548fa1ea80b999-24594841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58de548cac4c7bac84378d1263b51beacddf4a87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\edit_photo.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1605548fa1ea80b999-24594841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumNameList' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fa1ea8d0113_43919602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fa1ea8d0113_43919602')) {function content_548fa1ea8d0113_43919602($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<div id="photo_edit_form">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'photo-edit-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'photo-edit-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_stdmargin">
            <tr class="ow_alt1 ow_tr_first">
                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'album'),$_smarty_tpl);?>
</td>
                <td class="ow_value">
                    <div class="ow_suggest_field ow_smallmargin">
                        <?php echo smarty_function_input(array('name'=>'album'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'album'),$_smarty_tpl);?>

                        <div class="ow_dropdown_list_wrap">
                            <ul class="ow_dropdown_list" style="z-index: 10;">
                                <li><?php echo smarty_function_text(array('key'=>"photo+create_album"),$_smarty_tpl);?>
<span class="ow_add_item"></span></li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['albumNameList']->value)){?>
                                    <li class="ow_dropdown_delimeter"><div></div></li>
                                    <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumNameList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['album']->value;?>
</li>
                                    <?php } ?>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="ow_dropdown_arrow_down upload_photo_spinner"></div>
                    </div>
                    <div class="new-album" style="display: none">
                        <?php echo smarty_function_input(array('name'=>"album-name"),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>"album-name"),$_smarty_tpl);?>

                        <?php echo smarty_function_input(array('name'=>"description"),$_smarty_tpl);?>

                    </div>
                </td>
            </tr>
            <tr class="ow_alt2">
                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'photo-desc'),$_smarty_tpl);?>
</td>
                <td class="ow_value">
                    <div class="ow_photo_upload_description" style="border-width: 1px;">
                        <?php echo smarty_function_input(array('name'=>'photo-desc'),$_smarty_tpl);?>

                    </div>
                </td>
            </tr>
        </table>
        <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'edit','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'photo-edit-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>