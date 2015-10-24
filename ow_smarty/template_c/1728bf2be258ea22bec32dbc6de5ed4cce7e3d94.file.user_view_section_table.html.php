<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\user_view_section_table.html" */ ?>
<?php /*%%SmartyHeaderCode:30422548e56be32cdb8-13138166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1728bf2be258ea22bec32dbc6de5ed4cce7e3d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\user_view_section_table.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30422548e56be32cdb8-13138166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sectionName' => 0,
    'display' => 0,
    'questions' => 0,
    'question' => 0,
    'questionsData' => 0,
    'labels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be34e787_63866837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be34e787_63866837')) {function content_548e56be34e787_63866837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><table class="ow_table_3 ow_nomargin section_<?php echo $_smarty_tpl->tpl_vars['sectionName']->value;?>
 data_table" <?php if (empty($_smarty_tpl->tpl_vars['display']->value)){?>style="display:none;"<?php }?>>
    <tr class="ow_tr_first">
        <tr class="ow_tr_first">
            <th colspan="2" class="ow_section"><span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['sectionName']->value)."_label"),$_smarty_tpl);?>
</span></th>
        </tr>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['question']->key;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>">
                <td class="ow_label" style="width: 20%"><?php if (empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
<?php }?></td>
                <td class="ow_value"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])){?>ow_field_eye ow_remark profile_hidden_field<?php }?>"><?php echo $_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</span></td>
            </tr>
        <?php }?>
    <?php } ?>
</table>


<?php }} ?>