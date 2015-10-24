<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 00:19:21
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\search_result.html" */ ?>
<?php /*%%SmartyHeaderCode:31941548e998913bc41-97967005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f32650dd7bbbdfc1b7632ec095d227818a269b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\search_result.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31941548e998913bc41-97967005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'userToken' => 0,
    'componentForumCaption' => 0,
    'paging' => 0,
    'search' => 0,
    'topics' => 0,
    'sort' => 0,
    'topic' => 0,
    'label' => 0,
    'post' => 0,
    'avatars' => 0,
    'content' => 0,
    'info_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e998920a966_27344058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e998920a966_27344058')) {function content_548e998920a966_27344058($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_forum_matching_posts { padding: 5px; }
    .ow_forum_search_result .ow_highbox { padding: 0 3px; }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['token']->value)||!empty($_smarty_tpl->tpl_vars['userToken']->value)){?>
	<?php if (isset($_smarty_tpl->tpl_vars['componentForumCaption']->value)){?>
	    <div class="ow_stdmargin">
	        <?php echo $_smarty_tpl->tpl_vars['componentForumCaption']->value;?>
        
	    </div>
	<?php }?>

    <div class="ow_smallmargin clearfix">
        <div class="ow_left"><?php if (isset($_smarty_tpl->tpl_vars['paging']->value)){?><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
<?php }?></div>
	    <div class="ow_right ow_txtright"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['topics']->value){?>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['token']->value)){?><?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
<?php }?>
    	
	<div class="ow_forum_search_result">
    <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'label', null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['topicUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','label'=>$_smarty_tpl->tpl_vars['label']->value,'iconClass'=>'ow_ic_forum')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','label'=>$_smarty_tpl->tpl_vars['label']->value,'iconClass'=>'ow_ic_forum'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ow_forum_matching_posts">
        <div class="ow_smallmargin ow_small">
            <?php echo smarty_function_text(array('key'=>'forum+topic_location'),$_smarty_tpl);?>

            <a href="<?php echo smarty_function_url_for_route(array('for'=>"forum-default"),$_smarty_tpl);?>
#section-<?php echo $_smarty_tpl->tpl_vars['topic']->value['sectionId'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['sectionName'];?>
</a> 
            &raquo; <a href="<?php echo smarty_function_url_for_route(array('for'=>"group-default:[groupId=>".((string)$_smarty_tpl->tpl_vars['topic']->value['groupId'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['groupName'];?>
</a>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['topic']->value['posts'])){?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topic']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info_string', null); ob_start(); ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']]['title'];?>
</a> <span class="ow_tiny ow_ipc_date"><?php echo $_smarty_tpl->tpl_vars['post']->value['createStamp'];?>
</span>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
	            <div class="post_content"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['postUrl'];?>
" class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'base+more'),$_smarty_tpl);?>
</a></div>
	        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	        <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']],'content'=>$_smarty_tpl->tpl_vars['content']->value,'infoString'=>$_smarty_tpl->tpl_vars['info_string']->value),$_smarty_tpl);?>


		   <?php } ?>
	   <?php }?>
	   </div>
	   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','label'=>$_smarty_tpl->tpl_vars['label']->value,'iconClass'=>'ow_ic_forum'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } ?>
	</div>
	
	<?php if (isset($_smarty_tpl->tpl_vars['paging']->value)){?><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
<?php }?>
	
	<?php }else{ ?>
	   <div class="ow_anno ow_center"><?php echo smarty_function_text(array('key'=>'forum+no_posts_found'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?><?php }} ?>