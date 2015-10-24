<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:26
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1343548e67a29908d4-49286727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9687f2335ffc955cc3fc9a21080331d85fabaf7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\controllers\\admin_index.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343548e67a29908d4-49286727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'templates' => 0,
    'categoriesSetup' => 0,
    'cat' => 0,
    'tpl' => 0,
    'setPrice' => 0,
    'uncategorized' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67a2a3f5f7_62959007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67a2a3f5f7_62959007')) {function content_548e67a2a3f5f7_62959007($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
    .ow_gift_wrapper {
        margin: 0 0 20px 23px;
        height: 135px;
    }
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="ow_gift_templates ow_superwide ow_automargin">
<?php if ($_smarty_tpl->tpl_vars['templates']->value){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_heart','langLabel'=>'virtualgifts+template_list','addClass'=>'ow_stdmargin clearfix')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_heart','langLabel'=>'virtualgifts+template_list','addClass'=>'ow_stdmargin clearfix'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_stdmargin">
    <?php if ($_smarty_tpl->tpl_vars['categoriesSetup']->value){?>
        <ul class="ow_regular">
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
            <li><b><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</b><br /><br />
            <div class="clearfix ow_smallmargin">
            <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['tpls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
            <div class="ow_gift_wrapper">
                <div class="ow_gift_holder">
                    <img class="gift_image" src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['imageUrl'];?>
" height="80" /><br /><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
" /><br />
                    <span class="ow_lbutton gift_edit_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</span>
                    <span class="ow_lbutton gift_delete_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+delete_btn_label'),$_smarty_tpl);?>
</span><br />
                    <?php if ($_smarty_tpl->tpl_vars['setPrice']->value){?><div class="ow_small"><b><?php echo $_smarty_tpl->tpl_vars['tpl']->value['price'];?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</div><?php }?>
                </div>
                <div class="ow_gift_helper" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"></div>
            </div>
            <?php } ?>
            </div>
            </li>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['uncategorized']->value){?>
            <li><b><?php echo smarty_function_text(array('key'=>'virtualgifts+uncategorized'),$_smarty_tpl);?>
</b><br /><br />
            <div class="clearfix ow_smallmargin">
            <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['uncategorized']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
            <div class="ow_gift_wrapper">
                <div class="ow_gift_holder">
                    <img class="gift_image" src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['imageUrl'];?>
" height="80" /><br /><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
" /><br />
                    <span class="ow_lbutton gift_edit_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</span>
                    <span class="ow_lbutton gift_delete_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+delete_btn_label'),$_smarty_tpl);?>
</span><br />
                    <?php if ($_smarty_tpl->tpl_vars['setPrice']->value){?><div class="ow_small"><b><?php echo $_smarty_tpl->tpl_vars['tpl']->value['price'];?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</div><?php }?>
                </div>
                <div class="ow_gift_helper" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"></div>
            </div>
            <?php } ?>
            </div>
            </li>
        <?php }?>
        </ul>
    <?php }else{ ?>
        <div class="clearfix">
	    <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
	    <div class="ow_gift_wrapper">
	        <div class="ow_gift_holder">
	            <img class="gift_image" src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['imageUrl'];?>
" height="80" /><br /><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
" /><br />
	            <span class="ow_lbutton gift_edit_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</span>
	            <span class="ow_lbutton gift_delete_btn" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><?php echo smarty_function_text(array('key'=>'admin+delete_btn_label'),$_smarty_tpl);?>
</span><br />
	            <?php if ($_smarty_tpl->tpl_vars['setPrice']->value){?><span class="ow_remark ow_small"><?php echo smarty_function_text(array('key'=>'usercredits+price'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['tpl']->value['price'];?>
</b></span><?php }?>
	        </div>
	        <div class="ow_gift_helper"></div>
	    </div>
	    <?php } ?>
	    </div>
    <?php }?>
    </div>
    <input type="checkbox" id="check_all_tpls" /><label for="check_all_tpls"><?php echo smarty_function_text(array('key'=>'base+check_all'),$_smarty_tpl);?>
</label> | <?php echo smarty_function_text(array('key'=>'base+with_selected'),$_smarty_tpl);?>

    <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+btn_label_edit','class'=>'ow_ic_edit','id'=>'btn_edit_common'),$_smarty_tpl);?>
 
    <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+delete_btn_label','class'=>'ow_mild_red ow_ic_delete','id'=>'btn_delete_common'),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_heart','langLabel'=>'virtualgifts+template_list','addClass'=>'ow_stdmargin clearfix'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>

<div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','langLabel'=>'virtualgifts+add_template','iconClass'=>'ow_ic_add','addClass'=>'ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'virtualgifts+add_template','iconClass'=>'ow_ic_add','addClass'=>'ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-template-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-template-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_3 ow_stdmargin">
        <tr class="ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'file'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'file'),$_smarty_tpl);?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['categoriesSetup']->value){?>
        <tr>
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'category'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'category'),$_smarty_tpl);?>
</td>
        </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['setPrice']->value){?>
        <tr class="ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'price'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'price','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</td>
        </tr>
        <?php }?>
    </table>
    <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_ic_add ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-template-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'virtualgifts+add_template','iconClass'=>'ow_ic_add','addClass'=>'ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>