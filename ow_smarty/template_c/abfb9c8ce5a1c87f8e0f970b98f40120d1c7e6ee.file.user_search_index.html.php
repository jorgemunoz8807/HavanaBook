<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:16:16
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\user_search_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1347548e8ac03ff483-41986166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abfb9c8ce5a1c87f8e0f970b98f40120d1c7e6ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\user_search_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347548e8ac03ff483-41986166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'authMessage' => 0,
    'displayAccountType' => 0,
    'alt' => 0,
    'questionList' => 0,
    'section' => 0,
    'questions' => 0,
    'question' => 0,
    'displayNameQuestion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8ac04687c1_06246791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8ac04687c1_06246791')) {function content_548e8ac04687c1_06246791($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?>

    <style>
        input.display_name_input {
            width:65%;
        }
    </style>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
      $(function(){
            $("form[name='MainSearchForm'] select[name='accountType']").change(
               function(){ this.form.submit(); }
            );
       });
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['authMessage']->value)){?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMessage']->value;?>
</div>
<?php }else{ ?>
<div class="clearfix">
    <div class="ow_left ow_wide">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'MainSearchForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'MainSearchForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <table class="ow_table_1 ow_form">
                            <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value==true){?>
                            <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                            <tr class=" ow_tr_first ow_tr_last">
                                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                                </td>
                                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value ow_center">
                                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                                    <div style="height:1px;"></div>
                                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                                </td>
                            </tr>
                            <tr class="ow_tr_delimiter"><td></td></tr>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value)){?>
                                <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)){?>
                                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr>
                                <?php }?>
                                    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
                                        <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

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
                                        </tr>
                                    <?php } ?>
                                    <tr class="ow_tr_delimiter"><td></td></tr>
                                <?php } ?>
                           <?php }?>
                        </table>
                       <div class="clearfix">
                  		<div class="ow_right">
							<?php echo smarty_function_submit(array('name'=>'MainSearchFormSubmit'),$_smarty_tpl);?>

                        </div>
                       </div> 
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'MainSearchForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="ow_right ow_narrow">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'DisplayNameSearchForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'DisplayNameSearchForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="clearfix ow_smallmargin">
                    <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['displayNameQuestion']->value['name']),$_smarty_tpl);?>

                    <?php echo smarty_function_input(array('class'=>"display_name_input",'name'=>$_smarty_tpl->tpl_vars['displayNameQuestion']->value['name']),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_submit(array('class'=>"ow_txtcenter",'name'=>'DisplayNameSearchFormSubmit'),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'DisplayNameSearchForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php }?>
<?php }} ?>