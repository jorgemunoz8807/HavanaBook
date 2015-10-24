<?php /* Smarty version Smarty-3.1.12, created on 2014-12-19 08:18:07
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\media_panel_from_url.html" */ ?>
<?php /*%%SmartyHeaderCode:450054944fbfe7e359-27426900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a18998aeaa496c96cf4ae50a41c04bb7290da4d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\media_panel_from_url.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450054944fbfe7e359-27426900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'elid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54944fc005af12_77143175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54944fc005af12_77143175')) {function content_54944fc005af12_77143175($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


window.tf_insert_from_url = function(){
    window.parent.document.getElementById('<?php echo $_smarty_tpl->tpl_vars['elid']->value;?>
').jhtmlareaObject.insertImage({src:$('#mp-img-url').val()});
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<table class="ow_table_1 ow_form ow_automargin">
    <tr class="ow_alt1 ow_tr_first ow_tr_last">
        <td class="ow_label">
            <?php echo smarty_function_text(array('key'=>'base+tf_img_url'),$_smarty_tpl);?>

        </td>
        <td class="ow_value">
            <input id="mp-img-url" type="text" value="http://" />
        </td>
    </tr>

</table>

            <div class="clearfix"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+tf_insert','extraString'=>'onclick="tf_insert_from_url();"'),$_smarty_tpl);?>
</div></div>

<?php }} ?>