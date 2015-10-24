<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:56:39
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\components\latest_topics_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:17380548e8627cdecf6-26689696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcdb42c05bfb76f2d339d8f463809017b20c866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\components\\latest_topics_widget.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17380548e8627cdecf6-26689696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addTopicUrl' => 0,
    'topicList' => 0,
    'topic' => 0,
    'attachments' => 0,
    'usernames' => 0,
    'displayNames' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8627d2bcd1_97517278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8627d2bcd1_97517278')) {function content_548e8627d2bcd1_97517278($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_user_link')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.user_link.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_forum_entity_forum .image {
    width: 100px;
    margin-right: -100px;
}
.ow_forum_entity_forum .image img {
    width: 100px;
}
.ow_forum_entity_forum .details {
    padding-left: 5px;
    position: relative;
    overflow-x: hidden;
}
.ow_forum_entity_forum .details .controls {
    position: absolute;
    right: 0;
    top: 0;
}
.ow_forum_attachment_icon {
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline-block;
    height: 17px;
    width: 14px;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(".btn_add_topic").click(function(){
    window.location.href='<?php echo $_smarty_tpl->tpl_vars['addTopicUrl']->value;?>
';
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_forum_entity_forum clearfix ow_smallmargin">
    <table class="ow_table_1 ow_forum_topic">
        <tr class="ow_tr_first">
            <th class="ow_icon"></th>
            <th class="ow_title"><?php echo smarty_function_text(array('key'=>'forum+topic'),$_smarty_tpl);?>
</th>
            
            <th class="ow_author"><?php echo smarty_function_text(array('key'=>'forum+last_reply'),$_smarty_tpl);?>
</th>
        </tr>
    <?php if ($_smarty_tpl->tpl_vars['topicList']->value){?>
        <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topicList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
">
            <td class="ow_icon">
                <?php if ($_smarty_tpl->tpl_vars['topic']->value['new']){?><span class="ow_lbutton ow_green ow_nowrap"><?php echo smarty_function_text(array('key'=>'forum+new'),$_smarty_tpl);?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['topic']->value['locked']){?><span class="ow_lbutton ow_red ow_nowrap"><?php echo smarty_function_text(array('key'=>'forum+locked'),$_smarty_tpl);?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['topic']->value['sticky']){?><span class="ow_lbutton ow_nowrap"><?php echo smarty_function_text(array('key'=>'forum+sticky'),$_smarty_tpl);?>
</span><?php }?>
            </td>
            <td class="ow_title">
                <?php if (isset($_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['topic']->value['id']])){?>
                <span class="ow_forum_attachment_icon ow_ic_attach" title="<?php echo smarty_function_text(array('key'=>'forum+topic_attachments','count'=>$_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['topic']->value['id']]),$_smarty_tpl);?>
">&nbsp;</span>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['topicUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a></td>
            
            <td class="ow_author ow_small">
                <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['postUrl'];?>
"><?php echo smarty_function_text(array('key'=>'forum+last_reply'),$_smarty_tpl);?>
</a> <?php echo smarty_function_text(array('key'=>'forum+by'),$_smarty_tpl);?>

                <?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['usernames']->value[$_smarty_tpl->tpl_vars['topic']->value['lastPost']['userId']],'name'=>$_smarty_tpl->tpl_vars['displayNames']->value[$_smarty_tpl->tpl_vars['topic']->value['lastPost']['userId']]),$_smarty_tpl);?>

                <span class="ow_nowrap ow_remark"><?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['createStamp'];?>
</span>
            </td>
        </tr>
        <?php } ?>
    <?php }else{ ?>
        <tr>
            <td colspan="5"><?php echo smarty_function_text(array('key'=>'forum+no_topic'),$_smarty_tpl);?>
</td>
        </tr>
	<?php }?>
    </table>

</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>