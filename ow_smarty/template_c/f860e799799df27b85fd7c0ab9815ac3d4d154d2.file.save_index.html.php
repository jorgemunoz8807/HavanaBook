<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 15:04:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\controllers\save_index.html" */ ?>
<?php /*%%SmartyHeaderCode:6259548f69089eeea5-67732013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f860e799799df27b85fd7c0ab9815ac3d4d154d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\controllers\\save_index.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6259548f69089eeea5-67732013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authMsg' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f6908a93734_89868389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f6908a93734_89868389')) {function content_548f6908a93734_89868389($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
?>
<div class="ow_blogpost_compose clearfix">

<?php if (!$_smarty_tpl->tpl_vars['authMsg']->value){?>
    <div class="ow_superwide ow_left">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"save")); $_block_repeat=true; echo smarty_block_form(array('name'=>"save"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <input type="hidden" id="save_post_command" name="command" />
        <table class="ow_table_1 ow_form ow_stdmargin">
            <tr class="ow_alt2 ow_tr_first">
                <td>
                    <?php echo smarty_function_label(array('name'=>"title"),$_smarty_tpl);?>
<br /><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>

                    <br /><?php echo smarty_function_error(array('name'=>"title"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="ow_alt1">
                <td>
                    <?php echo smarty_function_label(array('name'=>"post"),$_smarty_tpl);?>
<br />
                    <?php echo smarty_function_input(array('name'=>'post'),$_smarty_tpl);?>

                    <br /><?php echo smarty_function_error(array('name'=>"post"),$_smarty_tpl);?>

                </td>
                </tr>
            <tr class="ow_alt2 ow_tr_last">
                <td>
                    <?php echo smarty_function_label(array('name'=>"tf"),$_smarty_tpl);?>
 <br />
                    <?php echo smarty_function_input(array('name'=>'tf'),$_smarty_tpl);?>

                    <br /><?php echo smarty_function_error(array('name'=>"tf"),$_smarty_tpl);?>

                </td>
            </tr>
        </table>
        <div class="clearfix ow_stdmargin ow_submit ow_btn_delimiter">
        	<div class="ow_right"><?php echo smarty_function_submit(array('name'=>"draft",'class'=>"ow_button ow_ic_save"),$_smarty_tpl);?>
 <?php echo smarty_function_submit(array('name'=>"publish",'class'=>"ow_button ow_green ow_positive"),$_smarty_tpl);?>
</div>
		</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"save"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div class="ow_supernarrow ow_right">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>'blogs+this_post')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>'blogs+this_post'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <table class="ow_table_3 ow_small">
            <tr>
                <td class="ow_label"><?php echo smarty_function_text(array('key'=>"blogs+status"),$_smarty_tpl);?>
</td>
	            <td>
	                <?php if ($_smarty_tpl->tpl_vars['info']->value['dto']->getId()){?>
	                    <?php if ($_smarty_tpl->tpl_vars['info']->value['dto']->isDraft()){?>
	                        <?php echo smarty_function_text(array('key'=>"blogs+status_draft"),$_smarty_tpl);?>

	                    <?php }else{ ?>
	                        <?php echo smarty_function_text(array('key'=>"blogs+status_published"),$_smarty_tpl);?>

	                    <?php }?>
	                <?php }else{ ?>
	                    <?php echo smarty_function_text(array('key'=>"blogs+status_draft"),$_smarty_tpl);?>

	                <?php }?>
	            </td>
            </tr>
            <tr>
                <td class="ow_label"><?php echo smarty_function_text(array('key'=>"blogs+last_saved"),$_smarty_tpl);?>
</td>
                <td>
					<?php if ($_smarty_tpl->tpl_vars['info']->value['dto']->getId()){?>
						<?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['info']->value['dto']->getTimestamp()),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo smarty_function_text(array('key'=>"blogs+not_yet"),$_smarty_tpl);?>

					<?php }?>
                </td>
            </tr>
        </table>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_stdmargin",'langLabel'=>'blogs+this_post'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }else{ ?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMsg']->value;?>
</div>
<?php }?>
</div><?php }} ?>