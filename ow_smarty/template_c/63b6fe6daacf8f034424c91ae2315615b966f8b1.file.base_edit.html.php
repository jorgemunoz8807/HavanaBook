<?php /* Smarty version Smarty-3.1.12, created on 2014-12-17 01:02:10
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\controllers\base_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:235645491469264a7d1-89765566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b6fe6daacf8f034424c91ae2315615b966f8b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\controllers\\base_edit.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235645491469264a7d1-89765566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err_msg' => 0,
    'tdId' => 0,
    'chId' => 0,
    'endDateFlag' => 0,
    'imgsrc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_549146926dea46_56459382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549146926dea46_56459382')) {function content_549146926dea46_56459382($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.ow_event_time {
    padding-left: 3px;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_superwide ow_automargin">

    <?php if (empty($_smarty_tpl->tpl_vars['err_msg']->value)){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'event_edit')); $_block_repeat=true; echo smarty_block_form(array('name'=>'event_edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_stdmargin">
            <tr class="ow_alt2 ow_tr_first">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_title_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_date_label'),$_smarty_tpl);?>
</td>
                <td class="ow_value">
                    <div class="clearfix">
                        <div class="ow_left ow_event_date"><?php echo smarty_function_input(array('name'=>'start_date'),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>'start_date'),$_smarty_tpl);?>
</div>
                        <div class="ow_left ow_event_time"><?php echo smarty_function_input(array('name'=>'start_time'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'start_time'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_date_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2" id="<?php echo $_smarty_tpl->tpl_vars['tdId']->value;?>
">
		        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_end_date_label'),$_smarty_tpl);?>
 <input type="checkbox" name="endDateFlag" id="<?php echo $_smarty_tpl->tpl_vars['chId']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['endDateFlag']->value)){?> checked="checked"<?php }?> /></td>
		        <td class="ow_value">
                    <div class="clearfix">
                        <div class="ow_left ow_event_date">
                            <?php echo smarty_function_input(array('name'=>'end_date'),$_smarty_tpl);?>
<?php echo smarty_function_error(array('name'=>'end_date'),$_smarty_tpl);?>
</div>
                        <div class="ow_left ow_event_time"><?php echo smarty_function_input(array('name'=>'end_time'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'end_time'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_end_date_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'desc'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_desc_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'location'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'location'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'location'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_location_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php if (!empty($_smarty_tpl->tpl_vars['imgsrc']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['imgsrc']->value;?>
" />&nbsp;&nbsp;<?php }?><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_image_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_view'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_who_can_view_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1 ow_tr_last">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_invite'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_who_can_invite_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		</table>
		<div class="clearfix ow_stdmargin ow_submit">
			<div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_ic_edit'),$_smarty_tpl);?>
</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'event_edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }else{ ?>
        <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
    <?php }?>
</div><?php }} ?>