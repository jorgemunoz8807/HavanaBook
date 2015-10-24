<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:49:01
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\snippets\views\components\settings.html" */ ?>
<?php /*%%SmartyHeaderCode:7751548e683d4b14d5-73395754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b6759f427c118ff6e7592498cf3c7e94efa137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\snippets\\views\\components\\settings.html',
      1 => 1405592336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7751548e683d4b14d5-73395754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'snippets' => 0,
    'snippet' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e683d5893f3_84192334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e683d5893f3_84192334')) {function content_548e683d5893f3_84192334($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="s-snippets-settings-wrap" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    
    <div class="s-ss-section s-ss-hidden" >
        <div class="s-ss-title ow_remark">
            <?php echo smarty_function_text(array('key'=>"snippets+hidden_section_label"),$_smarty_tpl);?>

        </div>
        <div class="s-ss-section-content clearfix ow_border <?php if (empty($_smarty_tpl->tpl_vars['snippets']->value['hidden'])){?>s-ss-section-empty<?php }?>" data-section="hidden">
            <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value['hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value){
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                <div class="s-ss-snippet" data-name="<?php echo $_smarty_tpl->tpl_vars['snippet']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>
</div>
            <?php } ?>
            <div class="s-ss-section-empty-msg ow_remark"><?php echo smarty_function_text(array('key'=>"snippets+empty_hidden_section"),$_smarty_tpl);?>
</div>
        </div>
    </div>
    
    <div class="s-ss-section s-ss-active">
        <div class="s-ss-title ow_remark">
            <?php echo smarty_function_text(array('key'=>"snippets+active_section_label"),$_smarty_tpl);?>

        </div>
        <div class="s-ss-section-content clearfix ow_border <?php if (empty($_smarty_tpl->tpl_vars['snippets']->value['active'])){?>s-ss-section-empty<?php }?>" data-section="active">
            <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value['active']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value){
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                <div class="s-ss-snippet" data-name="<?php echo $_smarty_tpl->tpl_vars['snippet']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>
</div>
            <?php } ?>
            <div class="s-ss-section-empty-msg ow_remark"><?php echo smarty_function_text(array('key'=>"snippets+empty_active_section"),$_smarty_tpl);?>
</div>
        </div>
    </div>
    
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" data-outlet="field" />
</div>

<?php }} ?>