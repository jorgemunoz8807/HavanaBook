<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:18
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\plugins_available.html" */ ?>
<?php /*%%SmartyHeaderCode:13874548e52facde306-82131031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561ccc322999d8f357a89ad09b98a8d19c09ed6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\plugins_available.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13874548e52facde306-82131031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'plugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e52fad1ceb6_46959480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e52fad1ceb6_46959480')) {function content_548e52fad1ceb6_46959480($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_active_plugins tr, .ow_inactive_plugins tr{
    border-top:1px solid #ccc;
}
.ow_plugin_controls{
    display:none;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_available_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_available_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (empty($_smarty_tpl->tpl_vars['plugins']->value)){?>
    <?php echo smarty_function_text(array('key'=>'admin+plugins_manage_no_available_items'),$_smarty_tpl);?>

<?php }else{ ?>
   <table class="ow_superwide ow_inactive_plugins" style="margin:0 auto;">
      <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
      <tr class="ow_high2" onmouseover="$('span.ow_plugin_controls', $(this)).css({display:'block'});" onmouseout="$('span.ow_plugin_controls', $(this)).css({display:'none'});">
         <td style="padding: 10px 15px;">
            <b><?php echo $_smarty_tpl->tpl_vars['plugin']->value['title'];?>
</b>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</div>
         </td>
         <td class="ow_small" style="text-align:right;width:180px;vertical-align:middle;">
             <span class="ow_plugin_controls">
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['inst_url']){?><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['inst_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_install_button_label'),$_smarty_tpl);?>
</a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['del_url']){?><a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['del_url'];?>
" onclick="return confirm('<?php echo smarty_function_text(array('key'=>'admin+manage_plugins_delete_confirm_message','pluginName'=>$_smarty_tpl->tpl_vars['plugin']->value['title']),$_smarty_tpl);?>
');"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_delete_button_label'),$_smarty_tpl);?>
</a><?php }?>
             </span>
         </td>
      </tr>
      <?php } ?>
   </table>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_available_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>