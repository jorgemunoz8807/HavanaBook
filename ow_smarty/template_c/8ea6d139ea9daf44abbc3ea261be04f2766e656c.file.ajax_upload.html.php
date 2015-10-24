<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:05:17
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\ajax_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:5497548e882db96869-73705368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea6d139ea9daf44abbc3ea261be04f2766e656c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\ajax_upload.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5497548e882db96869-73705368',
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
  'unifunc' => 'content_548e882dbf3224_06334418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e882dbf3224_06334418')) {function content_548e882dbf3224_06334418($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<div class="ow_photo_upload_wrap" id="add-new-photo-container">
    <div class="ow_hidden">
        <iframe name="iframe_upload" id="iframe_upload" src="about:blank"></iframe>
        <form id="upload-form" target="iframe_upload" enctype="multipart/form-data" method="post" action="<?php echo smarty_function_url_for_route(array('for'=>'photo.ajax_upload'),$_smarty_tpl);?>
">
            <input type="file" name="file" accept="image/jpeg,image/png,image/gif" multiple />
        </form>
        <div id="slot-prototype" class="ow_photo_preview_edit">
            <input type="hidden" name="slot" />
            <input type="hidden" name="rotate" />
            <div class="ow_photo_preview_action">
                <div class="ow_photo_preview_image ow_photo_preview_loading">
                    <div class="ow_photo_preview_image_filter"></div>
                </div>
                <div class="ow_photo_preview_x"></div>
                <div class="ow_photo_preview_rotate"></div>
            </div>
            <div class="ow_photo_upload_description" style="min-height: 58px">
                <textarea class="ow_hidden invitation"></textarea>
            </div>
        </div>
    </div>

    <div class="ow_photo_dragndrop">
        <div id="drop-area" ondragover="return false;"></div>
        <span id="drop-area-label"><?php echo smarty_function_text(array('key'=>"photo+dnd_support"),$_smarty_tpl);?>
</span>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"ajax-upload")); $_block_repeat=true; echo smarty_block_form(array('name'=>"ajax-upload"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div id="slot-area" class="ow_photo_preview_block_wrap clearfix"></div>

        <div id="photo-album-form" class="ow_photo_upload_bottom clearfix">
            <div id="photo-album-list" class="ow_left">
                <div class="ow_suggest_field ow_smallmargin">
                    <?php echo smarty_function_input(array('name'=>'album'),$_smarty_tpl);?>

                    <div class="ow_dropdown_list_wrap">
                        <ul class="ow_dropdown_list">
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
                    <?php echo smarty_function_error(array('name'=>'album-name'),$_smarty_tpl);?>

                </div>
                <div class="new-album" style="display: none">
                    <?php echo smarty_function_input(array('name'=>"album-name"),$_smarty_tpl);?>

                    <?php echo smarty_function_input(array('name'=>"description"),$_smarty_tpl);?>

                </div>
            </div>
            <div class="ow_photo_upload_submit ow_right">
                <span class="ow_button">
                    <span class=" ow_ic_submit ow_positive">
                        <?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

                    </span>
                </span>
            </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"ajax-upload"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>