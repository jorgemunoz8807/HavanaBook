<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:22:47
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\console.html" */ ?>
<?php /*%%SmartyHeaderCode:6781548e8c479f27c6-19510264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '881673173d1b56cd2be6f7ef59ab97e802c99717' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\console.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6781548e8c479f27c6-19510264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8c47a04e17_24396563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8c47a04e17_24396563')) {function content_548e8c47a04e17_24396563($_smarty_tpl) {?><header>
<div class="owm_sidebar_right_header_menu">
    <ul class="owm_sidebar_console clearfix">
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->index++;
 $_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['first'] = $_smarty_tpl->tpl_vars['page']->first;
?>
        <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['p']['first']){?>owm_sidebar_console_item_active <?php }?>owm_sidebar_console_item owm_sidebar_console_<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
            <a class="owm_sidebar_console_item_url" href="javascript://" id="console-tab-<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
" data-key="<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
                <span class="owm_sidebar_count"<?php if (!$_smarty_tpl->tpl_vars['page']->value['counter']){?> style="display: none;"<?php }?>>
                    <span class="owm_sidebar_count_txt"><?php if ($_smarty_tpl->tpl_vars['page']->value['counter']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['counter'];?>
<?php }?></span>
                </span>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
</header>

<section class="owm_sidebar_right_cont">
    <div id="console_body"></div>
    <div id="console_preloader"></div>
</section><?php }} ?>