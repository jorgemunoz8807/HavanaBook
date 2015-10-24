<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\formats\image_content.html" */ ?>
<?php /*%%SmartyHeaderCode:14181548e92acbfd4c4-28309441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa23ad762e311ce50e739ec32d29931ac6898034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\formats\\image_content.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14181548e92acbfd4c4-28309441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
    'blankImg' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92acc1ea07_48710326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92acc1ea07_48710326')) {function content_548e92acc1ea07_48710326($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div>
<div class="owm_newsfeed_body_pic">
    <a href="<?php if ($_smarty_tpl->tpl_vars['vars']->value['url']){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['blankImg']->value;?>
"></a>
</div>
<div class="owm_newsfeed_body_cont">
    <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
        <div class="owm_newsfeed_body_icon <?php if ($_smarty_tpl->tpl_vars['vars']->value['iconClass']){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['iconClass'];?>
<?php }?>"></div>
        <div class="owm_newsfeed_body_info_wrap">
            <div class="owm_newsfeed_body_info">
                <div class="owm_newsfeed_body_title"><b><?php if ($_smarty_tpl->tpl_vars['vars']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['vars']->value['url']){?></a><?php }?></b></div>
                <div class="owm_newsfeed_body_descr"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']){?>
        <div class="owm_newsfeed_ulist">
            <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                <div class="owm_newsfeed_ulist_count">
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                </div>
                <div class="owm_newsfeed_ulist_avatars">
                    <?php  $_smarty_tpl->tpl_vars["user"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vars']->value['userList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["user"]->key => $_smarty_tpl->tpl_vars["user"]->value){
$_smarty_tpl->tpl_vars["user"]->_loop = true;
?>
                        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }?>
</div><?php }} ?>