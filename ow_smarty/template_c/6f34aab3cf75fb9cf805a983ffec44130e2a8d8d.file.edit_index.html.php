<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:31:23
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\edit_index.html" */ ?>
<?php /*%%SmartyHeaderCode:25664548e641b831136-29634706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f34aab3cf75fb9cf805a983ffec44130e2a8d8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\edit_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25664548e641b831136-29634706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unregisterProfileUrl' => 0,
    'changePassword' => 0,
    'editSynchronizeHook' => 0,
    'item' => 0,
    'displayAccountType' => 0,
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'alt' => 0,
    'question' => 0,
    'isAdmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e641b88ec13_84496166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e641b88ec13_84496166')) {function content_548e641b88ec13_84496166($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_question_description_lang')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.question_description_lang.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<script language="javascript" type="text/javascript">
    $(function(){
        $(".unregister_profile_button").click(
            function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['unregisterProfileUrl']->value;?>
" }
        );
   });
</script>


<?php if (!empty($_smarty_tpl->tpl_vars['changePassword']->value)){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo $_smarty_tpl->tpl_vars['changePassword']->value;?>
</div></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (isset($_smarty_tpl->tpl_vars['editSynchronizeHook']->value)){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editSynchronizeHook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

       <?php } ?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>"base+join_or"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'editForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'editForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form ow_stdmargin">
        <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value){?>
            <tr class="ow_alt1 ow_tr_first">
                <td class="ow_label">
                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                    <div style="height:1px;"></div>
                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_desc ow_small">

                </td>
            </tr>
        <?php }?>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['questions']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['questions']->iteration=0;
 $_smarty_tpl->tpl_vars['questions']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
 $_smarty_tpl->tpl_vars['questions']->iteration++;
 $_smarty_tpl->tpl_vars['questions']->index++;
 $_smarty_tpl->tpl_vars['questions']->first = $_smarty_tpl->tpl_vars['questions']->index === 0;
 $_smarty_tpl->tpl_vars['questions']->last = $_smarty_tpl->tpl_vars['questions']->iteration === $_smarty_tpl->tpl_vars['questions']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['first'] = $_smarty_tpl->tpl_vars['questions']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['questions']->last;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?>
                <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
 $_smarty_tpl->tpl_vars['question']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->index++;
 $_smarty_tpl->tpl_vars['question']->first = $_smarty_tpl->tpl_vars['question']->index === 0;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['first'] = $_smarty_tpl->tpl_vars['question']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
                <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>$_smarty_tpl->tpl_vars['section']->value,'values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                <tr class=" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>">
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                        <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                        <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        <div style="height:1px;"></div>
                        <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc ow_small">
                        <?php echo smarty_function_question_description_lang(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                </tr>
            <?php } ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['question']['first']){?>
            <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
            <?php }?>
        <?php } ?>
    </table>
	<div class="clearfix ow_stdmargin<?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value){?> ow_btn_delimiter<?php }?>">
	   <div class="ow_right">
		   <?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value){?>
				<?php echo smarty_function_decorator(array('name'=>"button",'class'=>"unregister_profile_button ow_ic_delete ow_red ow_negative",'langLabel'=>'base+delete_profile'),$_smarty_tpl);?>

		   <?php }?>
		   <?php echo smarty_function_submit(array('name'=>'editSubmit'),$_smarty_tpl);?>

	   </div>
	</div>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'editForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>