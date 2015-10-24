<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 01:28:45
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:11170548ea9cd82d919-20822697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1c72d3d4eaee31ff988c6af9aed9ba6d5d8fb15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\sign_in.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11170548ea9cd82d919-20822697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ea9cd890997_33278123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ea9cd890997_33278123')) {function content_548ea9cd890997_33278123($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'sign-in')); $_block_repeat=true; echo smarty_block_form(array('name'=>'sign-in'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="owm_login_form">
    <div class="clearfix owm_std_margin_top">
        <div class="owm_login_txt owm_float_left">
            <?php echo smarty_function_text(array('key'=>'base+base_sign_in_cap_label'),$_smarty_tpl);?>

        </div>
        <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_forgot_password'),$_smarty_tpl);?>
" class="owm_forgot_txt owm_float_right"><?php echo smarty_function_text(array('key'=>'base+forgot_password_label'),$_smarty_tpl);?>
</a>
    </div>
    <div class="owm_login_field owm_login_username">
        <?php echo smarty_function_input(array('name'=>'identity'),$_smarty_tpl);?>

    </div>
    <div class="owm_login_field owm_login_pass">
        <?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>

    </div>
    <div style="display:none;"><?php echo smarty_function_input(array('name'=>'remember'),$_smarty_tpl);?>
<?php echo smarty_function_label(array('name'=>'remember'),$_smarty_tpl);?>
</div>
    <div class="owm_btn_wide owm_btn_positive owm_std_margin_top">
        <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'sign-in'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_component(array('class'=>"BASE_MCMP_ConnectButtonList"),$_smarty_tpl);?>


<?php }} ?>