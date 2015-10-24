<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:26:14
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\controllers\photo_user_photos.html" */ ?>
<?php /*%%SmartyHeaderCode:7756548e8d164f0359-23600556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063e659b25d03d366c157c80d80e656fab4ce004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\controllers\\photo_user_photos.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7756548e8d164f0359-23600556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageHead' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8d1653f189_50000664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8d1653f189_50000664')) {function content_548e8d1653f189_50000664($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>'userPhotos'),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>"userPhotos",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }} ?>