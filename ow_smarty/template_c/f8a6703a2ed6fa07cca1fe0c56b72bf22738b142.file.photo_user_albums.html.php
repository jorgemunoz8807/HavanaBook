<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:52:56
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\controllers\photo_user_albums.html" */ ?>
<?php /*%%SmartyHeaderCode:30416548e85489ca962-01581201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a6703a2ed6fa07cca1fe0c56b72bf22738b142' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\controllers\\photo_user_albums.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30416548e85489ca962-01581201',
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
  'unifunc' => 'content_548e8548a09337_53310095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8548a09337_53310095')) {function content_548e8548a09337_53310095($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>'albums'),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>"albums",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }} ?>