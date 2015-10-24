<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 19:37:14
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\upload_photo.html" */ ?>
<?php /*%%SmartyHeaderCode:108255490fa6ae8f756-80583591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64ac63916578b9796077d263b89998b7733f78f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\upload_photo.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108255490fa6ae8f756-80583591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_msg' => 0,
    'albums' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5490fa6af2ad39_02202729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490fa6af2ad39_02202729')) {function content_5490fa6af2ad39_02202729($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php if ($_smarty_tpl->tpl_vars['auth_msg']->value){?>
<div class="owm_padding">
    <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['auth_msg']->value;?>
</div>
</div>
<?php }else{ ?>
<div class="owm_upload_photo">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'upload-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'upload-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="owm_upload_photo_browse_wrap clearfix owm_bg_color_3">
		<div class="owm_upload_photo_left_label">
			<span class="owm_upload_choose_label"><span><?php echo smarty_function_text(array('key'=>'photo+mobile_choose_photo'),$_smarty_tpl);?>
</span></span>
			<span class="owm_upload_replace_label"><span><?php echo smarty_function_text(array('key'=>'photo+mobile_replace_photo'),$_smarty_tpl);?>
</span></span>
		</div>
		<div class="owm_upload_photo_right_label">
			<span class="owm_upload_img_name_label"><img id="photo-file-prevew" style="height: 44px; display: none;" /><span></span></span>
		</div>
		<div class="owm_upload_photo_btn">
			<a class="owm_upload_photo_choose_btn" href="javascript://"><?php echo smarty_function_input(array('name'=>'photo','accept'=>'image/*','id'=>'upload-file-field'),$_smarty_tpl);?>
</a>
		</div>
    </div>
    <div class="owm_input_wrap">
        <?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>

    </div>
    <div class="owm_upload_photo_album_wrap owm_input_wrap">
		<div class="owm_fake_input">
			<?php echo smarty_function_input(array('name'=>'album'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['albums']->value){?>
                <div class="owm_choose_album owm_float_right">
                    <?php echo smarty_function_text(array('key'=>'photo+choose_album'),$_smarty_tpl);?>

                    <select id="album_select">
                        <option value="" disabled="disabled" selected="selected"><?php echo smarty_function_text(array('key'=>'photo+choose_album'),$_smarty_tpl);?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['dto']->name;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['dto']->name;?>
</option><?php } ?>
                    </select>
                </div>
            <?php }?>
		</div>
    </div>
    <div class="owm_upload_photo_btn_wrap clearfix owm_input_wrap">
        
        <?php echo smarty_function_submit(array('name'=>'submit','class'=>'owm_float_right'),$_smarty_tpl);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'upload-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }?><?php }} ?>