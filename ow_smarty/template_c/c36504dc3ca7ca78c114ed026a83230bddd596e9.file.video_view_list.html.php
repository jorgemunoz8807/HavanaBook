<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:27:17
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\video\views\controllers\video_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:7824548e63257af6d8-15364593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c36504dc3ca7ca78c114ed026a83230bddd596e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\video\\views\\controllers\\video_view_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7824548e63257af6d8-15364593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'showAddButton' => 0,
    'videoMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e63257da261_11814033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e63257da261_11814033')) {function content_548e63257da261_11814033($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?><div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'video.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['showAddButton']->value){?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-video','langLabel'=>'video+add_new'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['videoMenu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoList','type'=>$_smarty_tpl->tpl_vars['listType']->value,'count'=>5),$_smarty_tpl);?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }} ?>