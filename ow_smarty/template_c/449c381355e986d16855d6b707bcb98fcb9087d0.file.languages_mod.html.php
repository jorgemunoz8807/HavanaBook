<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:59:24
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\languages_mod.html" */ ?>
<?php /*%%SmartyHeaderCode:12652548e78bca26ba5-75584786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '449c381355e986d16855d6b707bcb98fcb9087d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\languages_mod.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12652548e78bca26ba5-75584786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'active_langs' => 0,
    'lang' => 0,
    'devMode' => 0,
    'inactive_langs' => 0,
    'foo' => 0,
    'type' => 0,
    'langsToImport' => 0,
    'prefixesToImport' => 0,
    'prToImp' => 0,
    'langs' => 0,
    'prefixes' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e78bcb55f71_61226724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e78bcb55f71_61226724')) {function content_548e78bcb55f71_61226724($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="ow_stdmargin">
	<span class="ow_highlight" style="padding:1px 3px;"><?php echo smarty_function_text(array('key'=>"admin+page_note_part_1"),$_smarty_tpl);?>
</span> <?php echo smarty_function_text(array('key'=>"admin+page_note_part_2"),$_smarty_tpl);?>

</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(document).ready( function(){
	$('#s1, #s2').sortable({
		items: 'tr.draggable-lang-item',
		helper: 'clone',
		placeholder: 'lang_placeholder',
		start: function(event, ui){
			$(ui.placeholder).append('<td colspan="3"></td>');
		},

		stop: function(event, ui){

				switch( this ){
					case $('#s1')[0]:

						if( $('tr.draggable-lang-item', this).length == 0 )
						{
							alert( '<?php echo smarty_function_text(array('key'=>"admin+msg_one_active_constraint"),$_smarty_tpl);?>
' );

							$(this).sortable('cancel');

							$('#s1 tr.empty').remove();
							break;
						}

						$('tr.draggable-lang-item:odd', this).each(function(){

							if( !$(this).hasClass('ow_even') ) $(this).addClass('ow_even');
						});


						$('tr.draggable-lang-item:even', this).each(function(){
							if( $(this).hasClass('ow_even') ) $(this).removeClass('ow_even');
						});
						break;
				}
			},

		receive: function(event, ui){
					switch(this){
						case $('#s1')[0] :
							$('tr.draggable-lang-item', this).each( function(){
								$('td:nth(2) div span a.deact', this).show(); $('td:nth(2) div span a.act', this).hide(); $('td:nth(2) div span a.del', this).hide();

                                 if( $(this).hasClass('ow_high2') ){
                                    $(this).removeClass('ow_high2');
                                }
							} );

                           $( 'td:nth(2) div span a.deact', $('tr.draggable-lang-item', this).get(0) ).hide();

						if( $('tr.draggable-lang-item', this).length == 0 )
						{
							alert( '{text key="admin+msg_one_active_constraint"}' );

							$(this).sortable('cancel');
							$('#s1 tr.empty').remove();
							break;
						}

						$('tr.draggable-lang-item:odd', this).each(function(){
							if( !$(this).hasClass('ow_even') ) $(this).addClass('ow_even');
						});


						$('tr.draggable-lang-item:even', this).each(function(){
							if( $(this).hasClass('ow_even') ) $(this).removeClass('ow_even');
						});

							break;

						case $('#s2')[0]:
							if($('tr.draggable-lang-item', ui.sender).length == 0) break;
							$('tr.draggable-lang-item', this).each( function(){

								$('td:nth(2) div span a.deact', this).hide(); $('td:nth(2) div span a.act', this).show(); $('td:nth(2) div span a.del', this).show();

								if( $(this).hasClass('ow_even') )
									$(this).removeClass('ow_even');

									if( !$(this).hasClass('ow_high2') )
										$(this).addClass('ow_high2');
							} ) ;
							break;
					}
				},

		update: function(event, ui){
				if( ui.sender ){
					if($('tr', ui.sender[0]).length == 0) $( ui.sender[0] ).append('<tr class="empty"><td colspan="3"><?php echo smarty_function_text(array('key'=>"admin+empty"),$_smarty_tpl);?>
</td></tr>');
					return;
				}

				if( $('#s1 tr.empty').length == 1 && $('#s1 tr.draggable-lang-item').length > 0 )
					$('#s1 tr.empty').remove();

				if( $('#s2 tr.empty').length == 1 && $('#s2 tr.draggable-lang-item').length > 0 )
					$('#s2 tr.empty').remove();


                $('tr.draggable-lang-item', '#s1').each( function(){
								$('td:nth(2) div span a.deact', this).show();
				});

                $( 'td:nth(2) div span a.deact', $('tr.draggable-lang-item', '#s1').get(0) ).hide();

				var set = {};

				$('tr.draggable-lang-item', '#s1').each(function(i){
					set['active['+i+']'] = parseInt( $('input:hidden', this).attr('value') );
				});

				$('tr.draggable-lang-item', '#s2').each(function(i){
					set[ 'inactive['+i+']' ] = parseInt( $('input:hidden', this).attr('value') );
				});

				if( $('tr.draggable-lang-item', '#s1').length == 0 ) return;

				$('td:nth(0) span.ow_mild_green', $('tr.draggable-lang-item', '#s1, #s2')).remove();

				$('td:nth(0)', $('tr.draggable-lang-item', '#s1')[0]).append(
						'<span class="ow_mild_green ow_small"><?php echo smarty_function_text(array('key'=>"admin+def"),$_smarty_tpl);?>
</span>'
						
					);

				$.ajax( {
					type: "POST",
					url: '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxOrder"),$_smarty_tpl);?>
',
					data: set
				});
		},

		connectWith: '#s1, #s2'
	}).each( function(){
		$('tr.draggable-lang-item', this).hover(
				function(){ $('td:nth-child(3) div span', this).show() },
				function(){ $('td:nth-child(3) div span', this).hide() }
			);

		if ($('tr.draggable-lang-item', this).length == 0)
			$(this).append( '<tr class="empty"><td colspan="3"><?php echo smarty_function_text(array('key'=>"admin+empty"),$_smarty_tpl);?>
</td></tr>' );
		} );
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.lang_placeholder {
	border: 1px dashed grey;
	width: 100%;
}

tr.lang_placeholder td{
	border: 1px dashed grey;
	width: 100%;
	height: 35px;
}

.draggable-lang-item{
	cursor: move;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_superwide ow_automargin ow_stdmargin">
<a name="lang_list"></a>
<table id="langs" class="ow_table_1">
    <tr class="ow_tr_first">
        <th class="ow_center"><?php echo smarty_function_text(array('key'=>"admin+active_languages"),$_smarty_tpl);?>
</th>
        <th width="100"><?php echo smarty_function_text(array('key'=>"admin+missing_keys2"),$_smarty_tpl);?>
</th>
        <th width="180"></th>
    </tr>
    <tbody id="s1" class="s">
	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['active_langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lang']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['lang']->iteration=0;
 $_smarty_tpl->tpl_vars['lang']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->iteration++;
 $_smarty_tpl->tpl_vars['lang']->index++;
 $_smarty_tpl->tpl_vars['lang']->first = $_smarty_tpl->tpl_vars['lang']->index === 0;
 $_smarty_tpl->tpl_vars['lang']->last = $_smarty_tpl->tpl_vars['lang']->iteration === $_smarty_tpl->tpl_vars['lang']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["active_langs"]['first'] = $_smarty_tpl->tpl_vars['lang']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["active_langs"]['last'] = $_smarty_tpl->tpl_vars['lang']->last;
?>
    <tr class="ow_high1 draggable-lang-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['active_langs']['last']){?>ow_tr_last<?php }?>">
        <td style="text-align:left;"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
">
        	<?php echo $_smarty_tpl->tpl_vars['lang']->value['label'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['active_langs']['first']){?><span class="ow_mild_green ow_small"><?php echo smarty_function_text(array('key'=>"admin+def"),$_smarty_tpl);?>
</span><?php }?>
       	</td>

        <td class="ow_center">
        	<a href="<?php if ($_smarty_tpl->tpl_vars['devMode']->value){?><?php echo smarty_function_url_for_route(array('for'=>"admin_developer_tools_language"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:"),$_smarty_tpl);?>
<?php }?>?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
&prefix=missing-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['missing_key_count'];?>
</a>
       	</td>

        <td>
        	<div style="width:250px;height: 20px;" class="ow_center">
	        	<span style="display: none;">
		            <a class="ow_lbutton" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:index"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_edit_values"),$_smarty_tpl);?>
</a>
                    <a class="ow_lbutton" href="javascript://" onclick="OW.ajaxFloatBox('ADMIN_CMP_LangEdit',['<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
'], {width:600, iconClass: 'ow_ic_edit', title: '<?php echo smarty_function_text(array('key'=>'admin+edit_langs_cap_label'),$_smarty_tpl);?>
'})"><?php echo smarty_function_text(array('key'=>"admin+btn_label_edit"),$_smarty_tpl);?>
</a>
		            <a class="ow_lbutton" onclick="$('form[name=clone-form] input:hidden[name=language]').attr('value', '<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
'); new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>'admin+clone_language_cap_label'),$_smarty_tpl);?>
', $contents: $('#clone_cont'), width: '420px'})" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+btn_label_clone"),$_smarty_tpl);?>
</a>

					<a class="ow_lbutton ow_green act" style="display: none;" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:activate"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_activate"),$_smarty_tpl);?>
</a>
                    <a class="ow_lbutton ow_red deact" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['active_langs']['first']){?>style="display: none;"<?php }?>href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:deactivate"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_deactivate"),$_smarty_tpl);?>
</a>
		            <a class="ow_lbutton ow_red del" style="display: none;" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:delete"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_delete"),$_smarty_tpl);?>
</a>
	            </span>
        	</div>
        </td>
    </tr>
    <?php } ?>
	</tbody>
	<tr class="ow_tr_delimiter"><td></td></tr>

    <tr class="ow_tr_first ow_tr_last">
        <th class="ow_center"><?php echo smarty_function_text(array('key'=>"admin+inactive_languages"),$_smarty_tpl);?>
</th>
        <th width="100"><?php echo smarty_function_text(array('key'=>"admin+missing_keys2"),$_smarty_tpl);?>
</th>
        <th width="180"></th>
    </tr>

	<tfoot id="s2" class="s">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inactive_langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lang']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['lang']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->iteration++;
 $_smarty_tpl->tpl_vars['lang']->last = $_smarty_tpl->tpl_vars['lang']->iteration === $_smarty_tpl->tpl_vars['lang']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['inactive_lang']['last'] = $_smarty_tpl->tpl_vars['lang']->last;
?>
    <tr class="ow_high2 draggable-lang-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['inactive_lang']['last']){?>ow_tr_last<?php }?>">
        <td style="text-align:left;">
        	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
">
        	<?php echo $_smarty_tpl->tpl_vars['lang']->value['label'];?>

        </td>
        <td class="ow_center">
        	<a href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:index"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
&prefix=missing-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['missing_key_count'];?>
</a>
       	</td>
        <td>
        	<div style="width: 250px; height: 20px;" class="ow_center">
	        	<span style="display: none;">
                    <a class="ow_lbutton" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:index"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_edit_values"),$_smarty_tpl);?>
</a>
                    <a class="ow_lbutton" href="javascript://" onclick="OW.ajaxFloatBox('ADMIN_CMP_LangEdit',['<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
'], {width:600, iconClass: 'ow_ic_edit', title: '<?php echo smarty_function_text(array('key'=>'admin+edit_langs_cap_label'),$_smarty_tpl);?>
'})"><?php echo smarty_function_text(array('key'=>"admin+btn_label_edit"),$_smarty_tpl);?>
</a>
		            <a class="ow_lbutton" onclick="$('form[name=clone-form] input:hidden[name=language]').attr('value', '<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
'); new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>'admin+clone_language_cap_label'),$_smarty_tpl);?>
', $contents: $('#clone_cont'), width: '420px'})" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+btn_label_clone"),$_smarty_tpl);?>
</a>

					<a class="ow_lbutton ow_green act" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:activate"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_activate"),$_smarty_tpl);?>
</a>
                    <a class="ow_lbutton ow_red deact" style="display: none;" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:deactivate"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_deactivate"),$_smarty_tpl);?>
</a>
	            	<?php if ($_smarty_tpl->tpl_vars['lang']->value['tag']!='en'){?><a class="ow_lbutton ow_red del" onclick="return confirm('<?php echo smarty_function_text(array('key'=>"admin+are_you_sure"),$_smarty_tpl);?>
')" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:delete"),$_smarty_tpl);?>
?language=<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
"><?php echo smarty_function_text(array('key'=>"admin+btn_label_delete"),$_smarty_tpl);?>
</a><?php }?>
	            </span>
        	</div>
        </td>
    </tr>
    <?php } ?>
    <tfoot>
</table>
</div>

<div class="ow_superwide ow_automargin">
<?php $_smarty_tpl->_capture_stack[0][] = array('add_new_lang', null, null); ob_start(); ?><?php echo smarty_function_text(array('key'=>"admin+add_new_lang_or_pack"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['add_new_lang'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['add_new_lang']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a name="lang_import"></a>
	<p>
        <?php echo smarty_function_text(array('key'=>"admin+import_lang_note"),$_smarty_tpl);?>

	</p>

	<div class="ow_box ow_superwide" style="text-align:center;margin:0 auto 20px; display: <?php if (!$_smarty_tpl->tpl_vars['foo']->value){?>block<?php }else{ ?>none<?php }?>;">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"import")); $_block_repeat=true; echo smarty_block_form(array('name'=>"import"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		 <?php echo smarty_function_input(array('name'=>"command"),$_smarty_tpl);?>

		 <?php echo smarty_function_label(array('name'=>"file"),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>"file"),$_smarty_tpl);?>
 <?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_ic_add"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"import"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['foo']->value){?>
		<form id="imp_form" method="POST" action="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:import"),$_smarty_tpl);?>
">
		<input type="hidden" name="command" value="import-langs" />
		<input type="hidden" name="imp-type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />

	    <table id="import_table" class="ow_table_2 ow_small ow_spc_import_language">
	        <tr>
	        	<td></td>
	        	<td colspan="10" style="text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+select_items_to_import_note"),$_smarty_tpl);?>
</td>
	        </tr>

	        <tr>
	        	<td></td>
	        	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langsToImport']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']++;
?>
	        	<th><input type="checkbox" onclick="$('input:checkbox.col_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['col']['iteration'];?>
', $('#import_table') ).attr('checked', this.checked);"/> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label'];?>
</th>
	        	<?php } ?>
	        </tr>

	        <?php  $_smarty_tpl->tpl_vars['prToImp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prToImp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefixesToImport']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['row']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['prToImp']->key => $_smarty_tpl->tpl_vars['prToImp']->value){
$_smarty_tpl->tpl_vars['prToImp']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['row']['iteration']++;
?>
	        <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
	        	<th style="text-align:left;">
	        		<input type="checkbox" onclick="$('input:checkbox.row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['row']['iteration'];?>
', $('#import_table') ).attr('checked', this.checked);" />
	        		<?php echo $_smarty_tpl->tpl_vars['prToImp']->value['label'];?>

	       		</th>

	        	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langsToImport']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['iteration']++;
?>
				<td>
					<input type="checkbox" class="col_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['col']['iteration'];?>
 row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['row']['iteration'];?>
" name="set[lang][lang_<?php echo $_smarty_tpl->tpl_vars['lang']->value['tag'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['prToImp']->value['prefix'];?>
"/>
				</td>
	        	<?php } ?>
	        </tr>
	        <?php } ?>

	        <tr>
	        	<td></td>
	        	<td colspan="10"><input type="checkbox" onclick="$('input:checkbox','#import_table').attr('checked', this.checked);" /> <?php echo smarty_function_text(array('key'=>"admin+lang_import_check_all"),$_smarty_tpl);?>
</td>
	        </tr>
	    </table>
		<div class="clearfix">
			<div class="ow_right">
			<?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_positive",'langLabel'=>"admin+import_lang_button_label",'extraString'=>"onclick=\""."$"."('#imp_form')[0].submit()\""),$_smarty_tpl);?>

			</div>
		</div>
		</form>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['add_new_lang']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ondrag-class{
	background-color: #B2CCB2;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<span id="exportInvite">
	<?php $_smarty_tpl->_capture_stack[0][] = array('export_lang', null, null); ob_start(); ?><?php echo smarty_function_text(array('key'=>"admin+export_lang_header"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['export_lang'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['export_lang']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    	<p style="padding-bottom:10px;"><?php echo smarty_function_text(array('key'=>"admin+export_lang_note"),$_smarty_tpl);?>
</p>

        <div class="ow_box_mod clearfix ow_smallmargin">
            <div class="ow_right">
                <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_up_arrow",'langLabel'=>"admin+export_lang_button_label",'extraString'=>"onclick=\""."$"."('#exportInvite').hide();"."$"."('#exportForm').show();\""),$_smarty_tpl);?>

            </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_add','label'=>Smarty::$_smarty_vars['capture']['export_lang']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</span>

</div>

<form id="exportForm" method="POST" style="display: none;">
<input type="hidden" name="command" value="export-langs">

	<table id="export_table" class="ow_table_2 ow_small ow_superwide ow_spc_inport_language ow_automargin">
	    <tr>
	    	<td></td>
	    	<td colspan="10" style="text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+export_lang_note2"),$_smarty_tpl);?>
</td>
	    </tr>
	    <tr>
            <td class="ow_left"><input type="checkbox" onclick="$('input:checkbox', '#export_table').attr('checked', this.checked);"/> <?php echo smarty_function_text(array('key'=>"admin+lang_import_check_all"),$_smarty_tpl);?>
</td>
	    	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']++;
?>
	    	<th><input type="checkbox" onclick="$('input:checkbox.col_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['col']['iteration'];?>
', $('#export_table') ).attr('checked', this.checked);"/> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label'];?>
</th>
	    	<?php } ?>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['prefix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prefix']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefixes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["row"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['prefix']->key => $_smarty_tpl->tpl_vars['prefix']->value){
$_smarty_tpl->tpl_vars['prefix']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["row"]['iteration']++;
?>
	    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
" >
	    	<th style="text-align: left;"><input type="checkbox" onclick="$('input:checkbox.row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['row']['iteration'];?>
', $('#export_table') ).attr('checked', this.checked);" /> <?php echo $_smarty_tpl->tpl_vars['prefix']->value->getLabel();?>
</th>
	    	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['iteration']++;
?>
	    	<td><input type="checkbox" class="col_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['col']['iteration'];?>
 row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['row']['iteration'];?>
" name="set[lang][lang_<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
][prefix_<?php echo $_smarty_tpl->tpl_vars['prefix']->value->getId();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['prefix']->value->getId();?>
"/></td>
	    	<?php } ?>
	    </tr>
	    <?php } ?>
	</table>
	<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_up_arrow ow_positive",'langLabel'=>"admin+export_lang_button_label2",'extraString'=>"onclick=\""."$"."('#exportForm')[0].submit();\""),$_smarty_tpl);?>
</div></div>
</form>

<div style="display: none;">
	<div id="clone_cont">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"clone-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"clone-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_input(array('name'=>"language"),$_smarty_tpl);?>

			<table class="ow_table_1 ow_form">
				<tr class="ow_alt2">
					<td class="ow_label">
						<?php echo smarty_function_label(array('name'=>"label"),$_smarty_tpl);?>

					</td>
                    <td class="ow_value" style="width:30%">
						<?php echo smarty_function_input(array('name'=>"label"),$_smarty_tpl);?>

					</td>
                    <td class="ow_desc">
						<?php echo smarty_function_desc(array('name'=>"label"),$_smarty_tpl);?>

					</td>
				</tr>
				<tr class="ow_alt1">
					<td class="ow_label">
						<?php echo smarty_function_label(array('name'=>"tag"),$_smarty_tpl);?>

					</td>
                    <td class="ow_value">
						<?php echo smarty_function_input(array('name'=>"tag"),$_smarty_tpl);?>

					</td>
					<td class="ow_desc">
						<?php echo smarty_function_desc(array('name'=>"tag"),$_smarty_tpl);?>

					</td>
				</tr>
			</table>
			<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"clone-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div><?php }} ?>