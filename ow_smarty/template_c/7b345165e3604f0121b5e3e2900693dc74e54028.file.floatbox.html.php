<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\decorators\floatbox.html" */ ?>
<?php /*%%SmartyHeaderCode:3442548e8c47a1bd55-95351204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b345165e3604f0121b5e3e2900693dc74e54028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\decorators\\floatbox.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3442548e8c47a1bd55-95351204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c47a22745_54826932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c47a22745_54826932')) {function content_548e8c47a22745_54826932($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    body .owm_floatbox_wrap {
        top: 0px;
    }
    
    .owm_floatbox_preloader {
        height: 50px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div style="display: none" id="floatbox_prototype">

    <div class="owm_floatbox_wrap" data-tpl="wrap">
        <div class="owm_floatbox clearfix">
            <header data-tpl="header">
			
		 <nav id="head-navigation">
                    <a href="javascript://" class="owm_nav_menu" data-tpl="left-btn" style="display: none;"></a>
                    <a href="javascript://" class="owm_nav_profile" data-tpl="right-btn" style="display: none;"></a>
                    <div class="owm_top_title" data-tpl="heading"><?php echo $_smarty_tpl->tpl_vars['data']->value['heading'];?>
</div>
		 </nav>
		 
            </header>
            <div class="owm_floatbox_cont clearfix" data-tpl="body">
                <div class="owm_preloader owm_floatbox_preloader"></div>
            </div>
        </div>
    </div>

</div><?php }} ?>