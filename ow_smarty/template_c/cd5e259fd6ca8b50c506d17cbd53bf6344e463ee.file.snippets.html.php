<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:21
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\snippets\views\components\snippets.html" */ ?>
<?php /*%%SmartyHeaderCode:11367548e56bde9d603-74652697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd5e259fd6ca8b50c506d17cbd53bf6344e463ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\snippets\\views\\components\\snippets.html',
      1 => 1405596020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11367548e56bde9d603-74652697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'snippets' => 0,
    'snippet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56bdee2ed9_39639130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56bdee2ed9_39639130')) {function content_548e56bdee2ed9_39639130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><div class="s-snippets-wrap clearfix" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['snippets']->value)){?>
    <div class="s-snippets-clip" data-outlet="clip">
        <div class="s-snippets" data-outlet="list">
            <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value){
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                <div class="s-snippet-wrap" data-outlet="item">
                    <?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>

                    <div class="s-snippet-more-overlay" data-outlet="more">
                        <div class="s-snippet-more-arrow-wrap" data-outlet="arrows-wrap">
                            <div class="s-snippet-more-arrow s-arrows-icons"></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        
    </div>
    <?php }else{ ?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"snippets+no_items"),$_smarty_tpl);?>
</div>
    <?php }?>
</div><?php }} ?>