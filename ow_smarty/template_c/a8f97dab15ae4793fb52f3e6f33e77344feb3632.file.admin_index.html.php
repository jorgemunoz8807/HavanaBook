<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\snippets\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:32188548e679ede69b0-92787751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f97dab15ae4793fb52f3e6f33e77344feb3632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\snippets\\views\\controllers\\admin_index.html',
      1 => 1405678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32188548e679ede69b0-92787751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userSettings' => 0,
    'screensUrl' => 0,
    'pluginUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e679f006226_56602570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e679f006226_56602570')) {function content_548e679f006226_56602570($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


 .s-admin-screen
 {
    max-width: 95%;
    border-width: 1px;
    margin: 10px 0px;
 }
 
 .s-leave-review {
    font-size: 11px;
    margin-top: 30px;
    background-repeat: no-repeat;
    background-position: left center;
    padding-left: 20px;
 }

 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

 var shown = false;
 $("#snippets-show-manual").click(function() {
    $("#snippets-manual")[shown ? "hide" : "show"]();
    shown = !shown;
 });
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_smallmargin">
    <?php echo smarty_function_text(array('key'=>"snippets+admin_help_brief",'userSettings'=>$_smarty_tpl->tpl_vars['userSettings']->value),$_smarty_tpl);?>

</div>

<?php echo smarty_function_text(array('key'=>"snippets+config_steps_label"),$_smarty_tpl);?>


<div style="min-height: 143px;">
<div id="snippets-manual" style="display: none">
<ul class="ow_regular ow_stdmargin">
<li>
    <?php echo smarty_function_text(array('key'=>"snippets+config_step1",'userSettings'=>$_smarty_tpl->tpl_vars['userSettings']->value),$_smarty_tpl);?>

</li>

<li>
    <?php echo smarty_function_text(array('key'=>"snippets+config_step2"),$_smarty_tpl);?>

    <br />
    <img src="<?php echo $_smarty_tpl->tpl_vars['screensUrl']->value;?>
admin-config-page.png" class="s-admin-screen ow_border" />
</li>

<li>
    <?php echo smarty_function_text(array('key'=>"snippets+config_step3"),$_smarty_tpl);?>

    <br />
    <img src="<?php echo $_smarty_tpl->tpl_vars['screensUrl']->value;?>
admin-config-widget-settings.png"  class="s-admin-screen ow_border" />

</li>

<li>
    <?php echo smarty_function_text(array('key'=>"snippets+config_steps_end"),$_smarty_tpl);?>

</li>
</ul>
</div>
</div>

<div class="s-leave-review ow_ic_star">
    <?php echo smarty_function_text(array('key'=>"snippets+leave_review_suggest",'pluginUrl'=>$_smarty_tpl->tpl_vars['pluginUrl']->value),$_smarty_tpl);?>

</div>

<?php }} ?>