<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:03:05
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\feed_item.html" */ ?>
<?php /*%%SmartyHeaderCode:31718548faef96655d6-89078052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb07a1323a52c35826364a4086290d92001fa8b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\feed_item.html',
      1 => 1404901674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31718548faef96655d6-89078052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'btn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faef969aee1_07556776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faef969aee1_07556776')) {function content_548faef969aee1_07556776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><li id="<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqId'];?>
" class="ql_item clearfix" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['questionId'];?>
">

    <div class="ql_avatar">
        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['item']->value['avatar']),$_smarty_tpl);?>

    </div>

    <div class="ql_body">
        <div class="ql_string ow_smallmargin">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['title'];?>
</b></a>
	    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['context'])){?>  &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['settings']['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['settings']['context']['label'];?>
</a><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

        </div>

        <div class="ql_content ow_small ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['item']->value['answers'];?>
</div>

        <div class="ow_newsfeed_btns ow_small ow_remark clearfix">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['permalink'];?>
" class="ow_nowrap create_time ow_newsfeed_date ow_small"><?php echo $_smarty_tpl->tpl_vars['item']->value['timeStamp'];?>
</a>
            <div class="ow_newsfeed_left">
                <span class="ow_newsfeed_control">
                    <?php  $_smarty_tpl->tpl_vars["btn"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["btn"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["btn"]->key => $_smarty_tpl->tpl_vars["btn"]->value){
$_smarty_tpl->tpl_vars["btn"]->_loop = true;
?>
                        <span class="ow_newsfeed_btn_wrap <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>">
                            <span class="ow_miniic_control ow_cursor_pointer newsfeed-feature-button-control <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['active'])){?>active<?php }?>">
                                <span <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['title'])){?>title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['iconClass'];?>
 newsfeed-feature-button" <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['onclick'];?>
"<?php }?> ></span>
                            </span><span class="ow_newsfeed_btn_label newsfeed-feature-label"><?php echo $_smarty_tpl->tpl_vars['btn']->value['label'];?>
</span>
                        </span>

                        <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['string'])){?>
                            <span class="ow_newsfeed_btn_string newsfeed-feature-string">
                                <?php echo $_smarty_tpl->tpl_vars['btn']->value['string'];?>

                            </span>
                        <?php }?>
                    <?php } ?>
                </span>
            </div>
        </div>

        <div <?php if ($_smarty_tpl->tpl_vars['item']->value['lastItem']){?>style="display: none;"<?php }?> class="ow_border ql_delimiter ql_doublesided_stdmargin"></div>

    </div>
</li><?php }} ?>