<?php /* Smarty version Smarty-3.1.12, created on 2014-12-21 01:44:19
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\settings_user_input.html" */ ?>
<?php /*%%SmartyHeaderCode:29642549696731d9d92-96639346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f365d5cc51ec6a2d7909f8351f62bd0e877bc94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\settings_user_input.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29642549696731d9d92-96639346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'maxUploadMaxFilesize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_549696733c9181_67597521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549696733c9181_67597521')) {function content_549696733c9181_67597521($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'input_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'input_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_file"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_user_content'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"user_input",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label" style="width: 30%;"><?php echo smarty_function_label(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'user_custom_html'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'user_custom_html'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"user_input",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'user_rich_media'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'user_rich_media'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_comment"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_comments'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"comments",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'comments_rich_media'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_picture"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_rich_media'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'allow_photo_upload'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'max_upload_size','style'=>"width:30px;"),$_smarty_tpl);?>
 MB  <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+max_upload_filesize','value'=>$_smarty_tpl->tpl_vars['maxUploadMaxFilesize']->value),$_smarty_tpl);?>
</span><br /><?php echo smarty_function_error(array('name'=>'max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class=" ow_tr_last <?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'resource_list'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'resource_list'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_picture"><?php echo smarty_function_text(array('key'=>'admin+user_input_settings_attachments'),$_smarty_tpl);?>
</span>
            </th>
        </tr>        
        <tr class="<?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'attch_max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'attch_max_upload_size','style'=>"width:30px;"),$_smarty_tpl);?>
 MB  <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+max_upload_filesize','value'=>$_smarty_tpl->tpl_vars['maxUploadMaxFilesize']->value),$_smarty_tpl);?>
</span><br /><?php echo smarty_function_error(array('name'=>'attch_max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class=" ow_tr_last <?php echo smarty_function_cycle(array('name'=>"rm",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'attch_ext_list'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'attch_ext_list'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'attch_ext_list'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'attch_ext_list'),$_smarty_tpl);?>
</td>
        </tr>
    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'input_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>