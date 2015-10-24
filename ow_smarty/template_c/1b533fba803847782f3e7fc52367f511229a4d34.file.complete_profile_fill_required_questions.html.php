<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 12:06:45
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\controllers\complete_profile_fill_required_questions.html" */ ?>
<?php /*%%SmartyHeaderCode:32477549090d5783209-13831955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b533fba803847782f3e7fc52367f511229a4d34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\controllers\\complete_profile_fill_required_questions.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32477549090d5783209-13831955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'question' => 0,
    'presentationToClass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_549090d57dede4_40379954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549090d57dede4_40379954')) {function content_549090d57dede4_40379954($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="owm_join_form owm_std_margin_top">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'requiredQuestionsForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'requiredQuestionsForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?>
                    <div class="owm_section owm_std_margin_bottom">
                        <span class="owm_section_label"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</span><div class="owm_section_border"></div>
                    </div>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['question']->value['presentation'],array('text','password'))){?>
                        <div class="owm_field_container owm_small_margin_bottom  <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])){?><?php echo $_smarty_tpl->tpl_vars['question']->value['trClass'];?>
<?php }?>">
                            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']])){?><?php echo $_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']];?>
<?php }else{ ?>owm_field_wrap<?php }?>"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                            <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }else{ ?>
                        <div class="owm_field_container owm_std_margin_bottom  <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])){?><?php echo $_smarty_tpl->tpl_vars['question']->value['trClass'];?>
<?php }?>">
                            <div class="owm_form_label owm_small_margin_bottom"><?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                            <div class="<?php if (!empty($_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']])){?><?php echo $_smarty_tpl->tpl_vars['presentationToClass']->value[$_smarty_tpl->tpl_vars['question']->value['presentation']];?>
<?php }else{ ?>owm_field_wrap<?php }?>">
                                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                            </div>
                            <div class="owm_error_txt"><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }?>
                <?php } ?>
        <?php } ?>
        <div class="owm_btn_wide owm_std_margin_top">
            <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'requiredQuestionsForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>