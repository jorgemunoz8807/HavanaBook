<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:25:00
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\mobile\views\controllers\photo_view.html" */ ?>
<?php /*%%SmartyHeaderCode:2981548f196c2ea5d0-20118937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58f145b22891f1a5080aafa0027ee1b20577ea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\mobile\\views\\controllers\\photo_view.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2981548f196c2ea5d0-20118937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'authError' => 0,
    'nextPhoto' => 0,
    'previousPhoto' => 0,
    'albumUrl' => 0,
    'album' => 0,
    'photoIndex' => 0,
    'photoCount' => 0,
    'fullsizeUrl' => 0,
    'avatar' => 0,
    'photo' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f196c31cae0_51768811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f196c31cae0_51768811')) {function content_548f196c31cae0_51768811($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .owm_photo_stage { background-image: url(<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
); }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<section>
<?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)){?>
    <div class="owm_padding">
        <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
    </div>
<?php }else{ ?>
    <div class="owm_photo_view">
        <div class="owm_photo_bg">
            <div class="owm_photo_holder">
                <div class="owm_photo_stage"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" /></div>
                <?php if ($_smarty_tpl->tpl_vars['nextPhoto']->value){?><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['nextPhoto']->value)."]"),$_smarty_tpl);?>
" class="owm_photo_next"></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['previousPhoto']->value){?><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['previousPhoto']->value)."]"),$_smarty_tpl);?>
" class="owm_photo_prev"></a><?php }?>
            </div>
            <div class="owm_photo_info">
                <div class="owm_photo_album_block clearfix">
                    <div class="owm_photo_album owm_float_left">
                        <a class="owm_photo_album_name" href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['album']->value->name,60);?>
</a>
                        <span class="owm_photo_number"><?php echo $_smarty_tpl->tpl_vars['photoIndex']->value;?>
</span> / <span class="owm_photo_amount"><?php echo $_smarty_tpl->tpl_vars['photoCount']->value;?>
</span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['fullsizeUrl']->value){?><a class="owm_photo_enlarge owm_float_right" href="<?php echo $_smarty_tpl->tpl_vars['fullsizeUrl']->value;?>
"></a><?php }?>
                </div>
                <div class="owm_photo_author clearfix">
                    <div class="owm_avatar owm_float_left"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
                    <div class="owm_photo_string">
                        <div class="owm_photo_name"><a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</a></div>
                        <div class="owm_photo_date"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['photo']->value->addDatetime),$_smarty_tpl);?>
</div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['photo']->value->description){?><div class="owm_photo_descr"><?php echo $_smarty_tpl->tpl_vars['photo']->value->description;?>
</div><?php }?>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>


    </div>
<?php }?>
</section><?php }} ?>