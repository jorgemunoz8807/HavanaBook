<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:21
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\snippets\views\components\snippet.html" */ ?>
<?php /*%%SmartyHeaderCode:14374548e56bdca7759-05127899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01761690c7e1a2f6f90675cb263078e04bf9fd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\snippets\\views\\components\\snippet.html',
      1 => 1405657434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14374548e56bdca7759-05127899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayType' => 0,
    'url' => 0,
    'label' => 0,
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56bdd5b8c6_34336476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56bdd5b8c6_34336476')) {function content_548e56bdd5b8c6_34336476($_smarty_tpl) {?><div class="s-snippet ow_border ow_bg_color clearfix s-snippet-<?php echo $_smarty_tpl->tpl_vars['displayType']->value;?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="s-snippet-overlay">
        <div class="s-snippet-label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</div>        
    </a>
    
    <?php  $_smarty_tpl->tpl_vars["image"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["images"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["image"]->key => $_smarty_tpl->tpl_vars["image"]->value){
$_smarty_tpl->tpl_vars["image"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["images"]['iteration']++;
?>
        <div style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
)" class="s-snippet-image ow_border s-snippet-image-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['images']['iteration'];?>
"></div>
    <?php } ?>
</div><?php }} ?>