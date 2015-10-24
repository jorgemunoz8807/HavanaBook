<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\video\views\components\video_list_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:30792548e53107ead16-17467725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9af43a1fb18194b20aedd8c847006cc20a4b3b2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\video\\views\\components\\video_list_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30792548e53107ead16-17467725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'latest' => 0,
    'featured' => 0,
    'toprated' => 0,
    'menu' => 0,
    'items' => 0,
    'showTitles' => 0,
    'c' => 0,
    'nocontent' => 0,
    'toolbars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5310882b84_46798503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5310882b84_46798503')) {function content_548e5310882b84_46798503($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $(document).ready(function(){
        var $tb_container = $(".ow_box_toolbar_cont", $("#video_list_widget").parents('.ow_box, .ow_box_empty').get(0));

        $("#video-widget-menu-featured").click(function(){
            $tb_container.html($("div#video-widget-toolbar-featured").html());
        });

        $("#video-widget-menu-latest").click(function(){
            $tb_container.html($("div#video-widget-toolbar-latest").html());
        });

        $("#video-widget-menu-toprated").click(function(){
            $tb_container.html($("div#video-widget-toolbar-toprated").html());
        });
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="video_list_widget">

    <?php if ($_smarty_tpl->tpl_vars['latest']->value||$_smarty_tpl->tpl_vars['featured']->value||$_smarty_tpl->tpl_vars['toprated']->value){?> <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?> <?php }?>
    
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'nocontent', null); ob_start(); ?>
       <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video'),$_smarty_tpl);?>
, <a href="<?php echo smarty_function_url_for(array('for'=>"VIDEO_CTRL_Add:index"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'video+add_new'),$_smarty_tpl);?>
</a></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
	   <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
	   <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
	   </div>
	   <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

	   <?php } ?>
	<?php }else{ ?>
	<div class="clearfix ow_center">
	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['clips']['iteration']==1){?>
		   <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
		<?php }else{ ?>
            <div class="ow_other_video_thumb video_thumb_no_title ow_left">
				<a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
				</a>
			</div>
		<?php }?>
    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
		
	<?php } ?>
	</div>
	<?php }?>	
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['featured']->value){?>
	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display: none">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
       <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
       <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
       </div>
       <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

       <?php } ?>
    <?php }else{ ?>
    <div class="clearfix ow_center">
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['clips']['iteration']==1){?>
           <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php }else{ ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
	        </a>
        <?php }?>
    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

    <?php } ?>
    </div>
    <?php }?>
    </div>
    <?php }?>
	
	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display: none">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
       <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toprated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
       <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
       </div>
       <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

       <?php } ?>
    <?php }else{ ?>
    <div class="clearfix ow_center">
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toprated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['clips']['iteration']==1){?>
           <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php }else{ ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" /><?php }?>
	        </a>
        <?php }?>
    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
        
    <?php } ?>
    </div>
    <?php }?>
    </div>
	
	<?php if ($_smarty_tpl->tpl_vars['latest']->value){?><div id="video-widget-toolbar-latest" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['featured']->value){?><div id="video-widget-toolbar-featured" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['featured']),$_smarty_tpl);?>
</div><?php }?>  
    <?php if ($_smarty_tpl->tpl_vars['toprated']->value){?><div id="video-widget-toolbar-toprated" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['toprated']),$_smarty_tpl);?>
</div><?php }?>
    
</div><?php }} ?>