<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:54
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\themes_choose_theme.html" */ ?>
<?php /*%%SmartyHeaderCode:28120548e531e85e4c2-58745282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffaea759ab5ef78b75296f6b027d1978908db364' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\themes_choose_theme.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28120548e531e85e4c2-58745282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultThemeImgDir' => 0,
    'themeInfo' => 0,
    'themes' => 0,
    'theme' => 0,
    'adminThemes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e531e8b5a50_25610561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e531e8b5a50_25610561')) {function content_548e531e8b5a50_25610561($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.theme_thumbs {
    float: left;
    width: 519px;
}

.theme_icon {
    background-repeat:no-repeat;
    display:block;
    cursor:pointer;
    background-position: 5px 5px;
    background-repeat: no-repeat;
    border: none;
    height: 103px;
    width: 164px;
    margin: 0;
}

.theme_title{
    font-weight:bold;
}

.theme_desc{
    padding:10px 0;
}

.theme_controls input[type="text"]{
    width:200px;
}

.theme_control_image{
    background-repeat:no-repeat;
    background-position:50% 50%;
    border:1px solid #ccc;
    height:40px;
    width:200px;
}

.theme_item {
    float:left;
    padding-bottom: 7px;
    padding-right: 9px;
    text-align: center;    
    position: relative;
}

.theme_item a {
    display: block;
    outline: 0 none;
}

.theme_icon span.name {
    display: none;
}

.theme_item span.fake{
    background: url(<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png) no-repeat scroll 0 0 transparent;
    display: block;
    height: 103px;
}

.theme_item .theme_icon span.clicked,
.theme_item .theme_icon.clicked span.clicked {
    background: url(<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png) no-repeat scroll 0 -112px transparent;
}

.theme_item .theme_icon.clicked span {
    background: url(<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png) no-repeat scroll 0 -224px transparent;
}

html body .selected_theme_info{
    float:right;
    width:312px;
}

html body .selected_theme_info_stick{
    width:312px;
}

.themes_preview {
    overflow: hidden;
    padding: 6px 6px 0;
    position: relative;
    width: 302px;
    background: url(<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_preview.png) no-repeat scroll 0 0 transparent;
}
.theme_wrap a {
    display: block;
    height: 179px;
    width: auto;
    cursor: pointer;
    background-position: 0px 0px;
}
.theme_text_wrap {
    padding: 13px 0 0;
}
.theme_text_wrap .theme_desc {
    font-size: 11px;
    padding: 3px 0;
}
.theme_info .ow_table_3 td {
    text-align: left;
}
.theme_info .ow_table_3 {
    margin-bottom: 5px;
}
.theme_info .ow_table_3 td.ow_label {
    padding-left: 0;
    width: 18%;
}
.theme_item.theme_update span.fake {
    background: url("<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png") no-repeat scroll 0 -336px transparent
}
.theme_item.theme_clicked span.fake {
    background: url("<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png") no-repeat scroll 0 -224px transparent
}
.theme_item.active span.clicked {
    background: url("<?php echo $_smarty_tpl->tpl_vars['defaultThemeImgDir']->value;?>
theme_frame_small.png") no-repeat scroll 0 -112px transparent
}
.theme_update_label {
    position: absolute;
    right: 14px;
    top: 5px;
    background: #ff9927;
    border-left: 4px solid #ff9927;
    border-bottom: 4px solid #ff9927;
}
.theme_item.theme_clicked .theme_update_label,
.theme_item.active .theme_update_label {
    background: none repeat scroll 0 0 #A8D700;
    border-color: #A8D700;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="clearfix">

<div class="selected_theme_info">
<div class="selected_theme_info_stick">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="themes_preview">
    <div class="theme_wrap"><a onclick="new OW_FloatBox({$contents:$('.selected_theme_info .theme_preview'), $title:'Preview', width:'720px'})" class="theme_icon" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['previewUrl'];?>
);"></a></div>
    <div class="theme_text_wrap">
        <div class="theme_title"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['title'];?>
</div>
        <div class="theme_desc"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['description'];?>
</div>
    </div>
</div>
    <div class="theme_info">
			<table class="ow_table_3">
			<tr class="ow_tr_first">
				<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_label'),$_smarty_tpl);?>
:</td>
				<td class="ow_value"><span class="author"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['author'];?>
</span></td>
			</tr>
			<tr>
				<td class="ow_label ow_tr_last"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_url_label'),$_smarty_tpl);?>
:</td>
				<td class="ow_value"><span class="author_url"><a href="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
</a></span></td>
			</tr>
			</table>
        <div class="clearfix"><div class="ow_right theme_control_button ow_btn_delimiter"><span class="dlt_btn"<?php if (empty($_smarty_tpl->tpl_vars['themeInfo']->value['delete_url'])){?> style="display:none;"<?php }?>><?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_delete_btn ow_ic_delete','langLabel'=>'admin+themes_choose_delete_button_label'),$_smarty_tpl);?>
</span> <?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_submit ow_positive','langLabel'=>'admin+themes_choose_activate_button_label'),$_smarty_tpl);?>
</div></div>
            <div style="display: none;"><div class="theme_preview" style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['previewUrl'];?>
" /></div></div>
		</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</div>

<div class="theme_thumbs">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="themes_select clearfix">
<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
<div class="theme_item<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']){?> active<?php }?><?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url']){?> theme_update<?php }?>">
	<a class="theme_icon <?php echo $_smarty_tpl->tpl_vars['theme']->value['key'];?>
" href="javascript://" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['theme']->value['iconUrl'];?>
);">
		<span class="fake<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']){?> clicked<?php }?>"></span>
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['theme']->value['title'];?>
</span>
	</a>
    <?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url']){?><div class="theme_update_label"><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a></div><?php }?>
</div>
<?php } ?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="themes_select admin_themes_select clearfix">
<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminThemes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>

<div class="theme_item<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']){?> active<?php }?><?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url']){?> theme_update<?php }?>">
    <a class="theme_icon <?php echo $_smarty_tpl->tpl_vars['theme']->value['key'];?>
" href="javascript://" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['theme']->value['iconUrl'];?>
);">
		<span class="fake clicked"></span>
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['theme']->value['title'];?>
</span>
	</a>
    <?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url']){?><div class="theme_update_label"><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a></div><?php }?>
</div>

<?php } ?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
    <div style="display: none;">
        <div class="delete_confirm_node clearfix">    
            <div class="message ow_stdmargin"></div>
            <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_delete ow_positive','langLabel'=>'base+yes'),$_smarty_tpl);?>
</div>
        </div>
    </div>
</div>
<?php }} ?>