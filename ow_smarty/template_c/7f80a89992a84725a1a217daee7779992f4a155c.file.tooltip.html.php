<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:17
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\decorators\tooltip.html" */ ?>
<?php /*%%SmartyHeaderCode:21536548e52f9aab393-86655357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f80a89992a84725a1a217daee7779992f4a155c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\decorators\\tooltip.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21536548e52f9aab393-86655357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e52f9ab22e2_69482478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e52f9ab22e2_69482478')) {function content_548e52f9ab22e2_69482478($_smarty_tpl) {?>
<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }} ?>