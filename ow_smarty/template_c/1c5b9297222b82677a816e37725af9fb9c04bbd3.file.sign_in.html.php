<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:44:02
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:26307548e59021ae2e3-24967220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5b9297222b82677a816e37725af9fb9c04bbd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\sign_in.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26307548e59021ae2e3-24967220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteName' => 0,
    'joinUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e59021e2967_20035996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e59021e2967_20035996')) {function content_548e59021e2967_20035996($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
?><div class="ow_sign_in_wrap">
<h2><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</h2>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'sign-in')); $_block_repeat=true; echo smarty_block_form(array('name'=>'sign-in'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     <div class="clearfix">
        <div class="ow_sign_in">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <div class="ow_user_name">
                    <?php echo smarty_function_input(array('name'=>'identity'),$_smarty_tpl);?>

                </div>
                <div class="ow_password">
                    <?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>

                </div>
                <div class="ow_form_options clearfix">
                    <div class="ow_right">
                        <?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

                    </div>
                    <p class="ow_remember_me"><?php echo smarty_function_input(array('name'=>'remember'),$_smarty_tpl);?>
<?php echo smarty_function_label(array('name'=>'remember'),$_smarty_tpl);?>
</p>
                    <p class="ow_forgot_pass"><a href="<?php echo smarty_function_url_for_route(array('for'=>'base_forgot_password'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'base+forgot_password_label'),$_smarty_tpl);?>
</a></p>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <div class="ow_connect_buttons">
                <?php echo smarty_function_component(array('class'=>'BASE_CMP_SignInButtonList'),$_smarty_tpl);?>

            </div>
        </div>
        <div class="ow_sign_up">
            <p><?php echo smarty_function_text(array('key'=>'base+base_sign_in_txt'),$_smarty_tpl);?>
</p>
            <hr>
            <p> <a href="<?php echo $_smarty_tpl->tpl_vars['joinUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+join_submit_button_join'),$_smarty_tpl);?>
</a></p>
        </div>
     </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'sign-in'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>