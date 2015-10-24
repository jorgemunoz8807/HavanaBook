<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:58:55
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\controllers\view_index.html" */ ?>
<?php /*%%SmartyHeaderCode:15835548e94bf17c813-73864367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8efc94e5b8ff6af4a5f9227e2114b6808cf05b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\controllers\\view_index.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15835548e94bf17c813-73864367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tb' => 0,
    'info' => 0,
    'paging' => 0,
    'adjasentUrl' => 0,
    'comments' => 0,
    'isAuthorExists' => 0,
    'displayname' => 0,
    'username' => 0,
    'tagCloud' => 0,
    'rate' => 0,
    'author' => 0,
    'uname' => 0,
    'archive' => 0,
    'months' => 0,
    'month' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e94bf1ed5c3_45507521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e94bf1ed5c3_45507521')) {function content_548e94bf1ed5c3_45507521($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_user_link')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.user_link.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
?>      	<div class="clearfix">
         	<div class="ow_superwide" style="float:left;">
         		<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<div class="clearfix">
						<?php echo $_smarty_tpl->tpl_vars['info']->value['dto']->post;?>

					</div>
					<div class="ow_stdmargin"><center><br /><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center></div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','toolbar'=>$_smarty_tpl->tpl_vars['tb']->value,'addClass'=>"ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['info']->value['dto']->title,'description'=>$_smarty_tpl->tpl_vars['info']->value['dto']->post,'entityType'=>'blogs','entityId'=>$_smarty_tpl->tpl_vars['info']->value['dto']->id),$_smarty_tpl);?>

                
                <?php echo smarty_function_add_content(array('key'=>'blogs.blog_view.content.after_blog_post'),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['adjasentUrl']->value){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                     <div class="clearfix">
	                        <div style="float:left;">
	                        	<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['adjasentUrl']->value['prev'], $tmp)>0){?>
	                        		<a href="<?php echo $_smarty_tpl->tpl_vars['adjasentUrl']->value['prev'];?>
"><?php echo smarty_function_text(array('key'=>"blogs+prev_post"),$_smarty_tpl);?>
</a> <span class="ow_ic_left_arrow" style="background-repeat: no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
	                        	<?php }?>
	                       	</div>
	                        <div style="float:right;">
	                        	<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['adjasentUrl']->value['next'], $tmp)>0){?>
	                        		<span class="ow_ic_right_arrow" style="background-repeat: no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="<?php echo $_smarty_tpl->tpl_vars['adjasentUrl']->value['next'];?>
"><?php echo smarty_function_text(array('key'=>"blogs+next_post"),$_smarty_tpl);?>
</a>
	                        	<?php }?>
	                       	</div>
	                     </div>

	                     <center> <span class="ow_ic_up_arrow" style="background-repeat: no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="<?php echo $_smarty_tpl->tpl_vars['adjasentUrl']->value['index'];?>
"><?php echo smarty_function_text(array('key'=>"blogs+blog_index"),$_smarty_tpl);?>
</a></center>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>


         	</div>

            <div class="ow_supernarrow" style="float:right;">
               <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"blogs+post_title",'iconClass'=>"ow_ic_picture")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"blogs+post_title",'iconClass'=>"ow_ic_picture"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <table class="ow_table_3 ow_form ow_nomargin">
                     <tbody>
                     	<?php if ($_smarty_tpl->tpl_vars['isAuthorExists']->value){?>
                        <tr class="ow_tr_first">
                           <td class="ow_label"><?php echo smarty_function_text(array('key'=>"blogs+by"),$_smarty_tpl);?>
</td>
                           <td class="ow_value">
                           	<?php echo smarty_function_user_link(array('name'=>$_smarty_tpl->tpl_vars['displayname']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value),$_smarty_tpl);?>

                           </td>
                        </tr>
                        <?php }?>
                        <tr class="<?php if (!$_smarty_tpl->tpl_vars['isAuthorExists']->value){?>ow_tr_first<?php }?> ow_tr_last">
                           <td class="ow_label"><?php echo smarty_function_text(array('key'=>"blogs+added"),$_smarty_tpl);?>
</td>
	                           <td class="ow_value"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['info']->value['dto']->timestamp),$_smarty_tpl);?>
</td>
                        </tr>
                     </tbody>
                  </table>
               <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>"blogs+post_title",'iconClass'=>"ow_ic_picture"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


               	<?php echo $_smarty_tpl->tpl_vars['tagCloud']->value;?>


				<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['isAuthorExists']->value){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->tpl_vars["uname"] = new Smarty_variable($_smarty_tpl->tpl_vars['author']->value->getUsername(), null, 0);?>
	                  <ul class="ow_regular">
	                  	<li><a href="<?php echo smarty_function_url_for_route(array('for'=>"user-blog:[user=>".((string)$_smarty_tpl->tpl_vars['uname']->value)."]"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>"base+all"),$_smarty_tpl);?>
</a> </li>
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
	                  			<?php $_smarty_tpl->tpl_vars['u'] = new Smarty_variable($_smarty_tpl->tpl_vars['author']->value->getUsername(), null, 0);?>
	                  			<li>
	                  				<a href="<?php echo smarty_function_url_for_route(array('for'=>"user-blog:[user=>".((string)$_smarty_tpl->tpl_vars['u']->value)."]"),$_smarty_tpl);?>
?month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo smarty_function_text(array('key'=>"base+month_".((string)$_smarty_tpl->tpl_vars['month']->value)),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</a>
	                  			</li>
	                  		<?php } ?>
	                  	<?php } ?>
	                  </ul>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'langLabel'=>"blogs+blog_archive_lbl_archives",'iconClass'=>"ow_ic_clock"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
            </div>
      	</div><?php }} ?>