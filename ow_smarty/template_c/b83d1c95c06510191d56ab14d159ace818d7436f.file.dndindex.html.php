<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:19:01
         compiled from "C:\xampp\htdocs\havanabook\ow_themes\crayon\master_pages\dndindex.html" */ ?>
<?php /*%%SmartyHeaderCode:12858548e5325ae8324-00372576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b83d1c95c06510191d56ab14d159ace818d7436f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_themes\\crayon\\master_pages\\dndindex.html',
      1 => 1416959682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12858548e5325ae8324-00372576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'imageControlValues' => 0,
    'main_menu' => 0,
    'heading' => 0,
    'heading_icon_class' => 0,
    'content' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5325b01393_49121393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5325b01393_49121393')) {function content_548e5325b01393_49121393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="ow_page_wrap">
	<div class="ow_page_padding">
		<div class="ow_site_panel">
				<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

			<div class="ow_logo_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></div>
		</div>
		<div class="ow_header">
			<?php if (isset($_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['src'])){?>
				<div style="background: url(<?php echo $_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['src'];?>
) no-repeat; height: <?php echo $_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['height'];?>
px;"></div>
			<?php }else{ ?>
				<div class="ow_header_pic"></div>
			<?php }?>
			
		</div>
		<div class="ow_page_container">
		<div class="ow_menu_wrap"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
					<?php if ($_smarty_tpl->tpl_vars['heading']->value){?><h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1><?php }?>
					<div class="ow_dndindex clearfix">
						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

			<div class="ow_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>

			</div>
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>
<?php }} ?>