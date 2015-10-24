<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:26:51
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\component_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:22184548e54fb94f332-03950110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8196b57b030bf8a15e3bc68fa005944d6c61d9a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\component_settings.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22184548e54fb94f332-03950110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'name' => 0,
    'hidden' => 0,
    'item' => 0,
    'value' => 0,
    'label' => 0,
    'values' => 0,
    'avaliableIcons' => 0,
    'icon' => 0,
    'roleList' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e54fba2e961_22949384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e54fba2e961_22949384')) {function content_548e54fba2e961_22949384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value){?>
<table class="ow_table_1 ow_small ow_form ow_smallmargin">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['item']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['hidden']->value)){?>
		    <tr class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['display']=='table'){?><?php echo smarty_function_cycle(array('name'=>"custom",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']){?>ow_tr_first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>ow_tr_last<?php }?>">
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['label'])){?>
                            <td class="ow_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td class="ow_value">
                        <?php }else{ ?>
                            <td colspan="2">
                        <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value['presentation']=='custom'){?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['markup'];?>

		            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['presentation']=='number'){?>
		                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
		            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['presentation']=='text'){?>
		                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
		            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['presentation']=='textarea'){?>
		                <textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</textarea>
		            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['presentation']=='checkbox'){?>
		                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']){?> checked="checked"<?php }?> />
		            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['presentation']=='select'){?>
		                <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
		                    <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['optionList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['item']->value['value']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
		                    <?php } ?>
		                </select>
		            <?php }?>
		            <div id="error_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="setting_error ow_error error"></div>
		        </td>
		    </tr>
        <?php }?>
    <?php } ?>
</table>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <table class="ow_table_1 ow_small ow_form ow_smallmargin">
        <?php if (!in_array('title',$_smarty_tpl->tpl_vars['hidden']->value)){?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first <?php if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value)&&in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value)&&in_array('show_title',$_smarty_tpl->tpl_vars['hidden']->value)){?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_title"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="text" name="title" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['title'])){?>value="<?php echo $_smarty_tpl->tpl_vars['values']->value['title'];?>
" beforevalue="<?php echo $_smarty_tpl->tpl_vars['values']->value['title'];?>
"<?php }?> />
	                <div id="error_title" class="setting_error ow_error error"></div>
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('show_title',$_smarty_tpl->tpl_vars['hidden']->value)){?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
<?php if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value)&&in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value)){?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_show_title"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="show_title" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['show_title'])&&$_smarty_tpl->tpl_vars['values']->value['show_title']){?>checked="checked"<?php }?> />
                        <?php if (!in_array("icon",$_smarty_tpl->tpl_vars['hidden']->value)){?>
                            <?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_icon"),$_smarty_tpl);?>
:
                            <select class="choose_icon" name="icon" >
                                <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avaliableIcons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value['class'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['icon'])&&$_smarty_tpl->tpl_vars['values']->value['icon']==$_smarty_tpl->tpl_vars['icon']->value['class']){?>selected="selected"<?php }?> >
                                        <?php echo $_smarty_tpl->tpl_vars['icon']->value['label'];?>

                                    </option>
                                <?php } ?>
                            </select>
                        <?php }?>
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value)){?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 <?php if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value)&&in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)){?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_wib"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="wrap_in_box" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['wrap_in_box'])&&$_smarty_tpl->tpl_vars['values']->value['wrap_in_box']){?>checked="checked"<?php }?> />
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value)){?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 <?php if (in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)){?>ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_freeze"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="freeze" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['freeze'])&&$_smarty_tpl->tpl_vars['values']->value['freeze']){?>checked="checked"<?php }?> />
	            </td>
	        </tr>
        <?php }?>

        <?php if (!in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)){?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" id="ws_restrict_view">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_restrict_view"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="restrict_view" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['restrict_view'])&&$_smarty_tpl->tpl_vars['values']->value['restrict_view']){?>checked="checked"<?php }?> onclick="$('#ws_access_restrictions')[this.checked ? 'show' : 'hide'](); $('#ws_restrict_view')[this.checked ? 'removeClass' : 'addClass']('ow_tr_last');" />
	            </td>
	        </tr>
                <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" id="ws_access_restrictions" <?php if (!isset($_smarty_tpl->tpl_vars['values']->value['restrict_view'])||!$_smarty_tpl->tpl_vars['values']->value['restrict_view']){?>style="display: none;"<?php }?>>
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_access_restrictions"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
                        <?php  $_smarty_tpl->tpl_vars["role"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["role"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["role"]->key => $_smarty_tpl->tpl_vars["role"]->value){
$_smarty_tpl->tpl_vars["role"]->_loop = true;
?>
                        <input type="checkbox" class="ow_vertical_middle" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" name="access_restrictions[]" <?php if (!isset($_smarty_tpl->tpl_vars['values']->value['access_restrictions'])||in_array($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['values']->value['access_restrictions'])){?>checked="checked"<?php }?> />
                            <?php echo smarty_function_text(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>

                        <?php } ?>
	            </td>
	        </tr>
        <?php }?>
    </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>