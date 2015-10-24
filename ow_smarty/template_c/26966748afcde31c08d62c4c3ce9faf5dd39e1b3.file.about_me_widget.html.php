<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\about_me_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:16735548e56be0d79f3-79781849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26966748afcde31c08d62c4c3ce9faf5dd39e1b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\about_me_widget.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16735548e56be0d79f3-79781849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownerMode' => 0,
    'noContent' => 0,
    'contentText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be0ec198_65547243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be0ec198_65547243')) {function content_548e56be0ec198_65547243($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.ow_about_me_widget {
    padding: 5px 4px 10px;
    overflow: hidden;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<div class="ow_highbox ow_about_me_widget">
    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value){?>
        <div class="ow_center">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"about_me_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"about_me_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form_auto_click"> 
                    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"about_me"),$_smarty_tpl);?>
</div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['noContent']->value){?>ow_submit_auto_click<?php }?>">
                        <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"about_me_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }elseif($_smarty_tpl->tpl_vars['contentText']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['contentText']->value;?>

    <?php }?>

</div><?php }} ?>