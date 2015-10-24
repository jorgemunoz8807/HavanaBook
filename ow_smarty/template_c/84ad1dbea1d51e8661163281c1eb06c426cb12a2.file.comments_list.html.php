<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:27:05
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\comments_list.html" */ ?>
<?php /*%%SmartyHeaderCode:25404548e5509121a01-20036839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ad1dbea1d51e8661163281c1eb06c426cb12a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\comments_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25404548e5509121a01-20036839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpContext' => 0,
    'countToLoad' => 0,
    'loadMoreLabel' => 0,
    'noComments' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e550917a8d8_55875079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e550917a8d8_55875079')) {function content_548e550917a8d8_55875079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_modifier_more')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.more.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <div class="ow_comments_list">
        <?php if (!empty($_smarty_tpl->tpl_vars['countToLoad']->value)&&$_smarty_tpl->tpl_vars['countToLoad']->value>0){?>
        <div class="ow_comment_list_loader ow_feed_comments_viewall ow_small">
            <a href="javascript://">+<span><?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['loadMoreLabel']->value;?>
</a>
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['noComments']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"base+comment_no_comments"),$_smarty_tpl);?>
</div>
        <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="ow_comments_item clearfix">
            <div class="cnx_action" style="display: none"><?php echo $_smarty_tpl->tpl_vars['comment']->value['cnxAction'];?>
</div>
            <div class="ow_comments_item_picture">
                <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>

            </div>
            <div class="ow_comments_item_info">
                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['cnxAction'])){?>ow_comments_date_hover <?php }?>ow_comments_date ow_nowrap ow_tiny ow_remark"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</span>
                <div class="ow_comments_item_header"><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></div>
                <div class="ow_comments_content ow_smallmargin">
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['previewMaxChar'])){?>
                    <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['comment']->value['content'],$_smarty_tpl->tpl_vars['comment']->value['previewMaxChar']);?>

                    <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                    <?php }?>
                </div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

            </div>
        </div>
        <?php } ?>
        <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['pages']->value)){?>
    <div class="ow_paging clearfix ow_stdmargin">
        <span><?php echo smarty_function_text(array('key'=>'base+pages_label'),$_smarty_tpl);?>
</span>
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['page']->value['pageIndex'])){?>
        <span><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</span>
        <?php }else{ ?>
        <a href="javascript://" class="page-<?php echo $_smarty_tpl->tpl_vars['page']->value['pageIndex'];?>
<?php if (isset($_smarty_tpl->tpl_vars['page']->value['active'])&&$_smarty_tpl->tpl_vars['page']->value['active']){?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</a>
        <?php }?>
        <?php } ?>
    </div>
    <?php }?>
</div>
<?php }} ?>