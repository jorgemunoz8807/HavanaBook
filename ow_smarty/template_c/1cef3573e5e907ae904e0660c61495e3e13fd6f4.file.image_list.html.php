<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\formats\image_list.html" */ ?>
<?php /*%%SmartyHeaderCode:14428548e92acb81655-14114306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cef3573e5e907ae904e0660c61495e3e13fd6f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\formats\\image_list.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14428548e92acb81655-14114306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
    'totalCount' => 0,
    'list' => 0,
    'cnt' => 0,
    'count' => 0,
    'moreCount' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92acbc7e72_95302510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92acbc7e72_95302510')) {function content_548e92acbc7e72_95302510($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div><?php }?>
<div class="owm_newsfeed_body_cont">
    <div class="owm_newsfeed_imglist_scroller owm_newsfeed_imglist_scroller_<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
">
        <div class="owm_newsfeed_imglist_wrap">
            <div class="owm_newsfeed_imglist clearfix">
                <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value){?><?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?><?php }?>
                    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==1){?><div class="owm_newsfeed_imglist_section clearfix"><?php }?>
                    <div class="owm_newsfeed_imglist_item">
                        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['more'])&&$_smarty_tpl->getVariable('smarty')->value['foreach']['img']['last']&&$_smarty_tpl->tpl_vars['moreCount']->value){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['more']['url'];?>
" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
);">
                                <div class="owm_newsfeed_imglist_filter" style="display: block">
                                    <span><?php echo smarty_function_text(array('key'=>'photo+feed_more_items','moreCount'=>$_smarty_tpl->tpl_vars['moreCount']->value),$_smarty_tpl);?>
</span><div></div>
                                </div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['blankImg'];?>
">
                            </a>
                        <?php }else{ ?>
                            <a href="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['blankImg'];?>
"></a>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']!=1||$_smarty_tpl->getVariable('smarty')->value['foreach']['img']['last']){?></div><?php }?>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['vars']->value['info']){?>
    <div class="owm_newsfeed_imglist_info">
        <div class="owm_newsfeed_item_padding">
            <?php if (isset($_smarty_tpl->tpl_vars['vars']->value['info']['text'])){?>
                <?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['text'];?>

            <?php }elseif(isset($_smarty_tpl->tpl_vars['vars']->value['info']['route'])){?>
                <?php if (isset($_smarty_tpl->tpl_vars['vars']->value['info']['route']['textKey'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['vars']->value['info']['route']['textKey']),$_smarty_tpl);?>
: <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vars']->value['info']['route']['label'];?>
</a>
            <?php }?>
        </div>
    </div>
    <?php }?>
</div><?php }} ?>