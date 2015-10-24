<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:20
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\profile_progressbar\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1205548e679c4cf504-05772749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9eebddc5b5d52907ae37be033359be3ddb99f95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\profile_progressbar\\views\\controllers\\admin_index.html',
      1 => 1390625812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205548e679c4cf504-05772749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e679c4fdb18_85227550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e679c4fdb18_85227550')) {function content_548e679c4fdb18_85227550($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>

<div class="ow_stdmargin">
    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'settingsForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'settingsForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tbody>
            <tr class="ow_alt1'">
                <td width="1" class="ow_label">
                    <?php echo smarty_function_label(array('name'=>'themeList'),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>'themeList'),$_smarty_tpl);?>

                    <?php echo smarty_function_error(array('name'=>'themeList'),$_smarty_tpl);?>

                </td>
            </tr>

            <tr class="ow_tr_last ow_center">
                <td colspan="2">
                    <?php echo smarty_function_submit(array('name'=>'save'),$_smarty_tpl);?>

                </td>
            </tr>
        </tbody>
    </table>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'profileprogressbar+preview')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'profileprogressbar+preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_stdmargin" style="margin: 0">
            <tr class="ow_alt1">
                <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>'profileprogressbar+progressbar_label'),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <div id="profile_progressbar" class="profile-progressbar clearfix">
                        <span class="profile-progressbar-caption">60%</span>
                        <div class="profile-progressbar-complete" style="width: 60%"></div>
                    </div>
                </td>
            </tr>
            <tr class="ow_alt1">
                <td colspan="2">
                    <div id="slider"></div>
                </td>
            </tr>
        </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'profileprogressbar+preview'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'settingsForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>