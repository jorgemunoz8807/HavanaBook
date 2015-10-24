<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\components\update_status.html" */ ?>
<?php /*%%SmartyHeaderCode:3130548e92acc82d16-95244282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b58c8a308ddd605f2d294637827e80bc0b8a88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\components\\update_status.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3130548e92acc82d16-95244282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'focused' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92acc993d4_53113694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92acc993d4_53113694')) {function content_548e92acc993d4_53113694($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    function nfShowStatusForm( focus ) {
        OWM.FloatBox({
            "content": $("#newsfeed-status-form")
        });
        
        if ( focus !== false )
            $("#newsfeed_status_input").focus();
            
        $("#newsfeed_status_save_btn_c").removeClass("owm_preloader_circle");
            
        return false;
    };

    $("#newsfeed-status-form-inv").click(nfShowStatusForm);
    
    <?php if (!empty($_smarty_tpl->tpl_vars['focused']->value)){?>
        window.setTimeout(function() {
            nfShowStatusForm(false);
        }, 10);
    <?php }?>
    
    $("#newsfeed-att-file").change(function() {
        var img = $('#newsfeed-att-file-prevew img');
        var name = $("#newsfeed-att-file-name span");
        
        img.hide();
        name.text("");
    
        if (!this.files || !this.files[0]) {
            return
        };

        if ( window.FileReader ) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.show().attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        } else {
            name.text(this.files[0].name);
        }
    });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="owm_newsfeed_status_update owm_bg_color_2 clearfix" id="newsfeed-status-form-inv">
    <span class="owm_newsfeed_status_update_add_icon"></span>
    <textarea class="owm_invitation"><?php echo smarty_function_text(array('key'=>"newsfeed+status_field_invintation"),$_smarty_tpl);?>
</textarea>
</div>

<div style="display: none">
    <iframe name="newsfeed-status-submit-frame"></iframe>
    <div class="owm_newsfeed_block clearfix" id="newsfeed-status-form">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"newsfeed_update_status",'target'=>"newsfeed-status-submit-frame")); $_block_repeat=true; echo smarty_block_form(array('name'=>"newsfeed_update_status",'target'=>"newsfeed-status-submit-frame"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="owm_newsfeed_status_update_edit owm_bg_color_2">
            <?php echo smarty_function_input(array('name'=>"status",'id'=>"newsfeed_status_input"),$_smarty_tpl);?>

        </div>
        <div class="owm_newsfeed_status_update_btns owm_padding owm_bg_color_3 clearfix">
            <div class="owm_newsfeed_status_update_add_cont owm_float_left">
                <a href="javascript://" class="owm_newsfeed_status_update_add_icon"><input accept="image/*" type="file" id="newsfeed-att-file" name="attachment"></a>
                <span class="owm_newsfeed_status_update_add_name" id="newsfeed-att-file-prevew"><img style="height: 30px; display: none;" /><span></span></span>
            </div>
            <div id="newsfeed_status_save_btn_c" class="owm_newsfeed_status_update_btn owm_float_right"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"newsfeed_update_status",'target'=>"newsfeed-status-submit-frame"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div><?php }} ?>