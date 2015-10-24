<?php /* Smarty version Smarty-3.1.12, created on 2014-12-21 02:39:27
         compiled from "C:\xampp\htdocs\havanabook\ow_themes\havanabook\mobile\master_pages\mobile_general.html" */ ?>
<?php /*%%SmartyHeaderCode:195045496a35f638f53-25369439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bd1be8c4f623ee64e4ae329ea45b19bc533f83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_themes\\havanabook\\mobile\\master_pages\\mobile_general.html',
      1 => 1416959682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195045496a35f638f53-25369439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'topMenu' => 0,
    'bottomMenu' => 0,
    'isAuthenticated' => 0,
    'signIn' => 0,
    'buttonData' => 0,
    'heading' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5496a35f67bfa8_91687617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5496a35f67bfa8_91687617')) {function content_5496a35f67bfa8_91687617($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div id="left" class="owm_sidebar_left">
	<div class="owm_sidebar_left_padding">
		<header>
			<div class="owm_sidebar_left_header_txt"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></div>
		</header>
		<div class="owm_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"></a></div>
		<?php echo $_smarty_tpl->tpl_vars['topMenu']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['bottomMenu']->value;?>

	</div>
</div>
<div id="right" class="owm_sidebar_right">
	<div class="owm_sidebar_right_padding">

		<?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value){?>
			<?php echo smarty_function_component(array('class'=>'BASE_MCMP_Console'),$_smarty_tpl);?>

		<?php }else{ ?>
			<header><div class="owm_sidebar_right_header_txt"><?php echo smarty_function_text(array('key'=>'mobile+right_sidebar_guest_heading'),$_smarty_tpl);?>
</div></header>
			<section class="owm_sidebar_right_cont"><?php echo $_smarty_tpl->tpl_vars['signIn']->value;?>
</section>
		<?php }?>

	</div>
</div>
<div id="main" class="clearfix">
	<header>
		 <nav id="head-navigation">
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['href'];?>
" class="owm_nav_menu<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])){?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['class'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['extraString'];?>
></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['href'];?>
" class="owm_nav_profile<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])){?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['class'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['extraString'];?>
></a>
			<a href="javascript://" class="owm_content_header_count" style="display: none;">
				 <span class="owm_content_header_count_cont"><span class="owm_content_header_count_txt" id="console-counter"></span></span>
			</a>
			<div class="owm_top_title" id="owm_heading"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</div>
		 </nav>
	</header>
	<section><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</section>
	<div class="owm_overlay" id="owm_overlay" style="display:none;"></div>
</div>
<?php echo smarty_function_decorator(array('name'=>'floatbox','heading'=>$_smarty_tpl->tpl_vars['heading']->value),$_smarty_tpl);?>

<?php }} ?>