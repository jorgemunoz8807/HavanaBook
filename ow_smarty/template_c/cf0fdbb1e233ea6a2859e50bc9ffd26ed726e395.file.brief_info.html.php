<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:00:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\brief_info.html" */ ?>
<?php /*%%SmartyHeaderCode:27006548e8706669b63-71235754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0fdbb1e233ea6a2859e50bc9ffd26ed726e395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\brief_info.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27006548e8706669b63-71235754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'box' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e870668ca46_38644105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e870668ca46_38644105')) {function content_548e870668ca46_38644105($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>