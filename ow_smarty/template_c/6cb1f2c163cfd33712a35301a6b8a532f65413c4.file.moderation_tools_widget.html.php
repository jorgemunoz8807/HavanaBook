<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 17:28:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\moderation_tools_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:12492548f8aa0599f54-72087921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb1f2c163cfd33712a35301a6b8a532f65413c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\moderation_tools_widget.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12492548f8aa0599f54-72087921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f8aa05ee9d2_95604072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f8aa05ee9d2_95604072')) {function content_548f8aa05ee9d2_95604072($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


var p = $("#<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
");

p.on("click", "[data-tab]", function() {
    $("[data-tab]", p).removeClass("active");
    $("[data-content]", p).hide();
    var tab = $(this).addClass("active").data("tab");
    $("[data-content=" + tab + "]", p).show();
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <div class="clearfix">
        <div class="ow_box_menu">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                <a href="javascript://" <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?> class="active"<?php }?> data-tab="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                   <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                </a>
            <?php } ?>
        </div>
    </div>

    <div class="ow_moderation_panel_content">
        <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
            <div data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" <?php if (!$_smarty_tpl->tpl_vars['item']->value['active']){?> style="display: none;"<?php }?>>
                 <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            </div>
        <?php } ?>
    </div>
</div><?php }} ?>