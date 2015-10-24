<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:00:47
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\controllers\user_blog_index.html" */ ?>
<?php /*%%SmartyHeaderCode:21857548f13bfe43f40-08692201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd4edc08a93680c00ae1f49695d50b827e5dc4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\controllers\\user_blog_index.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21857548f13bfe43f40-08692201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'post' => 0,
    'id' => 0,
    'tb' => 0,
    'paging' => 0,
    'author' => 0,
    'username' => 0,
    'archive' => 0,
    'months' => 0,
    'month' => 0,
    'year' => 0,
    'isOwner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f13bff23223_15546173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f13bff23223_15546173')) {function content_548f13bff23223_15546173($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="clearfix">
    <div class="ow_superwide" style="float:left;">
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['id'], null, 0);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'label'=>$_smarty_tpl->tpl_vars['post']->value['title'],'href'=>$_smarty_tpl->tpl_vars['post']->value['href'],'addClass'=>"ow_stdmargin ow_stdpadding",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'label'=>$_smarty_tpl->tpl_vars['post']->value['title'],'href'=>$_smarty_tpl->tpl_vars['post']->value['href'],'addClass'=>"ow_stdmargin ow_stdpadding",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value]), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
<?php if ($_smarty_tpl->tpl_vars['post']->value['truncated']){?>... <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['href'];?>
"><?php echo smarty_function_text(array('key'=>'blogs+more'),$_smarty_tpl);?>
</a><?php }?>


                    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['parts'])&&count($_smarty_tpl->tpl_vars['post']->value['parts'])>1){?>
                        <br />
                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['href'];?>
"><?php echo smarty_function_text(array('key'=>"blogs+read_more"),$_smarty_tpl);?>
</a>&nbsp;&raquo;
                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'label'=>$_smarty_tpl->tpl_vars['post']->value['title'],'href'=>$_smarty_tpl->tpl_vars['post']->value['href'],'addClass'=>"ow_stdmargin ow_stdpadding",'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value]), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
            <?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>

        <?php } ?>

        <div class="ow_stdmargin"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>

    </div>

    <div class="ow_supernarrow" style="float:right;">

       <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','entityType'=>'user_blog','entityId'=>$_smarty_tpl->tpl_vars['author']->value->id),$_smarty_tpl);?>


       <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <ul class="ow_regular">
            <li><a href="<?php echo smarty_function_url_for_route(array('for'=>"user-blog:[user=>".((string)$_smarty_tpl->tpl_vars['username']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>"base+all"),$_smarty_tpl);?>
</a></li>
            <?php  $_smarty_tpl->tpl_vars['months'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['months']->_loop = false;
 $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['archive']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['months']->key => $_smarty_tpl->tpl_vars['months']->value){
$_smarty_tpl->tpl_vars['months']->_loop = true;
 $_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->tpl_vars['months']->key;
?>
                <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
                    <li><a href="<?php echo smarty_function_url_for_route(array('for'=>"user-blog:[user=>".((string)$_smarty_tpl->tpl_vars['username']->value)."]"),$_smarty_tpl);?>
?month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo smarty_function_text(array('key'=>"base+month_".((string)$_smarty_tpl->tpl_vars['month']->value)),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</a> </li>
                <?php } ?>
            <?php } ?>
          </ul>
       <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       <?php if ($_smarty_tpl->tpl_vars['isOwner']->value){?>
       <div style="" class="ow_box ow_stdmargin clearfix ow_no_cap ow_break_word">
            <div class="ow_my_drafts_widget clearfix ow_center">
                <?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>"blogs+my_drafts",'class'=>"ow_ic_draft",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['my_drafts_url']->value)."'"),$_smarty_tpl);?>

            </div>
        </div>
       <?php }?>
       <?php echo smarty_function_add_content(array('key'=>'blogs.user_blog.content.after_archive'),$_smarty_tpl);?>

    </div>
</div><?php }} ?>