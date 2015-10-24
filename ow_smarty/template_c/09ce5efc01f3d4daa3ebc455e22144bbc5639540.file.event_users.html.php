<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 06:55:14
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\components\event_users.html" */ ?>
<?php /*%%SmartyHeaderCode:32155548ef6528887c1-99413426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09ce5efc01f3d4daa3ebc455e22144bbc5639540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\components\\event_users.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32155548ef6528887c1-99413426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userListMenu' => 0,
    'userLists' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ef652956d14_59400323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ef652956d14_59400323')) {function content_548ef652956d14_59400323($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['userListMenu']->value;?>

<div id="userLists">
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userLists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_lists']['first'] = $_smarty_tpl->tpl_vars['list']->first;
?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
"<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['user_lists']['first']){?>} style="display:none;"<?php }?>>
         <?php echo $_smarty_tpl->tpl_vars['list']->value['cmp'];?>

    </div>
    <div style="display:none" id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
">
    	<?php if ($_smarty_tpl->tpl_vars['list']->value['bottomLinkEnable']){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['list']->value['toolbarArray']),$_smarty_tpl);?>
<?php }?>
    </div>
	<?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['userLists']->value[0]['bottomLinkEnable']){?><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['userLists']->value[0]['toolbarArray']),$_smarty_tpl);?>
<?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>