<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:25:06
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\controllers\photo_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:23709548e54929a8877-04108391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579adc16a41f09ce77b0c8c97075c9f8846e6a9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\controllers\\photo_view_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23709548e54929a8877-04108391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'pageHead' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e54929d0544_98713051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e54929d0544_98713051')) {function content_548e54929d0544_98713051($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>

<?php }} ?>