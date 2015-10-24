<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\context_action.html" */ ?>
<?php /*%%SmartyHeaderCode:10665548e92aca407d4-32680371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2449391df5b535b0725ec0666f50e040b57af7e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\context_action.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10665548e92aca407d4-32680371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'label' => 0,
    'buttons' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92aca51205_57698222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92aca51205_57698222')) {function content_548e92aca51205_57698222($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ca-dropdown {
        display: none;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="owm_context_action ca-dropdown-wrap" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <a class="owm_context_arr_down ca-dropdown-btn" href="javascript://">
        <?php if (!empty($_smarty_tpl->tpl_vars['label']->value)){?>
            <span class="owm_context_arr_label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</span>
        <?php }?>
        <span class="owm_context_arr_c"></span>
    </a>
        
    <div class="owm_context_action_wrap owm_context_pos_right ca-dropdown">
        <div class="owm_context_action_body">
            <ul class="owm_context_action_list owm_newsfeed_context_list">
                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                    <li>
                        <a <?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
>
                            <span class="owm_context_action_list_item_c"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div><?php }} ?>