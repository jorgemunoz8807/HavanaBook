<?php /* Smarty version Smarty-3.1.12, created on 2014-12-18 20:26:13
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\user_view_privacy_no_permission.html" */ ?>
<?php /*%%SmartyHeaderCode:154745493a8e5219254-63868398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '878fdde23d19641b4d37666f58c8a99f063c1532' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\user_view_privacy_no_permission.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154745493a8e5219254-63868398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profileActionToolbar' => 0,
    'avatarSize' => 0,
    'avatar' => 0,
    'role' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5493a8e54bf1e3_06206924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493a8e54bf1e3_06206924')) {function content_5493a8e54bf1e3_06206924($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_avatar_console .ow_avatar_label {
        bottom: 5px;
        right: 5px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

<?php }?>

<div class="ow_left ow_supernarrow">
    <div style="" class="ow_box_empty ow_stdmargin clearfix">
        <div id="avatar-console" class="ow_avatar_console ow_center">
            <div style="height: <?php echo $_smarty_tpl->tpl_vars['avatarSize']->value;?>
px; background: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
) no-repeat center center; width: 100%">
                <?php if (isset($_smarty_tpl->tpl_vars['role']->value['label'])){?><span class="ow_avatar_label"<?php if (isset($_smarty_tpl->tpl_vars['role']->value['custom'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value['custom'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['label'];?>
</span><?php }?>
            </div>
        </div>
    </div>
</div>

<div class="ow_right ow_superwide">
    <div class="ow_anno ow_center">
        <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)){?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'privacy+no_permission_message'),$_smarty_tpl);?>
<?php }?>
    </div>
</div><?php }} ?>