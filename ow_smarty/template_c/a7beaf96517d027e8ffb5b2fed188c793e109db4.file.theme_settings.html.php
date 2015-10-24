<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:19:28
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\theme_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:20000548e7d700a6b18-94236335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7beaf96517d027e8ffb5b2fed188c793e109db4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\theme_settings.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20000548e7d700a6b18-94236335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'themeInfo' => 0,
    'noControls' => 0,
    'inputArray' => 0,
    'section' => 0,
    'inputs' => 0,
    'input' => 0,
    'resetUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e7d70123a35_99519172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e7d70123a35_99519172')) {function content_548e7d70123a35_99519172($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.theme_icon{
	background-repeat:no-repeat;
	background-position:50% 50%;
	height:180px;
	width:180px;
}

.theme_title{
	font-weight:bold;
}

.theme_desc{
	padding:10px 0;
}

.theme_controls input[type="text"]{
	width:232px;
	padding:4px;
}

.theme_control_image{
	background-repeat:no-repeat;
	background-position:0% 0%;
	border:1px solid #ccc;
	height:40px;
	width:170px;
    float:left;
    cursor:pointer;
}

.theme_controls select{
	width:240px;
}

body table.theme_controls td.ow_label{
	width:35%;
}

body table.theme_controls td.ow_input{
	width:30%;
}

body table.theme_controls td.ow_desc{
	text-align:left;
	width:35%;
}

.color_input input[type="text"]{
	width:170px;
}

.theme_controls .color_button{
	width:30px;
	height:27px;
	padding:0;
	box-shadow: 0px 0px 2px rgba(0,0,0,0.5);
}

.preview_graphics{
    background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #ccc;
    width:500px;
    height:350px;
    margin:0 auto;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<div class="clearfix">
	<div style="float:left;width:23%;"><div class="theme_icon" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['iconUrl'];?>
);"></div></div>
	<div style="float:right;width:74%;padding:5px;">
		<div class="theme_title"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['title'])){?><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['title'];?>
<?php }else{ ?>-<?php }?></div>
		<div class="theme_desc"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['description'])){?><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['description'];?>
<?php }else{ ?>-<?php }?></div>
		<div class="theme_info">
			<table class="ow_table_3" style="width:100px">
				<tr class="ow_tr_first">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_version_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['version'])){?><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['version'];?>
<?php }else{ ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_compatibility_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'])){?><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'];?>
<?php }else{ ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['author'])){?><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['author'];?>
<?php }else{ ?>-<?php }?></td>
				</tr>
				<tr class="ow_tr_last">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_url_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
</a><?php }else{ ?>-<?php }?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_superwide ow_automargin">
<?php if (isset($_smarty_tpl->tpl_vars['noControls']->value)&&$_smarty_tpl->tpl_vars['noControls']->value){?>
<div class="no_content"><?php echo smarty_function_text(array('key'=>'admin+theme_settings_no_controls_label'),$_smarty_tpl);?>
</div>
<?php }else{ ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'theme-edit')); $_block_repeat=true; echo smarty_block_form(array('name'=>'theme-edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_form ow_table_1 theme_controls">
<?php  $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inputs']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inputArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inputs']->key => $_smarty_tpl->tpl_vars['inputs']->value){
$_smarty_tpl->tpl_vars['inputs']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['inputs']->key;
?>
   <tr class="ow_tr_first">
	   <th colspan="10" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</th>
   </tr>
   <?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inputs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['input']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['input']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value){
$_smarty_tpl->tpl_vars['input']->_loop = true;
 $_smarty_tpl->tpl_vars['input']->iteration++;
 $_smarty_tpl->tpl_vars['input']->last = $_smarty_tpl->tpl_vars['input']->iteration === $_smarty_tpl->tpl_vars['input']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['input']->last;
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2','name'=>$_smarty_tpl->tpl_vars['section']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>ow_tr_last<?php }?>">
      <td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['input']->value['title'];?>
</td>
      <td class="ow_value"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['input']->value['name']),$_smarty_tpl);?>
</td>
      <td class="ow_desc"><?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
<?php }?></td>
      
   </tr>
   <?php } ?>
   <tr class="ow_tr_delimiter"><td></td></tr>
<?php } ?>
       <?php $_smarty_tpl->_capture_stack[0][] = array('resetLabel', null, null); ob_start(); ?><?php echo smarty_function_text(array('key'=>'admin+theme_settings_reset_confirm_message'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</table>
    <div class="clearfix ow_stdmargin ow_btn_delimiter">
        <div class="ow_right">
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>'ow_red ow_ic_delete','langLabel'=>'admin+themes_settings_reset_label','onclick'=>"if(confirm('".((string)Smarty::$_smarty_vars['capture']['resetLabel'])."')) window.location = '".((string)$_smarty_tpl->tpl_vars['resetUrl']->value)."';"),$_smarty_tpl);?>
    
			<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive ow_btn_delimiter'),$_smarty_tpl);?>
     
        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'theme-edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>