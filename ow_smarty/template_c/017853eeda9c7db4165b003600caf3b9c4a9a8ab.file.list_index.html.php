<?php /* Smarty version Smarty-3.1.12, created on 2014-12-19 02:04:24
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_guests\views\controllers\list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:225855493f828dac801-78891012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017853eeda9c7db4165b003600caf3b9c4a9a8ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_guests\\views\\controllers\\list_index.html',
      1 => 1394000586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225855493f828dac801-78891012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'guests' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5493f828dd1407_16718697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493f828dd1407_16718697')) {function content_5493f828dd1407_16718697($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<?php if ($_smarty_tpl->tpl_vars['guests']->value){?>
    <?php echo $_smarty_tpl->tpl_vars['guests']->value;?>

<?php }else{ ?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'ocsguests+no_guests'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>