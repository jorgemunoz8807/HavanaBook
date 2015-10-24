<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:25:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\comments_list.html" */ ?>
<?php /*%%SmartyHeaderCode:271548f196c27ba34-01713669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b461ded8c16ff0128e0bb02c0c5312848c74bff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\comments_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271548f196c27ba34-01713669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpContext' => 0,
    'countToLoad' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f196c2b18e2_49704337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f196c2b18e2_49704337')) {function content_548f196c2b18e2_49704337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['countToLoad']->value>0){?>
    <div class="owm_newsfeed_comment_load_more cmnt_load_more_cont"><span class="owm_newsfeed_comment_load_txt"><span class="cmnt_load_more">+<?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span></span></div>
    <?php }?>
    <div class="owm_newsfeed_comment_list">
        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="owm_newsfeed_comment_item clearfix">
            <div class="owm_newsfeed_comment_thumb"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>
</div>
            <div class="owm_newsfeed_comment_info">
                <div class="owm_newsfeed_comment_author"><b><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></b></div>
                <div class="owm_newsfeed_comment_txt"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

                <div class="owm_newsfeed_comment_date"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</div>
            </div>
        </div>
        <?php } ?>
    </div>
</div><?php }} ?>