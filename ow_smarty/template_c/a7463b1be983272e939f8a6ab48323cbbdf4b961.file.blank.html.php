<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:48:25
         compiled from "C:\xampp\htdocs\havanabook\ow_themes\origin\master_pages\blank.html" */ ?>
<?php /*%%SmartyHeaderCode:21660548e5a0969f6a1-05008806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7463b1be983272e939f8a6ab48323cbbdf4b961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_themes\\origin\\master_pages\\blank.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21660548e5a0969f6a1-05008806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5a096ac276_51684779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5a096ac276_51684779')) {function content_548e5a096ac276_51684779($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		body,html {background:#fff;min-width:0; height: 100%;}
		.ow_page_wrap {
			background: none;
		}
		.ow_footer {
			background: none;
			border: none;
		    clear: both;
		    height: 96px;
		    margin-top: -99px;
		    padding: 1px 0;
		    position: relative;		
    	}
		.ow_footer .ow_canvas {
		    margin: 0 auto;
		    width: 996px;
		    word-wrap: break-word;
		    background: none;
		}
		.ow_footer .ow_page {
		    margin: 0 0 0 auto;
		    padding: 0 18px;
		    background: none;
		}
		.ow_sign_in_cont {
			position: relative;
		}
		body > .ow_page_wrap {
		     min-height: 100%;
		     position: relative;
		}
		.ow_page_padding {
		     padding-bottom: 99px;
		     background: none;
		}
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_page_wrap">
	<div class="ow_page_padding">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php }} ?>