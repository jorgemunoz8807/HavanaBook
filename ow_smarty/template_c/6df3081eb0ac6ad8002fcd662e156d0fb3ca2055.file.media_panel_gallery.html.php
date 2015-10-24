<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:23:29
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\media_panel_gallery.html" */ ?>
<?php /*%%SmartyHeaderCode:21480548e8c71968582-75478092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df3081eb0ac6ad8002fcd662e156d0fb3ca2055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\media_panel_gallery.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21480548e8c71968582-75478092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'images' => 0,
    'img' => 0,
    'dto' => 0,
    'data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c719f6521_71837564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c719f6521_71837564')) {function content_548e8c719f6521_71837564($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	window.insImg = function( elid, id, src, size ){
        data = {src:src};
        if( $('#gimg-'+id+'-p').is(':checked') ){data.resize = 300; data.preview = true;}
        if( $('#gimg-'+id+'-align').val() != 'none' ){data.align = $('#gimg-'+id+'-align').val();}
        window.parent.document.getElementById(elid).jhtmlareaObject.insertImage(data);
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div style="height: 430px; overflow-y: scroll;">
	<table style="width: 100%;" cellpadding="5">

		<?php  $_smarty_tpl->tpl_vars["img"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["img"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["img"]->key => $_smarty_tpl->tpl_vars["img"]->value){
$_smarty_tpl->tpl_vars["img"]->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_variable($_smarty_tpl->tpl_vars['img']->value['dto'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['img']->value['data'], null, 0);?>

			<tr class="<?php echo smarty_function_cycle(array('name'=>"1",'values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
" onclick="if( $('#gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
').is(':visible') ){ $('#gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-visbtn').empty().html('show');} else $('#gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-visbtn').empty().html('<?php echo smarty_function_text(array('key'=>'base+mp_gal_hide'),$_smarty_tpl);?>
'); $('#gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
').toggle();">
				<td style="padding: 3px;">
					 <div style="float: left;"><?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->width)&&!empty($_smarty_tpl->tpl_vars['data']->value->height)){?><?php echo $_smarty_tpl->tpl_vars['data']->value->width;?>
x<?php echo $_smarty_tpl->tpl_vars['data']->value->height;?>
<?php }?></div><span id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-visbtn" class="ow_lbutton clearfix" style="width: 30px; text-align:center; float: right;"><?php echo smarty_function_text(array('key'=>'base+mp_gal_show'),$_smarty_tpl);?>
</span>
				</td>
			</tr>

			<tr class=" <?php echo smarty_function_cycle(array('name'=>"2",'values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
" id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['img']->value['sel']){?>block<?php }else{ ?>none<?php }?>; ">
				<td align="center">
					<img style="height: 200px;" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
"/>

					<table class="ow_form ow_table_3">
						<tr class="ow_tr_first">
							<td class="ow_label"><?php echo smarty_function_text(array('key'=>'base+mp_gal_pic_url'),$_smarty_tpl);?>
</td>
							<td class="ow_value">
								<input id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-url" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" type="text" /> <a class="ow_lbutton ow_red" onclick="$('#gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-url').val('')" ><?php echo smarty_function_text(array('key'=>'base+mp_gal_delete'),$_smarty_tpl);?>
</a>
							</td>
						</tr>
						<tr>
							<td class="ow_label">Size</td>
							<td class="ow_value">
								<input type="radio" name="pos-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
" checked="checked" id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-p" value="preview" /> <label for="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-p"><?php echo smarty_function_text(array('key'=>'base+mp_gal_preview'),$_smarty_tpl);?>
</label>
								<input type="radio" name="pos-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
" id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-f" value="fullsize"/> <label for="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-f"><?php echo smarty_function_text(array('key'=>'base+mp_gal_fullsize'),$_smarty_tpl);?>
</label>
							</td>
						</tr>
						<tr class="ow_tr_last">
							<td class="ow_label"><?php echo smarty_function_text(array('key'=>'base+mp_gal_align'),$_smarty_tpl);?>
 </td>
							<td class="ow_value">
								<select id="gimg-<?php echo $_smarty_tpl->tpl_vars['dto']->value->getId();?>
-align">
									<option value="none"><?php echo smarty_function_text(array('key'=>'base+mp_gal_none'),$_smarty_tpl);?>
</option>
									<option value="left"><?php echo smarty_function_text(array('key'=>'base+mp_gal_left'),$_smarty_tpl);?>
</option>
									<option value="center"><?php echo smarty_function_text(array('key'=>'base+mp_gal_center'),$_smarty_tpl);?>
</option>
									<option value="right"><?php echo smarty_function_text(array('key'=>'base+mp_gal_right'),$_smarty_tpl);?>
</option>
								</select>
							</td>
						</tr>
					</table>
					
					<div class="clearfix"><div class="ow_right">								
					<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->width)&&!empty($_smarty_tpl->tpl_vars['data']->value->height)){?>
									<?php $_smarty_tpl->tpl_vars["size"] = new Smarty_variable("[".((string)$_smarty_tpl->tpl_vars['data']->value->height).", ".((string)$_smarty_tpl->tpl_vars['data']->value->width)."]", null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars["size"] = new Smarty_variable("[]", null, 0);?>
								<?php }?>

								<?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>'base+mp_gal_ins_into_post','onclick'=>"insImg('".((string)$_smarty_tpl->tpl_vars['id']->value)."', ".((string)$_smarty_tpl->tpl_vars['dto']->value->id).",  '".((string)$_smarty_tpl->tpl_vars['img']->value['url'])."', ".((string)$_smarty_tpl->tpl_vars['size']->value).")"),$_smarty_tpl);?>

								<?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>'base+delete','class'=>'ow_red','onclick'=>"$"."('input[name=img-id]', '#delete-image-form').val('".((string)$_smarty_tpl->tpl_vars['dto']->value->id)."'); "."$"."('#delete-image-form')[0].submit();"),$_smarty_tpl);?>

					</div></div>
				</td>
			</tr>
		<?php } ?>
	</table>
    <a name="bottom"></a>

<form method="POST" id="delete-image-form" style="display: none;">
	<input type="hidden" name="command" value="delete-image" />
	<input type="hidden" name="img-id" value="" />
</form>
</div>
<?php }} ?>