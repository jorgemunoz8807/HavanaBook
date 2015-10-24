<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:56:16
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\console_list_ipc_item.html" */ ?>
<?php /*%%SmartyHeaderCode:2113548e5be029c179-00092804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880a8bb19dd9be20f337548c1770f05f5a0cc74c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\console_list_ipc_item.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2113548e5be029c179-00092804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'avatar' => 0,
    'contentImage' => 0,
    'content' => 0,
    'toolbar' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5be02e9a02_62093824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5be02e9a02_62093824')) {function content_548e5be02e9a02_62093824($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><div class="clearfix console_list_ipc_item <?php if ($_smarty_tpl->tpl_vars['url']->value){?>ow_cursor_pointer console_item_with_url<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" >
    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['contentImage']->value)){?>
        <div class="ow_console_invt_img">
            <a href="<?php if (empty($_smarty_tpl->tpl_vars['contentImage']->value['url'])){?>javascript://<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['contentImage']->value['url'];?>
<?php }?>">
                <img <?php if (!empty($_smarty_tpl->tpl_vars['contentImage']->value['title'])){?>alt="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['src'];?>
" />
            </a>
        </div>
    <?php }?>
    <div class="ow_console_invt_cont<?php if (empty($_smarty_tpl->tpl_vars['contentImage']->value)){?> ow_console_invt_no_img<?php }?>">
        <div class="ow_console_invt_txt"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <div class="ow_console_invt_toolbar">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                <a href="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['onclick'];?>
"<?php }?> class="ow_lbutton <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>