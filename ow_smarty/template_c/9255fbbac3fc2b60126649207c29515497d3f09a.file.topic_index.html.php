<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:55:56
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\topic_index.html" */ ?>
<?php /*%%SmartyHeaderCode:28295548e85fc594820-11182378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9255fbbac3fc2b60126649207c29515497d3f09a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\topic_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28295548e85fc594820-11182378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isHidden' => 0,
    'componentForumCaption' => 0,
    'breadcrumb' => 0,
    'paging' => 0,
    'search' => 0,
    'postList' => 0,
    'post' => 0,
    'avatars' => 0,
    'enableAttachments' => 0,
    'attachments' => 0,
    'attm' => 0,
    'isModerator' => 0,
    'userId' => 0,
    'topicInfo' => 0,
    'toolbars' => 0,
    'page' => 0,
    'tpl' => 0,
    'canPost' => 0,
    'attachmentsCmp' => 0,
    'postReplyPermissionErrorText' => 0,
    'canEdit' => 0,
    'isOwner' => 0,
    'canSubscribe' => 0,
    'isSubscribed' => 0,
    'canLock' => 0,
    'tb' => 0,
    'canSticky' => 0,
    'canMoveToHidden' => 0,
    'tblink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e85fc697ac8_35994451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e85fc697ac8_35994451')) {function content_548e85fc697ac8_35994451($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_forum_attachment_icon {
        display: inline-block;
        background-repeat: no-repeat;
        cursor: pointer;
        width: 14px;
        height: 17px;
    }
    .forum_attachments_label {
        margin: 15px 0 5px;
        padding-left: 5px;
        font-weight: bold;
    }

    .forum_add_post .jhtmlarea {
        margin: 0px auto;
    }

    .post_content img { max-width: 100%; }
    .post_content { overflow: hidden; }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $(".ow_forum_attachment").hover(
	    function(){
	        $(this).find("a.forum_delete_attachment").show();
	    },
	    function(){
	        $(this).find("a.forum_delete_attachment").hide();
	    }
    );

    $("a.forum_delete_attachment").each(function(){

        var container_handler = $(this).parent();

        $(this).click(function(){

            if ( confirm(OW.getLanguageText('forum', 'confirm_delete_attachment')) )
	        {
	           var attachment_id = $(this).attr("rel");

	           var params = {};
	           var url = '<?php echo smarty_function_url_for_route(array('for'=>'forum_delete_attachment'),$_smarty_tpl);?>
';
	           params['attachmentId'] = attachment_id;

	           $.ajaxSetup({dataType: 'json'});

               $.post(url, params, function(data){

                    if ( data.result == true )
                    {
                        OW.info(data.msg);

                        container_handler.remove();
                    }
                    else if (data.error != undefined)
                    {
                        OW.warning(data.error);
                    }
               });
	        }
	        else
	        {
	            return false;
	        }
        });
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['isHidden']->value){?>
    <div class="ow_stdmargin">
        <?php echo $_smarty_tpl->tpl_vars['componentForumCaption']->value;?>

    </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>


<div class="ow_smallmargin clearfix">
    <div class="ow_left"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
    <div class="ow_right ow_txtright"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</div>
</div>

<div class="ow_forum_topic_posts">

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->index++;
 $_smarty_tpl->tpl_vars['post']->first = $_smarty_tpl->tpl_vars['post']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postList']['first'] = $_smarty_tpl->tpl_vars['post']->first;
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tpl', null); ob_start(); ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('info_string', null, null); ob_start(); ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']]['title'];?>
</a> 
		<span class="ow_tiny ow_ipc_date ow_remark"><?php echo $_smarty_tpl->tpl_vars['post']->value['createStamp'];?>
</span>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('content', null, null); ob_start(); ?>
                <?php echo smarty_function_add_content(array('key'=>"forum.before_post_add_content",'postId'=>$_smarty_tpl->tpl_vars['post']->value['id'],'userId'=>$_smarty_tpl->tpl_vars['post']->value['userId'],'text'=>$_smarty_tpl->tpl_vars['post']->value['text']),$_smarty_tpl);?>

		<div class="post_content"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
		<?php if ($_smarty_tpl->tpl_vars['post']->value['edited']){?>
			<div class="ow_post_comment ow_ic_edit"><?php echo smarty_function_text(array('key'=>'forum+post_edited'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['edited']['userId']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['edited']['userId']]['title'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['post']->value['edited']['editStamp'];?>
 </div>
		<?php }?>
        
		<?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value&&isset($_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['post']->value['id']])){?>
            <div class="ow_small">
                <div class="forum_attachments_label"><?php echo smarty_function_text(array('key'=>'forum+attachments'),$_smarty_tpl);?>
:</div>
                <?php  $_smarty_tpl->tpl_vars['attm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['post']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attm']->key => $_smarty_tpl->tpl_vars['attm']->value){
$_smarty_tpl->tpl_vars['attm']->_loop = true;
?>
                    <span class="ow_forum_attachment">
                        <span class="ow_forum_attachment_icon ow_ic_attach">&nbsp;</span>
                        <?php if ($_smarty_tpl->tpl_vars['attm']->value['downloadUrl']!=''){?><a href="<?php echo $_smarty_tpl->tpl_vars['attm']->value['downloadUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
<?php }?> (<?php echo $_smarty_tpl->tpl_vars['attm']->value['fileSize'];?>
Kb)
                        <?php if ($_smarty_tpl->tpl_vars['isModerator']->value||($_smarty_tpl->tpl_vars['userId']->value==$_smarty_tpl->tpl_vars['post']->value['userId']&&!$_smarty_tpl->tpl_vars['topicInfo']->value['locked'])){?>
                            <a href="javascript://" class="forum_delete_attachment ow_lbutton ow_hidden" rel="<?php echo $_smarty_tpl->tpl_vars['attm']->value['id'];?>
">delete</a>
                        <?php }?>
                    </span><br/>
                <?php } ?>
            </div>
		<?php }?>
                <?php echo smarty_function_add_content(array('key'=>"forum.after_post_add_content",'postId'=>$_smarty_tpl->tpl_vars['post']->value['id'],'userId'=>$_smarty_tpl->tpl_vars['post']->value['userId'],'text'=>$_smarty_tpl->tpl_vars['post']->value['text']),$_smarty_tpl);?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php echo smarty_function_decorator(array('name'=>'ipc','avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['post']->value['userId']],'content'=>Smarty::$_smarty_vars['capture']['content'],'infoString'=>Smarty::$_smarty_vars['capture']['info_string'],'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value[$_smarty_tpl->tpl_vars['post']->value['id']]),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&$_smarty_tpl->getVariable('smarty')->value['foreach']['postList']['first']){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>' ow_stdmargin clearfix','capEnabled'=>false)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>' ow_stdmargin clearfix','capEnabled'=>false), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['tpl']->value;?>
</div>
            <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','description'=>$_smarty_tpl->tpl_vars['post']->value['text'],'title'=>$_smarty_tpl->tpl_vars['topicInfo']->value['title'],'image'=>'','class'=>'ow_social_sharing_nomargin','entityType'=>'forum_topic','entityId'=>$_smarty_tpl->tpl_vars['post']->value['topicId']),$_smarty_tpl);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>' ow_stdmargin clearfix','capEnabled'=>false), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_add_content(array('key'=>'forum.topic.content.after_first_post'),$_smarty_tpl);?>

<?php }else{ ?>
    <div class="ow_stdmargin clearfix" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tpl']->value;?>
</div>
<?php }?>

<?php } ?>
</div>

<div class="ow_stdmargin ow_txtright"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>

<?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['sticky']){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ow_forum_status"><span class="ow_ic_push_pin ow_icon"></span> <?php echo smarty_function_text(array('key'=>'forum+topic_is_sticky'),$_smarty_tpl);?>
</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="forum_add_post clearfix">

    <div class="ow_left" style="width: 70%;">
    <?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['locked']){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ow_nocontent ow_forum_status"><span class="ow_ic_lock ow_icon"></span> <?php echo smarty_function_text(array('key'=>'forum+topic_is_locked'),$_smarty_tpl);?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }elseif((!$_smarty_tpl->tpl_vars['isHidden']->value&&($_smarty_tpl->tpl_vars['canPost']->value||$_smarty_tpl->tpl_vars['isModerator']->value))||($_smarty_tpl->tpl_vars['isHidden']->value&&$_smarty_tpl->tpl_vars['canPost']->value)){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-post-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-post-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_write','langLabel'=>'forum+add_post_title','addClass'=>'ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_write','langLabel'=>'forum+add_post_title','addClass'=>'ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="ow_smallmargin">
                <?php echo smarty_function_input(array('name'=>'text','class'=>"ow_smallmargin"),$_smarty_tpl);?>

                <div><?php echo smarty_function_error(array('name'=>'text'),$_smarty_tpl);?>
</div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?><div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['attachmentsCmp']->value;?>
</div><?php }?>
                <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_write','langLabel'=>'forum+add_post_title','addClass'=>'ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-post-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['isHidden']->value&&!$_smarty_tpl->tpl_vars['canPost']->value){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ow_nocontent ow_forum_status"><span class="ow_ic_warning ow_icon"></span> <?php echo $_smarty_tpl->tpl_vars['postReplyPermissionErrorText']->value;?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_smallmargin ow_center'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['canEdit']->value&&$_smarty_tpl->tpl_vars['isOwner']->value||$_smarty_tpl->tpl_vars['isModerator']->value||$_smarty_tpl->tpl_vars['canSubscribe']->value||$_smarty_tpl->tpl_vars['isSubscribed']->value||$_smarty_tpl->tpl_vars['canLock']->value||!empty($_smarty_tpl->tpl_vars['tb']->value)){?>
    <div class="ow_right" style="width: 27%;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_info','langLabel'=>'forum+this_topic','addClass'=>'ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_info','langLabel'=>'forum+this_topic','addClass'=>'ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <ul class="ow_smallmargin ow_bl_narrow clearfix ow_small">
                <?php if ($_smarty_tpl->tpl_vars['canLock']->value){?><li><a class="sticky_topic" href="javascript://"><?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['sticky']){?><?php echo smarty_function_text(array('key'=>'forum+unsticky_topic'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'forum+sticky_topic'),$_smarty_tpl);?>
<?php }?></a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['canSticky']->value){?><li><a class="lock_topic" href="javascript://"><?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['locked']){?><?php echo smarty_function_text(array('key'=>'forum+unlock_topic'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'forum+lock_topic'),$_smarty_tpl);?>
<?php }?></a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['isModerator']->value){?><?php if (!$_smarty_tpl->tpl_vars['isHidden']->value||$_smarty_tpl->tpl_vars['canMoveToHidden']->value){?><li><a class="move_topic" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+move_topic'),$_smarty_tpl);?>
</a></li><?php }?><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['canEdit']->value&&$_smarty_tpl->tpl_vars['isOwner']->value||$_smarty_tpl->tpl_vars['isModerator']->value){?>
                    <li><a class="delete_topic" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+delete_topic'),$_smarty_tpl);?>
</a></li>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['tb']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['tblink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tblink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tblink']->key => $_smarty_tpl->tpl_vars['tblink']->value){
$_smarty_tpl->tpl_vars['tblink']->_loop = true;
?>
                    <li><a<?php if (isset($_smarty_tpl->tpl_vars['tblink']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['tblink']->value['class'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['tblink']->value['href'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tblink']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['tblink']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tblink']->value['label'];?>
</a></li>
                <?php } ?>
                <?php }?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['canSubscribe']->value||$_smarty_tpl->tpl_vars['isSubscribed']->value){?>
                <input type="checkbox" id="cb-subscribe" <?php if ($_smarty_tpl->tpl_vars['isSubscribed']->value){?>checked="checked"<?php }?> />
                <label for="cb-subscribe"><?php echo smarty_function_text(array('key'=>'forum+subscribe'),$_smarty_tpl);?>
</label>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_info','langLabel'=>'forum+this_topic','addClass'=>'ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }?>
</div>

<?php if (!$_smarty_tpl->tpl_vars['isHidden']->value||$_smarty_tpl->tpl_vars['canMoveToHidden']->value){?>
    
    <div id="move_topic_form" style="display: none;">
        <div class="ow_center">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'move-topic-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'move-topic-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


            <?php echo smarty_function_input(array('name'=>'group-id'),$_smarty_tpl);?>

            <b><?php echo smarty_function_error(array('name'=>'group-id'),$_smarty_tpl);?>
</b><br /><br />

            <?php echo smarty_function_input(array('name'=>'topic-id'),$_smarty_tpl);?>


            <div class="ow_submit"><?php echo smarty_function_submit(array('name'=>'save'),$_smarty_tpl);?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'move-topic-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
<?php }?><?php }} ?>