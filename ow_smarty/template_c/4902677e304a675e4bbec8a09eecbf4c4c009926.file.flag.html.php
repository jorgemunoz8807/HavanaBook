<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:37:58
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\flag.html" */ ?>
<?php /*%%SmartyHeaderCode:26633548e8fd63fa689-35254075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4902677e304a675e4bbec8a09eecbf4c4c009926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\flag.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26633548e8fd63fa689-35254075',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8fd641eeb6_54807543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8fd641eeb6_54807543')) {function content_548e8fd641eeb6_54807543($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.flags-input ul li{
    float: left;
    width: 100px !important;
    text-align: left;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div style="height: 40px; text-align: center; margin-top: 10px;" class="flags-container">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"flag")); $_block_repeat=true; echo smarty_block_form(array('name'=>"flag"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="clearfix flags-input">
        <?php echo smarty_function_input(array('name'=>"reason",'onchange'=>"$"."(this.form).submit(); "."$"."('.flags-input').hide(); "."$"."('.flags-container').addClass('ow_preloader_content');"),$_smarty_tpl);?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"flag"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>