<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 00:43:03
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\controllers\feed_view_item.html" */ ?>
<?php /*%%SmartyHeaderCode:11501548e9f1780ae43-23672932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2cfeef318de928c3c71948f8172ed30fa7930aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\controllers\\feed_view_item.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11501548e9f1780ae43-23672932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'entity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e9f17832999_33170959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e9f17832999_33170959')) {function content_548e9f17832999_33170959($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.newsfeed_item_view
{
    width: 600px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix">
    <div class="newsfeed_item_view ow_left">
        <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

    </div>
    <div class="ow_right">
        <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons'),$_smarty_tpl);?>

        <?php echo smarty_function_add_content(array('key'=>'newsfeed.item.content.right','entityType'=>$_smarty_tpl->tpl_vars['entity']->value['type'],'entityId'=>$_smarty_tpl->tpl_vars['entity']->value['id']),$_smarty_tpl);?>

    </div>
</div><?php }} ?>