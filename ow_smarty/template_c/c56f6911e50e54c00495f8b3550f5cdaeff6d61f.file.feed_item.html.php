<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\mobile\views\components\feed_item.html" */ ?>
<?php /*%%SmartyHeaderCode:27438548e92aca6b6c6-91831675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c56f6911e50e54c00495f8b3550f5cdaeff6d61f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\mobile\\views\\components\\feed_item.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27438548e92aca6b6c6-91831675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'displayType' => 0,
    'user' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92acade058_80979982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92acade058_80979982')) {function content_548e92acade058_80979982($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.math.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_newsfeed_line
    {
        display: block;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['autoId'];?>
" class="owm_newsfeed_item <?php echo $_smarty_tpl->tpl_vars['item']->value['view']['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']){?>owm_newsfeed_responded<?php }?>  <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])){?>owm_newsfeed_item_no_body<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['item']->value['view']['style'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['displayType']->value!="page"){?>
        <div class="owm_newsfeed_date"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</div>
    <?php }?>
    <div class="owm_newsfeed_item_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']){?>owm_newsfeed_item_disabled_wrap<?php }?>">
        <div class="owm_newsfeed_context_menu">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['contextActionMenu'];?>

        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']){?>
            <div class="owm_newsfeed_header_responded">
                <div class="owm_newsfeed_header_responded_cont">
                    <div class="owm_newsfeed_header_responded_txt"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['user']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['user']['name'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['text'];?>
</div>
                </div>
            </div>
        
            <div class="owm_newsfeed_body_responded">
                <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])){?>
                    <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                <?php }?>
        <?php }?>
        
        <div class="owm_newsfeed_header clearfix">
            <div class="owm_newsfeed_header_pic">
                <?php  $_smarty_tpl->tpl_vars["user"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["user"]->key => $_smarty_tpl->tpl_vars["user"]->value){
$_smarty_tpl->tpl_vars["user"]->_loop = true;
?>
                    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'url'=>$_smarty_tpl->tpl_vars['user']->value['url'],'src'=>$_smarty_tpl->tpl_vars['user']->value['avatarUrl'],'label'=>$_smarty_tpl->tpl_vars['user']->value['roleLabel']['label'],'labelColor'=>$_smarty_tpl->tpl_vars['user']->value['roleLabel']['labelColor']),$_smarty_tpl);?>

                <?php } ?>
            </div>
            <div class="owm_newsfeed_header_cont">
                <div class="owm_newsfeed_header_txt">
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</b></a>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['context']){?>  &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a><?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

                    <?php if ($_smarty_tpl->tpl_vars['displayType']->value=="page"){?>
                        <div class="owm_newsfeed_date"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['content']){?>
            <div class="owm_newsfeed_body">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']){?>
                <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])){?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        
        <div class="owm_newsfeed_footer">
            <div class="owm_newsfeed_control clearfix">
                <?php  $_smarty_tpl->tpl_vars["feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['features']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["feature"]->key => $_smarty_tpl->tpl_vars["feature"]->value){
$_smarty_tpl->tpl_vars["feature"]->_loop = true;
?>
                    <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['hideButton'])){?>
                    <div class="owm_newsfeed_control_left" id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['uniqId'];?>
" style="width: <?php echo smarty_function_math(array('equation'=>"100 / x ",'x'=>$_smarty_tpl->tpl_vars['item']->value['features']['buttonsCount']),$_smarty_tpl);?>
%;">
                        <a class="owm_newsfeed_control_btn <?php echo $_smarty_tpl->tpl_vars['feature']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['feature']->value['active']){?>owm_newsfeed_control_active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['feature']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['feature']->value['onclick'];?>
"<?php }?>>
                            <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['string'])){?>
                                 <span class="owm_newsfeed_control_txt"><?php echo $_smarty_tpl->tpl_vars['feature']->value['string'];?>
</span>
                            <?php }?>
                            
                            <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['count'])){?>
                                <span class="owm_newsfeed_control_counter"><?php echo $_smarty_tpl->tpl_vars['feature']->value['count'];?>
</span>				            						
                            <?php }?>
                        </a>
                         
                        <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['innerHtml'])){?>
                            <div class="owm_newsfeed_control_inner_html">
                                <?php echo $_smarty_tpl->tpl_vars['feature']->value['innerHtml'];?>

                            </div>
                        <?php }?>
                    </div>
                    <?php }?>
                <?php } ?>
            </div>
            
            <?php  $_smarty_tpl->tpl_vars["feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['features']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["feature"]->key => $_smarty_tpl->tpl_vars["feature"]->value){
$_smarty_tpl->tpl_vars["feature"]->_loop = true;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['html'])){?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['uniqId'];?>
-html" class="owm_newsfeed_control_html ">
                        <?php echo $_smarty_tpl->tpl_vars['feature']->value['html'];?>

                    </div>
                <?php }?>
            <?php } ?>
        </div>
        <div class="owm_newsfeed_item_disabled" onclick="OWM.error($(this).data('message'));" data-message='<?php echo smarty_function_text(array('key'=>"newsfeed+mobile_disabled_actions_message",'desktopUrl'=>$_smarty_tpl->tpl_vars['item']->value['desktopUrl']),$_smarty_tpl);?>
'></div>
    </div>
</div><?php }} ?>