<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\profile_info.html" */ ?>
<?php /*%%SmartyHeaderCode:27692548e92ac498286-98865035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f61df05dc5f09cdc7dfc785a6ec8437e4ce9bd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\profile_info.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27692548e92ac498286-98865035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displaySections' => 0,
    'questionArray' => 0,
    'section' => 0,
    'questions' => 0,
    'question' => 0,
    'questionData' => 0,
    'questionLabelList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92ac4c50d5_28881960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92ac4c50d5_28881960')) {function content_548e92ac4c50d5_28881960($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="<?php if ($_smarty_tpl->tpl_vars['displaySections']->value){?>owm_profile_info_all<?php }else{ ?>owm_profile_info<?php }?> owm_std_margin_bottom">
    <table <?php if ($_smarty_tpl->tpl_vars['displaySections']->value){?>class="owm_tab_info"<?php }?>>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['displaySections']->value){?>
                    <tr>
                        <th colspan="2" class="ow_section">
                            <span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</span>
                        </th>
                    </tr>
                <?php }?>
                    
                <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
 $_smarty_tpl->tpl_vars['question']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['question']->key;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->index++;
 $_smarty_tpl->tpl_vars['question']->first = $_smarty_tpl->tpl_vars['question']->index === 0;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['first'] = $_smarty_tpl->tpl_vars['question']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
                        <tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['first']){?>class="own_tr_first"<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>class="owm_tr_last"<?php }?>>
                            <td class="owm_td_label owm_remark">
                                <?php if (empty($_smarty_tpl->tpl_vars['questionLabelList']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
                                    <?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
:
                                <?php }else{ ?>
                                    <?php echo $_smarty_tpl->tpl_vars['questionLabelList']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
:
                                <?php }?>
                            </td>
                            <td class="owm_td_value">
                                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])){?>ow_field_eye ow_remark profile_hidden_field<?php }?>">
                                    <?php echo $_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>

                                </span>
                            </td>
                        </tr>
                    <?php }?>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div><?php }} ?>