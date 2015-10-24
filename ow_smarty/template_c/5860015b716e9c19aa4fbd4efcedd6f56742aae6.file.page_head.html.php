<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:25:06
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\page_head.html" */ ?>
<?php /*%%SmartyHeaderCode:20340548e54927c0394-65621687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5860015b716e9c19aa4fbd4efcedd6f56742aae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\page_head.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20340548e54927c0394-65621687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isAuthenticated' => 0,
    'canUpload' => 0,
    'url' => 0,
    'photoMenu' => 0,
    'user' => 0,
    'avatar' => 0,
    'onlineStatus' => 0,
    'subMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5492803051_95849636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5492803051_95849636')) {function content_548e5492803051_95849636($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_online_now')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.online_now.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
?>

<div class="ow_btn_delimiter ow_right">
    <?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['canUpload']->value)){?>
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"add-new-photo-album",'langLabel'=>"photo+create_album"),$_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                jQuery(function()
                {
                    var content = $(document.getElementById('add-new-photo-album-content'));

                    var albumName = new OwTextField('add-new-photo-album-name', 'add-new-photo-album-name', OW.getLanguageText('photo', 'album_name'));
                    var albumDesc = new OwTextArea('add-new-photo-album-desc', 'add-new-photo-album-desc', OW.getLanguageText('photo', 'album_desc'));

                    $('#add-new-photo-album').on('click', function()
                    {
                        var fb = new OW_FloatBox(
                        {
                            $title: OW.getLanguageText('photo', 'create_album'),
                            $contents: content,
                            width: 500
                        });

                        fb.bind('show', function()
                        {
                            $('input.ow_ic_submit', content).off().on('click', function()
                            {
                                var value = albumName.getValue().trim();

                                if ( value.length === 0 )
                                {
                                    $('span.ow_error', content).show();
                                    $(albumName.input).focus();

                                    return;
                                }
                                else if ( value === OW.getLanguageText('photo', 'newsfeed_album') )
                                {
                                    OW.error(OW.getLanguageText('photo', 'newsfeed_album_error_msg'));
                                    $('span.ow_error', content).show();
                                    $(albumName.input).focus();

                                    return;
                                }

                                fb.close();

                                var ajaxUploadPhotoFB = OW.ajaxFloatBox("PHOTO_CMP_AjaxUpload", [0, albumName.getValue(), albumDesc.getValue()], {
                                    title: OW.getLanguageText('photo', 'upload_photos'),
                                    width: "746px"
                                });

                                ajaxUploadPhotoFB.bind("close", function()
                                {
                                    if ( ajaxPhotoUploader.isHasData() )
                                    {
                                        return confirm(OW.getLanguageText('photo', 'close_alert'));
                                    }
                                });
                            });
                        });

                        fb.bind('close', function()
                        {
                            $('span.ow_error', content).hide();
                        });
                    });
                });
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }else{ ?>
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"add-new-photo-album",'langLabel'=>"photo+create_album",'onclick'=>((string)$_smarty_tpl->tpl_vars['url']->value)."();"),$_smarty_tpl);?>

        <?php }?>

        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"btn-add-new-photo",'langLabel'=>"photo+upload_photos",'onclick'=>((string)$_smarty_tpl->tpl_vars['url']->value)."();"),$_smarty_tpl);?>

    <?php }?>
    <div class="ow_hidden">
        <div id="add-new-photo-album-content">
            <div style="margin-bottom: 16px;">
                <div class="ow_smallmargin">
                    <input id="add-new-photo-album-name" type="text" value="<?php echo smarty_function_text(array('key'=>"photo+album_name"),$_smarty_tpl);?>
" class="invitation">
                    <span class="ow_error" style="color: #FF0000; display: none"><?php echo smarty_function_text(array('key'=>'base+form_validator_required_error_message'),$_smarty_tpl);?>
</span>
                </div>
                <textarea id="add-new-photo-album-desc" class="invitation"><?php echo smarty_function_text(array('key'=>'photo+album_desc'),$_smarty_tpl);?>
</textarea>
            </div>
            <div style="margin-bottom: 8px;" class="clearfix">
                <div class="ow_right">
                    <span class="ow_button">
                        <span class=" ow_ic_submit ow_positive">
                            <input type="button" class="ow_ic_submit ow_positive" value="<?php echo smarty_function_text(array('key'=>'photo+add_photos'),$_smarty_tpl);?>
">
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['photoMenu']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['photoMenu']->value;?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)){?>
    <div class="clearfix" style="margin-bottom: 12px;">
        <div class="ow_user_list_picture">
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

        </div>
        <div class="ow_user_list_data">
            <a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</a>
            <div class="ow_small">
                <?php if (!empty($_smarty_tpl->tpl_vars['onlineStatus']->value)){?>
                    <?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>

                <?php }elseif($_smarty_tpl->tpl_vars['user']->value->activityStamp){?>
                    <?php echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
:
                    <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->activityStamp),$_smarty_tpl);?>
</span>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['subMenu']->value;?>

<?php }} ?>