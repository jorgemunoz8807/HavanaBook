<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\decorators\box_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1550548e8c47842805-60831183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bccecd2b59a72d46c592859f4d1193190709643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\decorators\\box_toolbar.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1550548e8c47842805-60831183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c47873b16_56727872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c47873b16_56727872')) {function content_548e8c47873b16_56727872($_smarty_tpl) {?><div class="owm_box_toolbar">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>    
    <?php $_smarty_tpl->_capture_stack[0][] = array("toolbarCommonAttrs", null, null); ob_start(); ?> <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])){?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?> style="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])){?>display: <?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?>
        <a <?php echo Smarty::$_smarty_vars['capture']['toolbarCommonAttrs'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['rel'])){?>rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
">
            <span>
    <?php }else{ ?>
        <span <?php echo Smarty::$_smarty_vars['capture']['toolbarCommonAttrs'];?>
>
    <?php }?>
    
    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?>
            </span>
        </a>
    <?php }else{ ?>
        </span>
    <?php }?>
<?php } ?>
</div>

<?php }} ?>