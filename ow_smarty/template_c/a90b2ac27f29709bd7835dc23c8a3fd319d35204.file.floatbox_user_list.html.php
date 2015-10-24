<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:32:48
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\floatbox_user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:14348548e8ea0ee0712-78178237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90b2ac27f29709bd7835dc23c8a3fd319d35204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\floatbox_user_list.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14348548e8ea0ee0712-78178237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'scroll' => 0,
    'fields' => 0,
    'id' => 0,
    'field' => 0,
    'usernameList' => 0,
    'displayNameList' => 0,
    'avatarList' => 0,
    'userUrl' => 0,
    'username' => 0,
    'name' => 0,
    '_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8ea10107c9_15351732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8ea10107c9_15351732')) {function content_548e8ea10107c9_15351732($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_url_for_route')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    div.ow_floatbox_user_list .ow_floatbox_user_list_row .ow_item_set3 {
        width: 31%;
    }

    .ow_floatbox_user_list_scroll {
        height: 400px;
        overflow-y: auto;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
<div class="ow_user_list ow_floatbox_user_list ow_full<?php if ($_smarty_tpl->tpl_vars['scroll']->value){?> ow_floatbox_user_list_scroll <?php }?>">
    <?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['id']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['id']->iteration=0;
 $_smarty_tpl->tpl_vars['id']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_smarty_tpl->tpl_vars['id']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->iteration++;
 $_smarty_tpl->tpl_vars['id']->index++;
 $_smarty_tpl->tpl_vars['id']->first = $_smarty_tpl->tpl_vars['id']->index === 0;
 $_smarty_tpl->tpl_vars['id']->last = $_smarty_tpl->tpl_vars['id']->iteration === $_smarty_tpl->tpl_vars['id']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['first'] = $_smarty_tpl->tpl_vars['id']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['last'] = $_smarty_tpl->tpl_vars['id']->last;
?>

        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['first']){?>
            <div class="clearfix ow_floatbox_user_list_row <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_fields", null); ob_start(); ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['fields']->value)){?>
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
<br />
                <?php } ?>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->tpl_vars["username"] = new Smarty_variable($_smarty_tpl->tpl_vars['usernameList']->value[$_smarty_tpl->tpl_vars['id']->value], null, 0);?>

        <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable($_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value], null, 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userUrl', null); ob_start(); ?>
            <?php echo smarty_function_url_for_route(array('for'=>"base_user_profile:[username=>".((string)$_smarty_tpl->tpl_vars['username']->value)."]"),$_smarty_tpl);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatarList']->value[$_smarty_tpl->tpl_vars['id']->value],'userUrl'=>$_smarty_tpl->tpl_vars['userUrl']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'displayName'=>$_smarty_tpl->tpl_vars['name']->value,'fields'=>$_smarty_tpl->tpl_vars['_fields']->value,'activity'=>'','set_class'=>'ow_item_set3'),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['iteration']%3==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
            </div>
            <div class="clearfix ow_floatbox_user_list_row <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
          </div>
        <?php }?>

    <?php } ?>

</div>
<?php }else{ ?>
    <center><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</center>
<?php }?><?php }} ?>