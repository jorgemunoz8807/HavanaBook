<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:02:32
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\components\add_question.html" */ ?>
<?php /*%%SmartyHeaderCode:1200548e79787f9148-98170002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19805601b23c8c96a8621f3e7642049d9baa3aca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\components\\add_question.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200548e79787f9148-98170002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formData' => 0,
    'formEl' => 0,
    'displayedFormElements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e797883d8a4_37498091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e797883d8a4_37498091')) {function content_548e797883d8a4_37498091($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    span.tag {
        background: url("images/tag_bg.png") repeat-x scroll 0 0 #F8F8F8;
        border: 1px solid #DCDCDC;
        border-radius: 2px 2px 2px 2px;
        float: left;
        line-height: 22px;
        margin-bottom: 3px;
        margin-right: 4px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'qst_add_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_add_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form ow_admin_add_profile_question">
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['formEl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['formData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['field']->iteration=0;
 $_smarty_tpl->tpl_vars['field']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['formEl']->value = $_smarty_tpl->tpl_vars['field']->key;
 $_smarty_tpl->tpl_vars['field']->iteration++;
 $_smarty_tpl->tpl_vars['field']->index++;
 $_smarty_tpl->tpl_vars['field']->first = $_smarty_tpl->tpl_vars['field']->index === 0;
 $_smarty_tpl->tpl_vars['field']->last = $_smarty_tpl->tpl_vars['field']->iteration === $_smarty_tpl->tpl_vars['field']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['first'] = $_smarty_tpl->tpl_vars['field']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['last'] = $_smarty_tpl->tpl_vars['field']->last;
?>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['f']['first']){?>ow_tr_first<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['f']['last']){?>ow_tr_last<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['displayedFormElements']->value[$_smarty_tpl->tpl_vars['formEl']->value])){?>ow_hidden<?php }?>">
                        <td class="ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                        </td>
                        <td class="ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                            <br/>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                        </td>
                        <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>
</td>
                    </tr>
		<?php } ?>
	</table>
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
             <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>

        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_add_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>