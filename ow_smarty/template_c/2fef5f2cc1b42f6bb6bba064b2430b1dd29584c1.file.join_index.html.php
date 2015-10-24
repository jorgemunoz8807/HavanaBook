<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 08:31:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\join_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2775354905e6dd007d7-62767970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fef5f2cc1b42f6bb6bba064b2430b1dd29584c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\join_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2775354905e6dd007d7-62767970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notValidInviteCode' => 0,
    'step' => 0,
    'joinConnectHook' => 0,
    'item' => 0,
    'displayAccountType' => 0,
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'question' => 0,
    'presentationToClass' => 0,
    'isLastStep' => 0,
    'display_photo' => 0,
    'photoUploadId' => 0,
    'requiredPhotoUpload' => 0,
    'display_terms_of_use' => 0,
    'display_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54905e6de41b01_13956933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54905e6de41b01_13956933')) {function content_54905e6de41b01_13956933($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.owm_join_photo_upload .owm_upload_photo_attach_wrap
{
    padding:0px;
}

.owm_join_photo_button
{
    position: absolute;
    top: 9px;
    left: 10px;
}

.owm_join_photo_button_label
{
    padding-left: 63px;
    margin-right: 8px;
    min-width:53px;
    float:left;
}

.owm_join_photo_button_img
{
    min-width: 100px;
    float: left;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    $("input[name=userPhoto]").change(function() {
        var img = $('.join_photo_upload #photo-file-prevew');
        var img_span = img.parents(".join_photo_upload .owm_upload_img_name_label");

        var changeLabel = $('.join_photo_upload .owm_upload_replace_label');
        var uploadLabel = $('.join_photo_upload .owm_upload_choose_label');
        var icon = $('.join_photo_upload .join_photo_button a');

        var name = img_span.find("span");

        name.text("");
        img_span.hide();

        if (!this.files || !this.files[0]) {
            return
        };

        if ( window.FileReader ) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.attr('src', e.target.result);
                img_span.css('display','table');
                changeLabel.css('display','table');
                uploadLabel.hide();
                icon.parents('div:eq(0)').addClass('owm_upload_photo_attach_wrap');
            }
            
            reader.readAsDataURL(this.files[0]);
        } else {
            name.text(this.files[0].name);
        }
    });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="owm_join_form">
    <?php if (isset($_smarty_tpl->tpl_vars['notValidInviteCode']->value)){?>
    <div class="owm_padding">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo smarty_function_text(array('key'=>"base+join_not_valid_invite_code"),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }else{ ?>
        <?php if ($_smarty_tpl->tpl_vars['step']->value==1){?>
            <div class="owm_padding">
                <div class="owm_padding owm_info owm_std_margin_top"><?php echo smarty_function_text(array('key'=>"mobile+mobile_join_promo"),$_smarty_tpl);?>
</div>
            </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['joinConnectHook']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joinConnectHook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <div class="owm_btn_wide owm_std_margin_top">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                  </div>
                <?php } ?>
            <?php }?>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'joinForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'joinForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value==true){?>
                <div class="owm_field_container owm_std_margin_bottom">
                    <div class="owm_form_label owm_small_margin_bottom"><?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>
<span class="owm_required_star">*</span></div>
                    <div class="owm_field_wrap owm_select_wrap"><?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>
</div>
                    <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>
</div>
                </div>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?>
                    <div class="owm_field_container owm_section owm_std_margin_bottom">
                        <span class="owm_section_label"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</span><div class="owm_section_border"></div>
                    </div>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['question']->value['presentation'],array('text','password'))){?>
                        <div class="owm_field_container owm_small_margin_bottom  <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])){?><?php echo $_smarty_tpl->tpl_vars['question']->value['trClass'];?>
<?php }?>">
                            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']])){?><?php echo $_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']];?>
<?php }else{ ?>owm_field_wrap<?php }?>"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                            <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }else{ ?>
                        <div class="owm_field_container owm_std_margin_bottom  <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])){?><?php echo $_smarty_tpl->tpl_vars['question']->value['trClass'];?>
<?php }?>">
                            <div class="owm_form_label owm_small_margin_bottom"><?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']])){?><?php echo $_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']];?>
<?php }else{ ?>owm_field_wrap<?php }?>">
                                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                            </div>
                            <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['question']->value['name']=='password'){?>
                        <div class="owm_field_container owm_small_margin_bottom  <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])){?><?php echo $_smarty_tpl->tpl_vars['question']->value['trClass'];?>
<?php }?>">
                            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']])){?><?php echo $_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']];?>
<?php }else{ ?>owm_field_wrap<?php }?>"><?php echo smarty_function_input(array('name'=>'repeatPassword'),$_smarty_tpl);?>
</div>
                            <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>'repeatPassword'),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }?>
                 
                <?php } ?>
            <?php } ?>

            <?php if ($_smarty_tpl->tpl_vars['isLastStep']->value){?>
                
                <?php if ($_smarty_tpl->tpl_vars['display_photo']->value){?>
                    <div class="owm_field_container join_photo_upload owm_upload_photo_browse_wrap clearfix owm_bg_color_3  owm_field_wrap">
                        <div class="owm_join_photo_button">
                            <a class="owm_upload_photo_choose_btn" href="javascript://"><input name="userPhoto" id="<?php echo $_smarty_tpl->tpl_vars['photoUploadId']->value;?>
" type="file" accept="image/*"></a>
                        </div>
                        <div class="owm_join_photo_button_label">
                            <span class="owm_upload_choose_label"><span><?php echo smarty_function_label(array('name'=>'userPhoto'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['requiredPhotoUpload']->value){?><span class="owm_required_star">*</span><?php }?></span></span>
                            <span class="owm_upload_replace_label"><span><?php echo smarty_function_label(array('name'=>'userPhoto'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['requiredPhotoUpload']->value){?><span class="owm_required_star">*</span><?php }?></span></span>
                        </div>
                        <div class="owm_join_photo_button_img">
                            <span class="owm_upload_img_name_label" style="display:none;"><img id="photo-file-prevew" style="height: 44px;"><span></span></span>
                        </div>
                    </div>
                    <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>'userPhoto'),$_smarty_tpl);?>
</div>                    
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['display_terms_of_use']->value){?>

                    <div class="owm_section owm_std_margin_bottom">
                        <span class="owm_section_label"><?php echo smarty_function_text(array('key'=>"base+questions_section_terms_of_use_label"),$_smarty_tpl);?>
</span><div class="owm_section_border"></div>
                    </div>

                    <div class="owm_field_container owm_small_margin_bottom ">

                        <div class="owm_form_label owm_small_margin_bottom "><?php echo smarty_function_label(array('name'=>'termOfUse'),$_smarty_tpl);?>
<span class="owm_required_star">*</span></div>

                        <div class="owm_checkbox_wrap owm_simple_checkbox">
                            <?php echo smarty_function_input(array('name'=>'termOfUse'),$_smarty_tpl);?>

                        </div>
                        <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>'termOfUse'),$_smarty_tpl);?>
</div>
                    </div>
                    
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['display_captcha']->value){?>
                    <div class="owm_section owm_std_margin_bottom">
                        <span class="owm_section_label"><?php echo smarty_function_text(array('key'=>"base+questions_section_captcha_label"),$_smarty_tpl);?>
</span><div class="owm_section_border"></div>
                    </div>

                    <div class="owm_field_container owm_small_margin_bottom ">
                        <div class="owm_checkbox_wrap"><?php echo smarty_function_input(array('name'=>'captchaField'),$_smarty_tpl);?>
<span class="owm_required_star">*</span></div>
                        <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>'captchaField'),$_smarty_tpl);?>
</div>
                    </div>
                <?php }?>

            <?php }?>

            <div class="owm_btn_wide owm_std_margin_top">
                <?php echo smarty_function_submit(array('name'=>'joinSubmit'),$_smarty_tpl);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'joinForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div>

<?php }} ?>