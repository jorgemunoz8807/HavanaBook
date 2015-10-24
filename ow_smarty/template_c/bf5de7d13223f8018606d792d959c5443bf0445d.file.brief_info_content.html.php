<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:56:39
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\brief_info_content.html" */ ?>
<?php /*%%SmartyHeaderCode:17425548e8627be0d96-80642279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5de7d13223f8018606d792d959c5443bf0445d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\brief_info_content.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17425548e8627be0d96-80642279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8627c51084_74715107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8627c51084_74715107')) {function content_548e8627c51084_74715107($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_modifier_autolink')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\modifier.autolink.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_group_brief_info .image
{
    width: 100px;
    margin-right: -100px;
}

.ow_group_brief_info .image img
{
    width: 100px;
}

.ow_group_brief_info .details
{
    padding-left: 5px;
    position: relative;
    overflow: hidden;
}

.ow_group_brief_info .details .controls
{
    position: absolute;
    right: 0;
    top: 0;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_group_brief_info clearfix ow_smallmargin">
    <?php if ($_smarty_tpl->tpl_vars['group']->value['imgUrl']){?>
        <div class="image ow_left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['imgUrl'];?>
" /></a>
        </div>
        <div class="details" style="margin-left: 100px;">
    <?php }else{ ?>
        <div class="details">
    <?php }?>

        <h3 class="title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['group']->value['status']=="approval"){?> <span class="ow_small ow_remark">(<?php echo smarty_function_text(array('key'=>"base+pending_approval"),$_smarty_tpl);?>
)</span><?php }?>
        </h3>

        <div class="body ow_smallmargin">
            <?php echo smarty_modifier_autolink($_smarty_tpl->tpl_vars['group']->value['description']);?>

        </div>
        <div class="clearfix">
                <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['group']->value['title'],'url'=>$_smarty_tpl->tpl_vars['group']->value['url'],'description'=>$_smarty_tpl->tpl_vars['group']->value['description'],'image'=>$_smarty_tpl->tpl_vars['group']->value['imgUrl'],'entityType'=>'groups','entityId'=>$_smarty_tpl->tpl_vars['group']->value['id']),$_smarty_tpl);?>

        </div>
    </div>

</div>
<div class="clearfix">
    <?php echo smarty_function_add_content(array('key'=>'groups.brief_info.content.after_group_description'),$_smarty_tpl);?>

</div>
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>