<?php /* Smarty version Smarty-3.1.12, created on 2014-12-19 01:22:51
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\profile_about.html" */ ?>
<?php /*%%SmartyHeaderCode:161075493ee6bda6aa5-82435062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d2c2047d855f699964cbda8f40671cc5c8ec10f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\profile_about.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161075493ee6bda6aa5-82435062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'previewMode' => 0,
    'aboutUrl' => 0,
    'aboutMe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5493ee6be433b0_83101626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493ee6be433b0_83101626')) {function content_5493ee6be433b0_83101626($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .owm_profile_desc {
        display: block;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['previewMode']->value){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl']->value;?>
" class="owm_profile_desc owm_box_wrap owm_bg_color_2 owm_std_margin_bottom">
    <?php echo $_smarty_tpl->tpl_vars['aboutMe']->value;?>

</a>
<?php }else{ ?>
    <div class="owm_profile_desc_all owm_box_wrap owm_bg_color_1 owm_std_margin_bottom">
        <?php echo $_smarty_tpl->tpl_vars['aboutMe']->value;?>

    </div>
<?php }?><?php }} ?>