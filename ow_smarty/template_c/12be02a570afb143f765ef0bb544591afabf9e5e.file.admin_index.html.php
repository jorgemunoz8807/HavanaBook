<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:21
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:11758548e679d776d10-92814148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12be02a570afb143f765ef0bb544591afabf9e5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\controllers\\admin_index.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11758548e679d776d10-92814148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'iniValue' => 0,
    'extendedSettings' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e679d7e8a75_25278530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e679d7e8a75_25278530')) {function content_548e679d7e8a75_25278530($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form ow_stdmargin">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_up_arrow"><?php echo smarty_function_text(array('key'=>'photo+upload_settings'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="ow_alt1 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'acceptedFilesize'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'acceptedFilesize','class'=>'ow_settings_input'),$_smarty_tpl);?>
 Mb <span class="ow_small"><?php echo smarty_function_text(array('key'=>'photo+upload_ini_value','value'=>$_smarty_tpl->tpl_vars['iniValue']->value),$_smarty_tpl);?>
</span> <?php echo smarty_function_error(array('name'=>'acceptedFilesize'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'photo+accepted_filesize_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td colspan="3"></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_lock"><?php echo smarty_function_text(array('key'=>'photo+quotas'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'albumQuota'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'albumQuota','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'albumQuota'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'photo+album_quota_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'userQuota'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'userQuota','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'userQuota'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'photo+user_quota_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'downloadAccept'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'downloadAccept','class'=>'ow_settings_input'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small">&nbsp;</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'storeFullsize'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'storeFullsize','class'=>'ow_settings_input'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small">&nbsp;</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extendedSettings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <tr class="ow_tr_delimiter"><td colspan="3"></td></tr>
            <tr class="ow_tr_first">
                <th class="ow_name ow_txtleft" colspan="3">
                    <span class="ow_section_icon <?php echo $_smarty_tpl->tpl_vars['section']->value['icon'];?>
"><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['section']->value['section_lang']),$_smarty_tpl);?>
</span>
                </th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['setting']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['setting']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value){
$_smarty_tpl->tpl_vars['setting']->_loop = true;
 $_smarty_tpl->tpl_vars['setting']->iteration++;
 $_smarty_tpl->tpl_vars['setting']->last = $_smarty_tpl->tpl_vars['setting']->iteration === $_smarty_tpl->tpl_vars['setting']->total;
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['setting']->last){?> ow_tr_last<?php }?>">
                    <td class="ow_label"><?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['setting']->key),$_smarty_tpl);?>
</td>
                    <td class="ow_value"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['setting']->key),$_smarty_tpl);?>
</td>
                    <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['setting']->key),$_smarty_tpl);?>
</td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>

        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>