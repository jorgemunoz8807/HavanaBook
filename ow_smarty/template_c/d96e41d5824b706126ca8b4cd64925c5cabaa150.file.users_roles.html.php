<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:57:51
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\users_roles.html" */ ?>
<?php /*%%SmartyHeaderCode:4766548e5c3f9861f5-37909487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96e41d5824b706126ca8b4cd64925c5cabaa150' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\users_roles.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4766548e5c3f9861f5-37909487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set' => 0,
    'item' => 0,
    'role' => 0,
    'total' => 0,
    'roleId' => 0,
    'percent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5c3fa47ba1_39269302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5c3fa47ba1_39269302')) {function content_548e5c3fa47ba1_39269302($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text_edit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text_edit.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.math.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(document).ready(function(){
	$('#roles').sortable({
		items: 'tr.role',
		helper: 'clone',
		placeholder: 'placeholder',
		start: function(event, ui){
			$(ui.placeholder).append('<td colspan="4"></td>');
		},
		update: function(event, ui){
			var set = {};

			$('#roles tr.role td input:checkbox[name="role[]"]').each(function(i){
				var id = $(this).val();
				set['order['+id+']'] = ++i;
			});

			url = '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Users:ajaxReorder"),$_smarty_tpl);?>
';

			$.post( url, set );
		},
		stop: function(event, ui){

			$set = $('#roles tr.role td input:checkbox[name="role[]"]');
			 
			$set.attr('disabled', false);

			$( $set[0] ).attr('disabled', 'disabled').attr('checked', false);

			$('td span.default-role:visible', this).hide();

			$('td input:checkbox[name]')
			
			$( $(this).sortable('option', 'items'), this ).each(function(i){
				if(i == 0)
					$('td span.default-role', this).show();

				var isEven = (i+1) % 2 === 0;

				remClass = isEven ? 'ow_alt1':'ow_alt2';
				addClass = isEven ? 'ow_alt2':'ow_alt1';
				
				if( $(this).hasClass(remClass) )
					$(this).removeClass( remClass );

				if( !$(this).hasClass(addClass) )
					$(this).addClass( addClass );

			})
		}
	});

	$(".edit_role", "#roles").click(function(){
	    var roleId = $(this).attr("rel");

	    editRoleFloatBox = OW.ajaxFloatBox(
	    	"ADMIN_CMP_AuthorizationRoleEdit", 
	    	{ roleId: roleId }, 
	    	{ width:400, iconClass: "ow_ic_edit", title: OW.getLanguageText('admin', 'permissions_edit_role_btn') }
	    );
	});
});


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


tr.placeholder td{
	border: 1px dashed grey;
	height: 35px;
	width: 100%;
}

.role{
	cursor: move;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_automargin ow_wide">
	<form action="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Users:deleteRoles"),$_smarty_tpl);?>
" method="POST">
	    <table id="roles" class="ow_table_2 ow_form ow_stdmargin ow_center">
	        <tr class="ow_tr_first">
	            <th width="1"></th>
	            <th><?php echo smarty_function_text(array('key'=>'admin+permissions_user_role'),$_smarty_tpl);?>
</th>
	            <th width="1"><?php echo smarty_function_text(array('key'=>'admin+permissions_number_of_users'),$_smarty_tpl);?>
</th>
	            <th width="1"><span class="ow_nowrap"><?php echo smarty_function_text(array('key'=>'admin+avatar_label'),$_smarty_tpl);?>
</span></th>
	        </tr>

	        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['set']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["roles"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
		        <?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['dto'], null, 0);?>
		        <?php $_smarty_tpl->tpl_vars['roleId'] = new Smarty_variable($_smarty_tpl->tpl_vars['role']->value->id, null, 0);?>
		        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 role">
		            <td>
		            	<input type="checkbox" name="role[]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['roles']['first']){?>disabled="disabled"<?php }?> />
		            </td>
		            <td class="ow_txtleft">
		            	<?php echo smarty_function_text_edit(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>
  
		            	<span class="ow_mild_green ow_small default-role" style="display:<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['roles']['first']){?>inline<?php }else{ ?>none<?php }?>;">
		            		<?php echo smarty_function_text(array('key'=>'admin+permissions_default_role'),$_smarty_tpl);?>

		            	</span>
		            </td>
		            <td class="ow_nowrap">
		            	<?php echo smarty_function_math(array('equation'=>"(x/y)*100",'x'=>$_smarty_tpl->tpl_vars['item']->value['userCount'],'y'=>$_smarty_tpl->tpl_vars['total']->value,'assign'=>'percent'),$_smarty_tpl);?>

		            	<a href="<?php echo smarty_function_url_for_route(array('for'=>"admin_users_browse_membership_owners:[roleId=>".((string)$_smarty_tpl->tpl_vars['roleId']->value)."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['userCount'];?>
</a> | <?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['percent']->value);?>
%
		            </td>
		            <td style="min-width: 40px;">
		            <?php if ($_smarty_tpl->tpl_vars['role']->value->displayLabel){?>
                        <a class="ow_lbutton edit_role" rel="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" href="javascript://"<?php if (!empty($_smarty_tpl->tpl_vars['role']->value->custom)){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value->custom;?>
"<?php }?>>
                            <?php echo smarty_function_text(array('key'=>'base+yes'),$_smarty_tpl);?>

                        </a>
		            <?php }else{ ?>
                        <a href="javascript://" rel="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" class="edit_role"><?php echo smarty_function_text(array('key'=>'base+no'),$_smarty_tpl);?>
</a>
		            <?php }?>
		            </td>
		        </tr>
		        <?php } ?>
			<tr class="ow_tr_last">
				<td>
					<input id="check_all" type="checkbox" onclick="$('#roles tr.role td input:checkbox:enabled').attr('checked', this.checked );" />
				</td>
				<td colspan="3" style="text-align: left;">
					<label for="check_all"><?php echo smarty_function_text(array('key'=>'admin+permissions_check_all_selected'),$_smarty_tpl);?>
</label>
					<form>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						

							function delRoles(){
								if( $('#roles tr.role td input:checkbox:checked').size() == 0 ){ 
									alert('<?php echo smarty_function_text(array('key'=>'admin+permissions_please_select_role'),$_smarty_tpl);?>
'); 
									return false;
								}

								return confirm('<?php echo smarty_function_text(array('key'=>'admin+permissions_are_you_sure'),$_smarty_tpl);?>
');								
							}

						
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php echo smarty_function_decorator(array('name'=>'button','type'=>'submit','langLabel'=>'admin+permissions_delete_role','class'=>'ow_button ow_red ow_ic_delete','onclick'=>"return delRoles()"),$_smarty_tpl);?>

					</form>									
				</td>
			</tr>
	    </table>
	</form>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"add-role")); $_block_repeat=true; echo smarty_block_form(array('name'=>"add-role"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	            <?php echo smarty_function_label(array('name'=>"label"),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>"label",'style'=>"width: 270px;"),$_smarty_tpl);?>

	            <?php echo smarty_function_submit(array('name'=>"submit",'class'=>" ow_mild_green ow_ic_add"),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"add-role"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "permissionsPageUrl", null); ob_start(); ?><?php echo smarty_function_url_for(array('for'=>'ADMIN_CTRL_Permissions:roles'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo smarty_function_text(array('key'=>'admin+permissions_go_to_permissions_page','url'=>((string)$_smarty_tpl->tpl_vars['permissionsPageUrl']->value)),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>