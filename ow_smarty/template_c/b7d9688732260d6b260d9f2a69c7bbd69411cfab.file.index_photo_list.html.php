<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\index_photo_list.html" */ ?>
<?php /*%%SmartyHeaderCode:30266548e531072dad1-78461980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d9688732260d6b260d9f2a69c7bbd69411cfab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\index_photo_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30266548e531072dad1-78461980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'latest' => 0,
    'featured' => 0,
    'toprated' => 0,
    'menu' => 0,
    'url' => 0,
    'items' => 0,
    'p' => 0,
    'nocontent' => 0,
    'showToolbar' => 0,
    'toolbars' => 0,
    'wrapBox' => 0,
    'showTitle' => 0,
    'boxType' => 0,
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5310789d07_27483738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5310789d07_27483738')) {function content_548e5310789d07_27483738($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.ow_photo_item_widget {
    width: 72px;
    height: 72px;
    background-size: cover;
    background-repeat: no-repeat;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'cmp', null); ob_start(); ?>
    <div id="photo_list_cmp<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['latest']->value||$_smarty_tpl->tpl_vars['featured']->value||$_smarty_tpl->tpl_vars['toprated']->value){?>
            <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'nocontent', null); ob_start(); ?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo'),$_smarty_tpl);?>
, <a href="javascript:<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
()"><?php echo smarty_function_text(array('key'=>'photo+add_new'),$_smarty_tpl);?>
</a></div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
" list-type="latest">
                   <div class="ow_photo_item_widget" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
);" ></div>
                </a>
            <?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php } ?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['featured']->value){?>
            <div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display: none">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
" list-type="featured">
                       <div class="ow_photo_item_widget" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
);" ></div>
                    </a>
                <?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

                <?php } ?>
            </div>
        <?php }?>

        <div class="ow_lp_photos ow_center" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display: none">
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toprated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <a class="ow_lp_wrapper" rel="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
" list-type="toprated">
                   <div class="ow_photo_item_widget" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
);" ></div>
                </a>
            <?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php } ?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['showToolbar']->value){?>
            <?php if ($_smarty_tpl->tpl_vars['latest']->value){?><div id="photo-cmp-toolbar-latest-<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['featured']->value){?><div id="photo-cmp-toolbar-featured-<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['featured']),$_smarty_tpl);?>
</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['toprated']->value){?><div id="photo-cmp-toolbar-top-rated-<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['toprated']),$_smarty_tpl);?>
</div><?php }?>
        <?php }?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['wrapBox']->value){?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['showTitle']->value,'langLabel'=>'photo+photo_list_widget','iconClass'=>'ow_ic_picture','type'=>$_smarty_tpl->tpl_vars['boxType']->value,'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['showTitle']->value,'langLabel'=>'photo+photo_list_widget','iconClass'=>'ow_ic_picture','type'=>$_smarty_tpl->tpl_vars['boxType']->value,'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['showTitle']->value,'langLabel'=>'photo+photo_list_widget','iconClass'=>'ow_ic_picture','type'=>$_smarty_tpl->tpl_vars['boxType']->value,'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['latest']->value){?><div class="ow_box_toolbar_cont clearfix"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div><?php }?>
<?php }?><?php }} ?>