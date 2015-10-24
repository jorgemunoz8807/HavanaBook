<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:49:14
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\settings_user.html" */ ?>
<?php /*%%SmartyHeaderCode:14435548e5a3a32a185-44548371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209ebe6e0dadc306351962bd0028dba6c8391c45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\settings_user.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14435548e5a3a32a185-44548371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'displayConfirmEmail' => 0,
    'maxUploadMaxFilesize' => 0,
    'avatar' => 0,
    'customAvatar' => 0,
    'avatarBig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5a3a39c3c2_57236323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5a3a39c3c2_57236323')) {function content_548e5a3a39c3c2_57236323($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
    $("#avatar_change_btn").click(function(){
        $(this).hide();
        $("#cancel_change").show();
        $("#avatar_input").show();
    });
    
    $("#big_avatar_change_btn").click(function(){
        $(this).hide();
        $("#cancel_big_change").show();
        $("#big_avatar_input").show();
    });
    
    $("#cancel_change").click(function(){
        $(this).hide();
        $("#avatar_change_btn").show();
        $("#avatar_input").html('<input type="file" name="avatar" />');
        $("#avatar_input").hide();
    });
    
    $("#cancel_big_change").click(function(){
        $(this).hide();
        $("#big_avatar_change_btn").show();
        $("#big_avatar_input").html('<input type="file" name="bigAvatar" />');
        $("#big_avatar_input").hide();
    });
    
    $("#avatar_delete_btn").click(function(){
        if ( confirm(OW.getLanguageText('admin', 'confirm_avatar_delete')) ) 
        {
            window.location.href = "<?php echo smarty_function_url_for_route(array('for'=>'admin_settings_user'),$_smarty_tpl);?>
?del-avatar=1";
        }
    });
    
    $("#big_avatar_delete_btn").click(function(){
        if ( confirm(OW.getLanguageText('admin', 'confirm_avatar_delete')) ) 
        {
            window.location.href = "<?php echo smarty_function_url_for_route(array('for'=>'admin_settings_user'),$_smarty_tpl);?>
?del-avatar=2";
        }
    });
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'userSettingsForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'userSettingsForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_monitor"><?php echo smarty_function_text(array('key'=>'admin+user_display_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
   <tr class="ow_alt1 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'displayName'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'displayName'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'displayName'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_text(array('key'=>'admin+user_settings_display_name_desc'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_tr_delimiter"><td></td></tr>
    <?php if ($_smarty_tpl->tpl_vars['displayConfirmEmail']->value){?>
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_mail"><?php echo smarty_function_text(array('key'=>'admin+user_settings_email'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt1 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'confirmEmail'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'confirmEmail'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'confirmEmail'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_text(array('key'=>'admin+user_settings_confirm_email_desc'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_tr_delimiter"><td></td></tr>
    <?php }?>
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_picture"><?php echo smarty_function_text(array('key'=>'admin+user_avatar_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'avatarSize'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'avatarSize','class'=>'ow_settings_input'),$_smarty_tpl);?>
 px<br /><?php echo smarty_function_error(array('name'=>'avatarSize'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+user_settings_avatar_size_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'bigAvatarSize'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'bigAvatarSize','class'=>'ow_settings_input'),$_smarty_tpl);?>
 px<br /><?php echo smarty_function_error(array('name'=>'bigAvatarSize'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+user_settings_big_avatar_size_desc'),$_smarty_tpl);?>
</td>
    </tr>        
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'avatar_max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'avatar_max_upload_size','style'=>"width:30px;"),$_smarty_tpl);?>
 MB  <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+max_upload_filesize','value'=>$_smarty_tpl->tpl_vars['maxUploadMaxFilesize']->value),$_smarty_tpl);?>
</span><br /><?php echo smarty_function_error(array('name'=>'avatar_max_upload_size'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+user_settings_avatar_image'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <div class="ow_smallmargin">
                <img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" /><br />
                <?php if (!empty($_smarty_tpl->tpl_vars['customAvatar']->value[1])){?><span class="ow_lbutton ow_mild_red" id="avatar_delete_btn"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</span><?php }?>
                <span class="ow_lbutton" id="avatar_change_btn"><?php echo smarty_function_text(array('key'=>'base+change'),$_smarty_tpl);?>
</span>
                <span class="ow_lbutton" id="cancel_change" style="display: none;"><?php echo smarty_function_text(array('key'=>'base+cancel'),$_smarty_tpl);?>
</span>
	            <div id="avatar_input" style="display: none"><?php echo smarty_function_input(array('name'=>'avatar'),$_smarty_tpl);?>
</div>
            </div>
            <div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['avatarBig']->value;?>
" /><br />
                <?php if (!empty($_smarty_tpl->tpl_vars['customAvatar']->value[2])){?><span class="ow_lbutton ow_mild_red" id="big_avatar_delete_btn"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</span><?php }?>
                <span class="ow_lbutton" id="big_avatar_change_btn"><?php echo smarty_function_text(array('key'=>'base+change'),$_smarty_tpl);?>
</span>
                <span class="ow_lbutton" id="cancel_big_change" style="display: none;"><?php echo smarty_function_text(array('key'=>'base+cancel'),$_smarty_tpl);?>
</span>
                <div id="big_avatar_input" style="display: none"><?php echo smarty_function_input(array('name'=>'bigAvatar'),$_smarty_tpl);?>
</div>
            </div>
        </td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+user_settings_avatar_image_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_tr_delimiter"><td></td></tr>
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>'admin+join_page'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+join_display_photo_upload'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'join_display_photo_upload'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'join_display_photo_upload'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'admin+join_display_photo_upload_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+join_display_terms_of_use'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'join_display_terms_of_use'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'join_display_terms_of_use'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'admin+join_display_terms_of_use_desc'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right">
<?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>

</div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'userSettingsForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>