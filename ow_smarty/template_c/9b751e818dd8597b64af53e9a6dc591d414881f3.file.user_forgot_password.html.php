<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 08:48:30
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\user_forgot_password.html" */ ?>
<?php /*%%SmartyHeaderCode:282975490625e40a968-42593386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b751e818dd8597b64af53e9a6dc591d414881f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\user_forgot_password.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282975490625e40a968-42593386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5490625e459677_83393853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490625e459677_83393853')) {function content_5490625e459677_83393853($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?><div class="owm_std_margin_top owm_blank_content">
    <div class="owm_std_margin_bottom">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'forgot-password')); $_block_repeat=true; echo smarty_block_form(array('name'=>'forgot-password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="owm_login_txt">
            <?php echo smarty_function_text(array('key'=>'base+forgot_password_form_text'),$_smarty_tpl);?>

        </div>
        <div class="owm_login_field owm_login_pass">
            <?php echo smarty_function_input(array('name'=>'email','class'=>'ow_smallmargin'),$_smarty_tpl);?>

        </div>
        <div class="owm_btn_wide owm_btn_positive owm_std_margin_top">
            <?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'forgot-password'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="owm_std_margin_top">
        <?php echo smarty_function_component(array('class'=>"BASE_MCMP_ConnectButtonList"),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }} ?>