<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:17
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\newsfeed\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:28940548e6799d98192-48110849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1aaea8c5b55bab7b03798cebda3e201b0ba2325' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\newsfeed\\views\\controllers\\admin_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28940548e6799d98192-48110849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'configs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6799dd8419_55265250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6799dd8419_55265250')) {function content_548e6799dd8419_55265250($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.comments_count input {
    width: 50px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$('#allow_comments_btn').click(function() {
    if ( this.checked )
    {
        $('#comments_count_c').show();
    }
    else
    {
        $('#comments_count_c').hide();
    }
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'NEWSFEED_ConfigSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'NEWSFEED_ConfigSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'newsfeed+admin_settings_title'),$_smarty_tpl);?>
</span>
        </th>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'index_status_enabled'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'index_status_enabled'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_likes'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_likes'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'features_expanded'),$_smarty_tpl);?>
</td>
        <td class="ow_value "><?php echo smarty_function_input(array('name'=>'features_expanded'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>

    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'allow_comments'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'allow_comments','id'=>"allow_comments_btn"),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"></td>
    </tr>
    <tr class="ow_alt1 ow_tr_last" id="comments_count_c" <?php if (!$_smarty_tpl->tpl_vars['configs']->value['allow_comments']){?>style="display: none;"<?php }?>>
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'comments_count'),$_smarty_tpl);?>
</td>
        <td class="ow_value comments_count"><?php echo smarty_function_input(array('name'=>'comments_count'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'newsfeed+admin_comments_count_desc'),$_smarty_tpl);?>
</td>
    </tr>

</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'NEWSFEED_ConfigSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>