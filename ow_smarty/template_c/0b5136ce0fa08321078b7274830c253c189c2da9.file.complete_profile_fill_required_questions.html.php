<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:49:32
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\complete_profile_fill_required_questions.html" */ ?>
<?php /*%%SmartyHeaderCode:29182548e5a4c007c54-97694579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5136ce0fa08321078b7274830c253c189c2da9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\complete_profile_fill_required_questions.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29182548e5a4c007c54-97694579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'alt' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5a4c062c55_20221838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5a4c062c55_20221838')) {function content_548e5a4c062c55_20221838($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_question_description_lang')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.question_description_lang.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'requiredQuestionsForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'requiredQuestionsForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_stdmargin">
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

                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?>
                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['question']['first']){?>
                        <tr class="ow_tr_delimiter"><td></td></tr>
                    <?php }?>
                <?php }?>

            <?php } ?>
        </table>
        <div class="clearfix ow_stdmargin">
           <div class="ow_right">
               <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

           </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'requiredQuestionsForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>