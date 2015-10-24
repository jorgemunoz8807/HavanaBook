<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:59:21
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\languages_index.html" */ ?>
<?php /*%%SmartyHeaderCode:8161548e78b9845fe2-45533029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '529355b3b0be874a2a7a2a1cac607a51715b99eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\languages_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8161548e78b9845fe2-45533029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'languageSwitchUrl' => 0,
    'langs' => 0,
    'language' => 0,
    'lang' => 0,
    'devMode' => 0,
    'section_switch_url' => 0,
    'current_prefix' => 0,
    'prefixes' => 0,
    'prefix' => 0,
    'searchFormActionUrl' => 0,
    'current_search' => 0,
    'searchInKeys' => 0,
    'isSearchResults' => 0,
    'list' => 0,
    'paging' => 0,
    'origLabel' => 0,
    'origTag' => 0,
    'label' => 0,
    'tag' => 0,
    'item' => 0,
    'item_d2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e78b998bb44_65277469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e78b998bb44_65277469')) {function content_548e78b998bb44_65277469($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\modifier.escape.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(function(){
    $('#add_new_text_btn').click(function(){$('#add_new_text').trigger('click')})
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<style>
	input[type="text"].grey-text{color: #BBB;}
	textarea.once{height:30px;}
	
    .lang_value{
        width: 395px;
        overflow: hidden;
    }
    
</style>

    		<div class="ow_anno ow_std_margin" style="text-align:center;">
	                <?php echo smarty_function_text(array('key'=>"admin+you_are_editing"),$_smarty_tpl);?>

                <select onchange="location.href = '<?php echo $_smarty_tpl->tpl_vars['languageSwitchUrl']->value;?>
&language='+this.value;">
                	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                	<option <?php if ($_smarty_tpl->tpl_vars['language']->value->getTag()==$_smarty_tpl->tpl_vars['lang']->value->getTag()){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->getTag();?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->getLabel();?>
</option>
                	<?php } ?>
                </select>
                
                <?php echo smarty_function_text(array('key'=>"admin+check_other_langs",'url'=>"?mod=langs"),$_smarty_tpl);?>

                
            </div>
            
            <div class="ow_stdmargin clearfix">
                <div class="ow_left" style="margin: 6px 10px;<?php if (empty($_smarty_tpl->tpl_vars['devMode']->value)){?> display: none;<?php }?>">
                	<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+add_new_text','class'=>'ow_ic_add','id'=>"add_new_text_btn"),$_smarty_tpl);?>

                    <a style="display: none;" id="add_new_text" onclick="new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+title_add_new_text"),$_smarty_tpl);?>
', $contents: $('#new-key-form'), width: '550px', icon_class: 'ow_ic_add'})"><?php echo smarty_function_text(array('key'=>"admin+add_new_text"),$_smarty_tpl);?>
</a>
                </div>

            	<div class="ow_box ow_right">
                	<?php echo smarty_function_text(array('key'=>"admin+show"),$_smarty_tpl);?>


                    <select onchange="location.href='<?php echo $_smarty_tpl->tpl_vars['section_switch_url']->value;?>
&prefix='+$(this).val();">
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value=='all'){?>selected="selected"<?php }?> value="all"><?php echo smarty_function_text(array('key'=>"admin+all_sections"),$_smarty_tpl);?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['prefix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prefix']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefixes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prefix']->key => $_smarty_tpl->tpl_vars['prefix']->value){
$_smarty_tpl->tpl_vars['prefix']->_loop = true;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value==$_smarty_tpl->tpl_vars['prefix']->value->prefix){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['prefix']->value->prefix;?>
" > <?php echo $_smarty_tpl->tpl_vars['prefix']->value->label;?>
</option>
                        <?php } ?>
                        <option disabled="disabled">-</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value=='missing-text'){?>selected="selected"<?php }?> value="missing-text">
                        	<?php echo smarty_function_text(array('key'=>"admin+missing_text"),$_smarty_tpl);?>

                        </option>
                    </select>

                    &nbsp;&nbsp;<b>OR</b>&nbsp;&nbsp;

                    <form id="search_form" style="display: inline" onsubmit="location.href = '<?php echo $_smarty_tpl->tpl_vars['searchFormActionUrl']->value;?>
&search='+ $('#search_inp').val()+( $('#search_in_inp:checked').length > 0 ? '&in_keys=y': ''); return false;">
                        <input id="search_inp" name="search" type="text" value="<?php echo $_smarty_tpl->tpl_vars['current_search']->value;?>
" style="width: 200px" class="grey-text" onfocus="if(this.flag == undefined){this.flag = false; $(this).removeClass('grey-text').attr('value', '')}" />
                        <?php if (!empty($_smarty_tpl->tpl_vars['devMode']->value)){?><input id="search_in_inp" name="search_in_keys" <?php if (!empty($_smarty_tpl->tpl_vars['searchInKeys']->value)&&$_smarty_tpl->tpl_vars['searchInKeys']->value=='y'){?>checked="checked"<?php }?> type="checkbox" /> <label>in keys</label><?php }?>
                        <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+go','class'=>"ow_ic_lens",'type'=>'submit'),$_smarty_tpl);?>

                    </form>
                </div>

            </div>
			<?php if ($_smarty_tpl->tpl_vars['isSearchResults']->value){?>
           	<div class="ow_anno ow_std_margin">
               <div style="text-align:center;">
               	<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
               		<?php echo smarty_function_text(array('key'=>"admin+search_results_for_keyword",'keyword'=>((string)$_smarty_tpl->tpl_vars['current_search']->value)),$_smarty_tpl);?>

             	<?php }else{ ?>
             		<?php echo smarty_function_text(array('key'=>"admin+search_no_results_for_keyword",'keyword'=>((string)$_smarty_tpl->tpl_vars['current_search']->value)),$_smarty_tpl);?>

               	<?php }?>
               	</div>
            </div>
            <?php }else{ ?>            
            	<?php if (count($_smarty_tpl->tpl_vars['list']->value)==0){?>
		           	<div class="ow_anno ow_std_margin">
		               <div style="text-align:center;">
		               		{ text key="admin+no_values" } 
		               	</div>
		            </div>
            	<?php }?>
            <?php }?>
            
			<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
            
<form method="POST" id="main-form">
                      
			<table class="ow_table_1 ow_form" style="width:100%;">
                <tr class="ow_tr_first">
                	<th style="width:47%;text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+original_value",'label'=>$_smarty_tpl->tpl_vars['origLabel']->value,'tag'=>$_smarty_tpl->tpl_vars['origTag']->value),$_smarty_tpl);?>
</th>
                	<th style="width:47%;text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+translation",'label'=>$_smarty_tpl->tpl_vars['label']->value,'tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
</th>
                    <th style="width:6%;"></th>
                </tr>
                <!-- custom section -->
               <!-- end of custom section -->

<input type="hidden" name="command" value="edit-values" />
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                	<td colspan="3" style="text-align:center;"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h3></td>
                </tr>
                
                <?php  $_smarty_tpl->tpl_vars['item_d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item_d2']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item_d2']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item_d2']->key => $_smarty_tpl->tpl_vars['item_d2']->value){
$_smarty_tpl->tpl_vars['item_d2']->_loop = true;
 $_smarty_tpl->tpl_vars['item_d2']->iteration++;
 $_smarty_tpl->tpl_vars['item_d2']->last = $_smarty_tpl->tpl_vars['item_d2']->iteration === $_smarty_tpl->tpl_vars['item_d2']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item_d2']['last'] = $_smarty_tpl->tpl_vars['item_d2']->last;
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item_d2']['last']){?>ow_tr_last<?php }?>" onmouseover="$('span.del-cont', this).show();" onmouseout="$('span.del-cont', this).hide();">
                	<td class="ow_label" style="text-align:left;">
                        <div class="lang_value">
                        <?php if ($_smarty_tpl->tpl_vars['item_d2']->value['origValue']){?>
                			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item_d2']->value['origValue']->value, "html", "utf-8");?>

                		<?php }?>
                        </div>
						<div style="margin-top: 10px;" class="ow_small"><span style="padding: 1px 3px;" class="ow_mild_green">{text key='<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
+<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
'}</span></div>                	
                	</td>
                    <td class="ow_value">
                    	<?php if ($_smarty_tpl->tpl_vars['item_d2']->value['value']){?>
                    		<textarea name="values[<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['value']->keyId;?>
]" class="once" onclick="if(this.once === undefined){this.once = true; $(this).removeClass('once')}"><?php echo $_smarty_tpl->tpl_vars['item_d2']->value['value']->value;?>
</textarea>
                    	<?php }else{ ?>
							<textarea name="missing[<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
][<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
]" class="once"></textarea>
                    	<?php }?>
                   	</td>
                    <td class="ns-hover-block">
                    	<div style="width: 50px;">
	                    	<span class="del-cont" style="display: none;">
	                    	
	                    	<?php if (!$_smarty_tpl->tpl_vars['devMode']->value&&$_smarty_tpl->tpl_vars['item']->value['prefix']=='ow_custom'||$_smarty_tpl->tpl_vars['devMode']->value){?>
	                    	<a class="ow_lbutton ow_red" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:deletekey"),$_smarty_tpl);?>
?prefix=<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
" 
	                    		onclick="return(confirm('<?php echo smarty_function_text(array('key'=>"admin+are_you_sure"),$_smarty_tpl);?>
'));">
	                    		<?php echo smarty_function_text(array('key'=>"admin+delete"),$_smarty_tpl);?>

	                   		</a>
	                   		<?php }?>
	                   		</span>
                   		</div>
                	</td>
                </tr>
                <?php } ?>
<?php } ?>
            </table>    
			<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>"admin+save_this_page",'class'=>"ow_ic_save ow_positive",'extraString'=>'onclick="this.form.submit()"'),$_smarty_tpl);?>
</div></div>        
</form>
			<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
            
<!-- begin -->
<div style="display:none;">
	<div id="new-key-form">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_input(array('name'=>"language"),$_smarty_tpl);?>

	<input type="hidden" name="command" value="add-key">
	<table class="ow_table_1 ow_form" style="width: 100%">
			<tr class="ow_alt2 ow_tr_first" style="<?php if (!$_smarty_tpl->tpl_vars['devMode']->value){?>display: none;<?php }?>">
				<td class="ow_label"><?php echo smarty_function_label(array('name'=>'prefix'),$_smarty_tpl);?>
</td>
				<td class="ow_value">
					<?php echo smarty_function_input(array('name'=>'prefix'),$_smarty_tpl);?>

					<br /><?php echo smarty_function_error(array('name'=>'prefix'),$_smarty_tpl);?>

				</td>
			</tr>
			<tr class="ow_alt1" style="<?php if (!$_smarty_tpl->tpl_vars['devMode']->value){?>display: none;<?php }?>">
				<td class="ow_label"><?php echo smarty_function_label(array('name'=>'key'),$_smarty_tpl);?>
</td>
				<td class="ow_value">
					<?php echo smarty_function_input(array('name'=>'key'),$_smarty_tpl);?>

					<br /><?php echo smarty_function_error(array('name'=>'key'),$_smarty_tpl);?>

				</td>
			</tr>
		<tr class="ow_alt2 ow_tr_last">
			<td class="ow_label ow_nowrap"><?php echo smarty_function_label(array('name'=>'value'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'value','style'=>'height: 150px'),$_smarty_tpl);?>

				<br /><?php echo smarty_function_error(array('name'=>'value'),$_smarty_tpl);?>

			</td>
		</tr >
	</table>
    <div class="clearfix ow_submit"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div>
<!-- end --><?php }} ?>