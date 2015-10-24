<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:23:06
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\edit_topic_index.html" */ ?>
<?php /*%%SmartyHeaderCode:6296548e8c5aa165d0-91069650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da51cf7f3e66aa16a86624d4de5b76d4d8237da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\edit_topic_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6296548e8c5aa165d0-91069650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isHidden' => 0,
    'componentForumCaption' => 0,
    'breadcrumb' => 0,
    'enableAttachments' => 0,
    'post' => 0,
    'postId' => 0,
    'attachments' => 0,
    'attm' => 0,
    'attachmentsCmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c5aa91aa4_07249084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c5aa91aa4_07249084')) {function content_548e8c5aa91aa4_07249084($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $("a.forum_delete_attachment").each(function(){
        
        var container_handler = $(this).closest(".attachment_container");
        
        $(this).click(function(){            
            
            if ( confirm(OW.getLanguageText('forum', 'confirm_delete_attachment')) )
            {
               var attachment_id = $(this).data("aid");
               
               var params = {};
               var url = '<?php echo smarty_function_url_for_route(array('for'=>'forum_delete_attachment'),$_smarty_tpl);?>
';
               params['attachmentId'] = attachment_id;
               
               $.ajaxSetup({dataType: 'json'});
               $.post(url, params, function(data){
                    if ( data.result == true ) {
                        OW.info(data.msg);
                        container_handler.remove();
                    }
                    else if (data.error != undefined) {
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



<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-topic-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-topic-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form" width="100%">
    <tbody>
        <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'2,1'),$_smarty_tpl);?>
ow_tr_first <?php if (!$_smarty_tpl->tpl_vars['enableAttachments']->value){?>ow_tr_last<?php }?>">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_subject'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>

                <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>

            </td>
        </tr>
        <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'2,1'),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_body'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <div class="ow_smallmargin">
                <?php echo smarty_function_input(array('name'=>'text','id'=>'post_body'),$_smarty_tpl);?>

                <?php echo smarty_function_error(array('name'=>'text'),$_smarty_tpl);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'postId', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php if (isset($_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['postId']->value])){?>
                    <div class="ow_file_attachment_preview clearfix">
                        <?php  $_smarty_tpl->tpl_vars['attm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value[$_smarty_tpl->tpl_vars['postId']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attm']->key => $_smarty_tpl->tpl_vars['attm']->value){
$_smarty_tpl->tpl_vars['attm']->_loop = true;
?>
                        <div class="attachment_container ow_file_attachment_block<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
">
                            <div class="ow_file_attachment_info">
                                <div class="ow_file_attachment_name">
                                    <?php if ($_smarty_tpl->tpl_vars['attm']->value['downloadUrl']!=''){?><a href="<?php echo $_smarty_tpl->tpl_vars['attm']->value['downloadUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['attm']->value['fileName'];?>
<?php }?>
                                    <span class="ow_file_attachment_size" style="display: inline-block;">(<?php echo $_smarty_tpl->tpl_vars['attm']->value['fileSize'];?>
Kb)</span>
                                </div>
                                <a href="javascript://" class="ow_file_attachment_close forum_delete_attachment" data-aid="<?php echo $_smarty_tpl->tpl_vars['attm']->value['id'];?>
"></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php }?>
                    <div class="ow_smallmargin">
                        <?php echo $_smarty_tpl->tpl_vars['attachmentsCmp']->value;?>

                    </div>
                <?php }?>
            </td>
        </tr>
    </tbody>
    </table>
    <div class="clearfix ow_stdmargin">
    <div class="ow_right">
		<?php echo smarty_function_submit(array('name'=>'save','class'=>"ow_ic_save ow_positive"),$_smarty_tpl);?>
 
	</div>
	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-topic-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>