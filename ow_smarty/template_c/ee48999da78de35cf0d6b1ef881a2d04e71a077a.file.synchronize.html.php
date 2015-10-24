<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:31:23
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\profile_progressbar\views\components\synchronize.html" */ ?>
<?php /*%%SmartyHeaderCode:21362548e641b77b326-83004081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee48999da78de35cf0d6b1ef881a2d04e71a077a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\profile_progressbar\\views\\components\\synchronize.html',
      1 => 1390625796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21362548e641b77b326-83004081',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e641b796965_70600086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e641b796965_70600086')) {function content_548e641b796965_70600086($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>

<table class="ow_table_1 ow_form ow_stdmargin" style="margin: 0">
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'profileprogressbar+progressbar_label'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <div id="profile-progressbar" class="profile-progressbar">
                <span class="profile-progressbar-caption"></span>
                <div class="profile-progressbar-complete"></div>
            </div>
        </td>
    </tr>
</table>
<?php }} ?>