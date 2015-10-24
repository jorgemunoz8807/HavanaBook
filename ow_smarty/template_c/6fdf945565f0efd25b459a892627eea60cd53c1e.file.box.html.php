<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\decorators\box.html" */ ?>
<?php /*%%SmartyHeaderCode:32420548e8c476dd185-51564037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdf945565f0efd25b459a892627eea60cd53c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\decorators\\box.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32420548e8c476dd185-51564037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c476f35c9_46727590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c476f35c9_46727590')) {function content_548e8c476f35c9_46727590($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="owm_box<?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['capEnabled']){?>
        <div class="owm_box_cap<?php echo $_smarty_tpl->tpl_vars['data']->value['capAddClass'];?>
 clearfix">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><h3 class="<?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</h3><?php }?><?php echo $_smarty_tpl->tpl_vars['data']->value['capContent'];?>

        </div>
    <?php }?>
    <div class="owm_box_body">
        <div class="owm_box_body_cont clearfix">
            <div class="owm_box_padding">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

            </div>
        </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
        <div class="owm_box_bottom">
            <?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['data']->value['toolbar']),$_smarty_tpl);?>

        </div>
    <?php }?>
</div><?php }} ?>