<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\profile_progressbar\views\controllers\admin_features.html" */ ?>
<?php /*%%SmartyHeaderCode:8713548e67be745b01-49665757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094f93664c4ad44d7c9caa43ea805d6ed61c380d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\profile_progressbar\\views\\controllers\\admin_features.html',
      1 => 1390625804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8713548e67be745b01-49665757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'availableFeatures' => 0,
    'feature' => 0,
    'features' => 0,
    'perDay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67be798e03_47427586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67be798e03_47427586')) {function content_548e67be798e03_47427586($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<form action="" method="POST">
    <table class="ow_table_2">
        <tr>
            <th>Features (Key)</th>
            <th>Count</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availableFeatures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
                <td class="ow_label"><?php echo smarty_function_text(array('key'=>"profileprogressbar+".((string)$_smarty_tpl->tpl_vars['feature']->value)."_desc"),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
)</td>
                <td class="ow_value">
                    <input type="text" class="profile-progressbar-spinner" name="features[<?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
]" value="<?php if (!empty($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['feature']->value])){?><?php echo $_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['feature']->value];?>
<?php }else{ ?>0<?php }?>" style="width: 26px;" />
                </td>
            </tr>
        <?php } ?>
        
        <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label">Interval</td>
            <td class="ow_value">
                <input type="text" id="progressbar-interval" name="interval" value="<?php echo $_smarty_tpl->tpl_vars['perDay']->value;?>
" style="width: 26px;" /> day
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
                <span class="ow_button">
                    <span class=" ow_ic_left_arrow">
                        <input type="submit" class="ow_ic_ok" id="staffSave" value="Save">
                    </span>
                </span>
            </td>
        </tr>
    </table>
</form>
<?php }} ?>