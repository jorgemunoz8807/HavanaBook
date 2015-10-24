<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:32:39
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\questions_pages.html" */ ?>
<?php /*%%SmartyHeaderCode:20381548e6467687a96-35562183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aea454c758d7879bf8bcd7fb881dcd7283d48bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\questions_pages.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20381548e6467687a96-35562183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'accountTypesUrl' => 0,
    'questionsBySections' => 0,
    'section' => 0,
    'sectionList' => 0,
    'questions' => 0,
    'question' => 0,
    'previewValues' => 0,
    'questionValues' => 0,
    'value' => 0,
    'valueLabels' => 0,
    'deleteEditButtons' => 0,
    'pagesCheckboxContent' => 0,
    'questionList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e64677cb3d5_80296995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e64677cb3d5_80296995')) {function content_548e64677cb3d5_80296995($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


window.editLangValue = function editLangValue(_prefix, _key, _callback){

    if ( !window.question_langs_floatbox_display )
    {
        window.question_langs_floatbox_display = true;
        $.post( '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxEditLanguageValuesForm"),$_smarty_tpl);?>
?prefix='+_prefix+'&key='+_key, {}, function(json){
            if(document['ajaxLangValueEditForms'] == undefined)
                    {
                        document['ajaxLangValueEditForms'] = [];
                    }

            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+questions_edit_section_name_title"),$_smarty_tpl);?>
', $contents: json['markup'], width: 556});
                    document['ajaxLangValueEditForms'][_prefix+'-'+_key+'callback'] = _callback;

            document['ajaxLangValueEditForms'][_prefix+'-'+_key].bind("close", function() {
                window.question_langs_floatbox_display = false;
            });

            OW.addScriptFiles(json['include_js'], function(){ OW.addScript(json['js']); });

        }, 'json');
    }
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>




<div class="ow_admin_profile_questions_list_div">

    <table class="ow_table_2 ow_smallmargin ow_lables_table">
        <tr class="ow_tr_first">
            <th colspan="4" class="ow_tr_top_empty ow_txtleft">
                <?php echo smarty_function_text(array('key'=>"admin+questions_page_description"),$_smarty_tpl);?>

            </th>
            <th colspan="5" class="ow_tr_top">
                <div class="ow_tr_top_buttons">
                    <div class="ow_tr_top_button" onclick=' window.location.href="<?php echo $_smarty_tpl->tpl_vars['accountTypesUrl']->value;?>
"; '><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_account_types'),$_smarty_tpl);?>
</div></div>
                    <div class="ow_tr_top_button ow_tr_top_button_selected"><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_properties'),$_smarty_tpl);?>
</div></div>
                </div>
            </th>
        </tr>
        <tr class="ow_tr_last ow_tr_titles">
            <th class="question_label_th"   ><div class="question_label_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_question'),$_smarty_tpl);?>
</div></th>
            <th class="question_account_type_th"><div class="question_account_type_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_type'),$_smarty_tpl);?>
</div></th>
            <th class="question_values_th"><div class="question_values_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_values'),$_smarty_tpl);?>
</div></th>
            <th class="question_buttons_th" ><div class="question_buttons_div"></div></th>
            <th class="question_require_th ow_small ow_lightweigh" ><div class="question_require_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_require'),$_smarty_tpl);?>
</div></th>
            <th class="question_sign_up_th ow_small ow_lightweight"> <div class="question_sign_up_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_sign_up'),$_smarty_tpl);?>
</div></th>
            <th class="question_edit_th ow_small ow_lightweight" ><div class="question_edit_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_profile_edit'),$_smarty_tpl);?>
</div></th>
            <th class="question_view_th ow_small ow_lightweight" ><div class="question_view_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_view'),$_smarty_tpl);?>
</div></th>
            <th class="question_search_th ow_small ow_lightweight" ><div class="question_search_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_search'),$_smarty_tpl);?>
</div></th>
        </tr>
    </table>

    <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionsBySections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value){
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
    <table class="ow_table_2 ow_smallmargin ow_admin_profile_questions_list <?php if (!$_smarty_tpl->tpl_vars['section']->value){?>no_section<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
<?php }?> " sectionName=<?php if ($_smarty_tpl->tpl_vars['section']->value){?>"<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
"<?php }else{ ?>"no_section"<?php }?>>
        <tr class="question_section_tr ow_tr_first">
            <th class="section_value <?php if ($_smarty_tpl->tpl_vars['section']->value){?>ow_admin_profile_question_dnd_cursor<?php }?>" colspan="9">
               <div class="ow_section_label" ><?php if ($_smarty_tpl->tpl_vars['section']->value){?><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>"base+questions_no_section_label"),$_smarty_tpl);?>
<?php }?></div>

                   <div class="delete_edit_buttons quest_buttons ow_right">
                        <?php if ($_smarty_tpl->tpl_vars['section']->value){?>
                            <a href="javascript://" class="ow_lbutton edit_sectionNameLang" style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['sectionList']->value[$_smarty_tpl->tpl_vars['section']->value]->isDeletable){?>
                                <a href="javascript://" class="ow_lbutton ow_red section_delete_button"style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                            <?php }?>
                        <?php }?>
                    </div>

            </th>
        </tr>
       <?php if (isset($_smarty_tpl->tpl_vars['questions']->value)){?>
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
                  <?php $_smarty_tpl->_capture_stack[0][] = array("evenstyle", null, null); ob_start(); ?><?php echo smarty_function_cycle(array('name'=>"acc_".((string)$_smarty_tpl->tpl_vars['section']->value),'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                  <tr class="question_tr ow_admin_profile_question_dnd_cursor <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>" question_name="<?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
">
                    <td class="question_label_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_txtleft" >
                        <div class="question_label_div ow_overflow_hidden"  ><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
</div>
                    </td>

                    <td class="question_account_type_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_small" >
                        <div class="question_account_type_div ow_overflow_hidden" ><?php echo smarty_function_text(array('key'=>"base+questions_question_presentation_".((string)$_smarty_tpl->tpl_vars['question']->value['presentation'])."_label"),$_smarty_tpl);?>
</div>
                    </td>

                    <td class="question_values_td question_values_type_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_small">
                        <?php if (!empty($_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
                            <div class="question_values_div"><?php echo $_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</div>                            
                        <?php }else{ ?>
                            <?php if (isset($_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'])){?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])){?>
                                    <div class="question_values_div ow_overflow_hidden"><?php echo smarty_function_text(array('key'=>'admin+questions_matched_question_values','label'=>$_smarty_tpl->tpl_vars['question']->value['parentLabel'],'parentId'=>$_smarty_tpl->tpl_vars['question']->value['parentId'],'url'=>$_smarty_tpl->tpl_vars['question']->value['parentUrl']),$_smarty_tpl);?>
</div>
                                <?php }else{ ?>
                                <div class="question_values_div">
                                    <center><a class="question_values" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+questions_values_count",'count'=>$_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['count']),$_smarty_tpl);?>
</a></center>

                                    <div style="padding:0 0 0 15px;text-align:left;display:none;width:100px;overflow:hidden;" >
                                        <ul style="list-style-type:disc;">
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                                   <li><?php echo $_smarty_tpl->tpl_vars['valueLabels']->value[$_smarty_tpl->tpl_vars['question']->value['name']][$_smarty_tpl->tpl_vars['value']->value->value];?>
</li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php }?>
                            <?php }else{ ?>
                                <div class="question_values_div"></div>
                            <?php }?>
                        <?php }?>
                    </td>

                    <td class="question_buttons_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
 ow_nowrap quest_buttons">
                        
                            <?php if (!empty($_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
                                <div class="question_buttons_div ow_overflow_hidden">
                                    <?php echo $_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>

                                </div>
                            <?php }else{ ?>
                                <div class="question_buttons_div delete_edit_buttons ow_overflow_hidden">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
                                    <a href="javascript://" class="ow_lbutton question_edit_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['base']!=1&&$_smarty_tpl->tpl_vars['question']->value['removable']==1&&empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])){?>
                                        <a href="javascript://" class="ow_lbutton ow_red question_delete_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                                    <?php }?>
                                </div>
                            <?php }?>
                    </td>

                    <td class="question_require_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" >
                        <div class="question_require_div table_content_block" >
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['required'])){?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['required'];?>

                            <?php }else{ ?>
                                <div class="required ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_required']==1){?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['required']==1){?>ow_checkbox_cell_marked_lock<?php }else{ ?>ow_checkbox_cell_lock<?php }?>
                                     <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['required']==1){?>ow_checkbox_cell_marked<?php }else{ ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_sign_up_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" >
                        <div class="question_sign_up_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['join'])){?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['join'];?>

                            <?php }else{ ?>
                                <div class="on_join ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_join']==1){?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onJoin']==1){?>ow_checkbox_cell_marked_lock<?php }else{ ?>ow_checkbox_cell_lock<?php }?>
                                     <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onJoin']==1){?>ow_checkbox_cell_marked<?php }else{ ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>

                        </div>
                    </td>
                    <td class="question_edit_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" >
                        <div class="question_edit_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['edit'])){?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['edit'];?>

                            <?php }else{ ?>
                                    <div class="on_edit ow_checkbox
                                                 <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_edit']==1){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['onEdit']==1){?>ow_checkbox_cell_marked_lock<?php }else{ ?>ow_checkbox_cell_lock<?php }?>
                                                 <?php }else{ ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['onEdit']==1){?>ow_checkbox_cell_marked<?php }else{ ?>ow_checkbox_cell<?php }?>
                                                 <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_view_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" >
                        <div class="question_view_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['view'])){?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['view'];?>

                            <?php }else{ ?>
                                <div class="on_view ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_view']==1){?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onView']==1){?>ow_checkbox_cell_marked_lock<?php }else{ ?>ow_checkbox_cell_lock<?php }?>
                                     <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onView']==1){?>ow_checkbox_cell_marked<?php }else{ ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_search_td <?php echo Smarty::$_smarty_vars['capture']['evenstyle'];?>
" >
                        <div class="question_search_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['search'])){?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['search'];?>

                            <?php }else{ ?>
                                <div class="on_search ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_search']==1){?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onSearch']==1){?>ow_checkbox_cell_marked_lock<?php }else{ ?>ow_checkbox_cell_lock<?php }?>
                                     <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onSearch']==1){?>ow_checkbox_cell_marked<?php }else{ ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>

                        </div>
                    </td>
                 </tr>
           <?php } ?>
        <?php }?>

        <tr class="question_tr no_question" style="display:none;">
            <td colspan="9"></td>
        </tr>

        <tr class="ow_tr_delimiter"><td></td></tr>
    </table>
    <?php } ?>
</div>
<div class="clearfix ow_std_margin">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_question_button ow_positive",'langLabel'=>'admin+questions_add_question_button'),$_smarty_tpl);?>

        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_section_button ow_positive",'langLabel'=>'admin+questions_add_section_button'),$_smarty_tpl);?>

    </div>
</div>
<?php }} ?>