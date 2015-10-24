<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 19:40:58
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\questions\views\components\question_add.html" */ ?>
<?php /*%%SmartyHeaderCode:9326548fa9ca80d5f5-60273535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aa6386f5942af37b7b68fc4dc9bb0d965e2d42a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\questions\\views\\components\\question_add.html',
      1 => 1404901682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9326548fa9ca80d5f5-60273535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fa9ca841891_23807637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fa9ca841891_23807637')) {function content_548fa9ca841891_23807637($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><div class="questions-add clearfix" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"questions_add")); $_block_repeat=true; echo smarty_block_form(array('name'=>"questions_add"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="form_auto_click">
        <div class="questions-add-question">
            <?php echo smarty_function_input(array('name'=>"question",'class'=>"questions-input"),$_smarty_tpl);?>

        </div>
        <div class="ow_submit_auto_click" style="display: none;">

            <div class="questions-add-answers" style="display: none;">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small ')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small '), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="q-add-answers-field">
                        <div class="ow_smallmargin">
                            <div class="qaa-label-c">
                                <span class="qaa-label"><strong><?php echo smarty_function_text(array('key'=>"questions+question_add_answers_label"),$_smarty_tpl);?>
</strong></span>
                            </div>
                        </div>

                        <?php echo smarty_function_input(array('name'=>"answers"),$_smarty_tpl);?>

                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'qaa-tooltip ow_small '), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

            <div class="clearfix qa-submit-c ow_border">
                <div class="ow_left questions-add-answers-btn-c">
                    <a href="javascript://" class="questions-add-answers-btn"><?php echo smarty_function_text(array('key'=>"questions+question_add_show_options_btn"),$_smarty_tpl);?>
</a>
                    <div class="questions-add-answers-options" style="display: none;">
                        <?php echo smarty_function_input(array('name'=>"allowAddOprions"),$_smarty_tpl);?>
<?php echo smarty_function_label(array('name'=>"allowAddOprions"),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="ow_right q-save-c">
                    <span class="ow_attachment_btn"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</span>
                </div>
                
                <div class="ow_inprogress q-status-preloader Q_StatusPreloader"></div>
            </div>
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"questions_add"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>