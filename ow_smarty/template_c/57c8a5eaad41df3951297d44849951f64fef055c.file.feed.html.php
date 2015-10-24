<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:02:07
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\feed.html" */ ?>
<?php /*%%SmartyHeaderCode:26853548faebf538216-20761687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c8a5eaad41df3951297d44849951f64fef055c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\feed.html',
      1 => 1404901678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26853548faebf538216-20761687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'list' => 0,
    'viewMore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548faebf542c84_90451751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548faebf542c84_90451751')) {function content_548faebf542c84_90451751($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="questions-list" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <ul class="ql-items ow_smallmargin">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </ul>
    <?php if ($_smarty_tpl->tpl_vars['viewMore']->value){?>
        <div class="ql_view_more_c">
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ql_view_more ow_ic_down_arrow",'langLabel'=>"questions+view_more_questions_btn"),$_smarty_tpl);?>

        </div>
    <?php }?>
</div><?php }} ?>