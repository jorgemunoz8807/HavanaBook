<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:53:08
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\controllers\photo_user_album.html" */ ?>
<?php /*%%SmartyHeaderCode:5621548e85545c40b9-63379943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4588b33807d9822456e1464543eb4bf62f755b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\controllers\\photo_user_album.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5621548e85545c40b9-63379943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageHead' => 0,
    'isOwner' => 0,
    'isModerator' => 0,
    'album' => 0,
    'coverUrl' => 0,
    'coverUrlOrig' => 0,
    'noCover' => 0,
    'albumNameList' => 0,
    'albumName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8554633f85_03094109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8554633f85_03094109')) {function content_548e8554633f85_03094109($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php if ($_smarty_tpl->tpl_vars['isOwner']->value||$_smarty_tpl->tpl_vars['isModerator']->value){?>
    <div id="album-edit" class="ow_photo_album_info_wrap clearfix">
        <div class="ow_photo_album_toolbar ow_smallmargin clearfix">
            <div class="ow_photo_album_btns ow_right clearfix edit_btn">
                <ul class="ow_bl clearfix ow_small ow_right">
                    <li>
                        <a href="javascript://">
                            <?php echo smarty_function_text(array('key'=>"photo+edit_album"),$_smarty_tpl);?>

                        </a>
                    </li>
                </ul>
            </div>
            
            <div style="display: none" class="ow_photo_album_btns_edit ow_right clearfix edit_done">
                <ul class="ow_bl clearfix ow_small ow_right">
                    <li>
                        <a class="done" href="javascript://">
                            <?php echo smarty_function_text(array('key'=>"photo+done"),$_smarty_tpl);?>

                        </a>
                    </li>
                    <?php ob_start();?><?php echo smarty_function_text(array('key'=>"photo+newsfeed_album"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['album']->value->name!=$_tmp1){?>
                        <li>
                            <a class="ow_mild_red delete_album" href="javascript://">
                                <?php echo smarty_function_text(array('key'=>"photo+delete_album"),$_smarty_tpl);?>

                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="ow_photo_album_info">
            <div class="ow_photo_album_cover ow_high1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
)">
                <?php if ($_smarty_tpl->tpl_vars['isOwner']->value){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['coverUrlOrig']->value;?>
" class="ow_hidden cover_orig" />
                    <?php if (empty($_smarty_tpl->tpl_vars['noCover']->value)){?>
                        <a class="ow_lbutton" href="javascript://" style="display: none"><?php echo smarty_function_text(array('key'=>"photo+edit_cover_label"),$_smarty_tpl);?>
</a>
                    <?php }?>
                <?php }?>
            </div>
            <h3 class="ow_photo_album_name"><?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>
</h3>
            <div class="ow_photo_album_description"><?php echo $_smarty_tpl->tpl_vars['album']->value->description;?>
</div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"albumEditForm",'style'=>"display: none")); $_block_repeat=true; echo smarty_block_form(array('name'=>"albumEditForm",'style'=>"display: none"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo smarty_function_input(array('name'=>"albumName"),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>"albumName"),$_smarty_tpl);?>

                <?php echo smarty_function_input(array('name'=>"desc"),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"albumEditForm",'style'=>"display: none"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
    <div id="photo-menu" style="display: none" class="ow_fw_menu ow_high2 clearfix ow_smallmargin">
        <div style="padding-top: 4px; margin-right: 8px;" class="ow_left">
            <input type="checkbox" value="1" name="selectAll" class="plan_id" />
            <span style="vertical-align: top;"><?php echo smarty_function_text(array('key'=>"photo+check_all"),$_smarty_tpl);?>
</span>
        </div>
        <ul class="ow_bl clearfix ow_small ow_left">
            <li>
                <a href="javascript://" class="ow_mild_red delete">
                    <?php echo smarty_function_text(array('key'=>"photo+delete_selected"),$_smarty_tpl);?>

                </a>
            </li>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['isOwner']->value){?>
            <div style="float: left;" class="ow_context_action_block ow_context_action_value_block clearfix">
                <div class="ow_context_action">
                    <a class="ow_context_action_value"><?php echo smarty_function_text(array('key'=>"photo+move_to_album"),$_smarty_tpl);?>
</a><span class="ow_context_more"></span>               
                    <div style="opacity: 1; top: 18px;" class="ow_tooltip ow_small ow_tooltip_top_right">
                        <div class="ow_tooltip_tail">
                            <span></span>
                        </div>
                        <div class="ow_tooltip_body">
                            <ul class="ow_context_action_list ow_border">
                                <li><a href="javascript://"><?php echo smarty_function_text(array('key'=>"photo+create_album"),$_smarty_tpl);?>
</a></li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['albumNameList']->value)){?>
                                    <li><div class="ow_console_divider"></div></li>
                                    <?php  $_smarty_tpl->tpl_vars['albumName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['albumName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumNameList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['albumName']->key => $_smarty_tpl->tpl_vars['albumName']->value){
$_smarty_tpl->tpl_vars['albumName']->_loop = true;
?>
                                        <li><a href="javascript://" rel="<?php echo $_smarty_tpl->tpl_vars['albumName']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
</a></li>
                                    <?php } ?>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="ow_bl clearfix ow_small ow_left">
                <li class="ow_bl_disabled set_as_cover">
                    <a href="javascript://">
                        <?php echo smarty_function_text(array('key'=>"photo+set_as_cover_label"),$_smarty_tpl);?>

                    </a>
                    <div style="top: -27px; " class="ow_tip ow_tip_top">
                        <div style="left: 16px;" class="ow_tip_arrow">
                            <span></span>
                        </div>
                        <div class="ow_tip_box">
                            <span style="white-space:nowrap; font-weight: normal; max-width: 200px;" class="ow_tip_title">
                                <?php echo smarty_function_text(array('key'=>"photo+select_one_photo_warning"),$_smarty_tpl);?>

                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        <?php }?>
    </div>
<?php }else{ ?>
    <div class="ow_photo_album_info_wrap clearfix">
        <div class="ow_photo_album_info">
            <div class="ow_photo_album_cover ow_high1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
)">
                <img src="<?php echo $_smarty_tpl->tpl_vars['coverUrlOrig']->value;?>
" class="ow_hidden" />
            </div>
            <h3 class="ow_photo_album_name"><?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>
</h3>
            <div class="ow_photo_album_description"><?php echo $_smarty_tpl->tpl_vars['album']->value->description;?>
</div>
        </div>
    </div>
<?php }?>

<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>"albumPhotos",'albumId'=>$_smarty_tpl->tpl_vars['album']->value->id),$_smarty_tpl);?>

<?php }} ?>