<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:12:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\content_presenter.html" */ ?>
<?php /*%%SmartyHeaderCode:20998548fb1397cf806-80630251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b11f7a55b253a5d7f08cb5449846055c37b1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\content_presenter.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20998548fb1397cf806-80630251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'data' => 0,
    'displayFormat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fb13988fe53_32414175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fb13988fe53_32414175')) {function content_548fb13988fe53_32414175($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.more.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['text'])){?>
    <div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['data']->value['text'],150);?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['displayFormat']->value=="video"){?>


<div class="clearfix ow_newsfeed_oembed_atch">
    <div class="ow_newsfeed_item_picture">
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" data-action="play">
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image']['thumbnail'];?>
" style="max-width: 100%;">
            <div class="ow_oembed_video_cover"></div>
        </a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="ow_newsfeed_item_title">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

        </a>
        
        <div class="ow_remark ow_smallmargin">
            <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['data']->value['description'],150);?>

        </div>
    </div>
</div>


<?php }elseif($_smarty_tpl->tpl_vars['displayFormat']->value=="image_content"){?>


<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image']['thumbnail'];?>
" style="max-width: 100%;" />
        </a>
    </div>
    <div class="ow_newsfeed_item_content">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="ow_newsfeed_item_title">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

        </a>
        
        <div class="ow_remark ow_smallmargin">
            <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['data']->value['description'],150);?>

        </div>
    </div>
</div>


<?php }elseif($_smarty_tpl->tpl_vars['displayFormat']->value=="image"){?>


<div class="ow_newsfeed_large_image clearfix">
    <div class="ow_newsfeed_item_picture">
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['image']['preview'];?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image']['view'];?>
" onclick="OW.showImageInFloatBox($(this).data('src')); return false;">
            <img style="max-width: 100%;" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image']['preview'];?>
" />
        </a>
    </div>
</div>


<?php }elseif($_smarty_tpl->tpl_vars['displayFormat']->value=="content"){?>


<div class="ow_newsfeed_item_content">
    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" class="ow_newsfeed_item_title">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

    </a>
    <div class="ow_remark ow_smallmargin">
        <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['data']->value['description'],150);?>

    </div>
</div>



<?php }?>
</div><?php }} ?>