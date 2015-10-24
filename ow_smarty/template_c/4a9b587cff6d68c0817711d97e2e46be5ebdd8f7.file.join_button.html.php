<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:28:45
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\join_button.html" */ ?>
<?php /*%%SmartyHeaderCode:8243548ea9cd998680-96971668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9b587cff6d68c0817711d97e2e46be5ebdd8f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\join_button.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8243548ea9cd998680-96971668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ea9cd99fd31_68841365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ea9cd99fd31_68841365')) {function content_548ea9cd99fd31_68841365($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<div class="owm_join_form">
    <div class="clearfix">
        <div class="owm_join_txt owm_float_left">New to site?</div>
    </div>
    <div class="owm_btn_wide">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo smarty_function_text(array('key'=>"base+join_index_join_button"),$_smarty_tpl);?>
</a>
    </div>    

</div><?php }} ?>