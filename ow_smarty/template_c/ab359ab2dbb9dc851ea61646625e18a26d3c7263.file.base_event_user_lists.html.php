<?php /* Smarty version Smarty-3.1.12, created on 2014-12-16 16:25:29
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\event\views\controllers\base_event_user_lists.html" */ ?>
<?php /*%%SmartyHeaderCode:241165490cd795c0ff8-64651237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab359ab2dbb9dc851ea61646625e18a26d3c7263' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\event\\views\\controllers\\base_event_user_lists.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241165490cd795c0ff8-64651237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authErrorText' => 0,
    'eventId' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5490cd79698e16_19754975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490cd79698e16_19754975')) {function content_5490cd79698e16_19754975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['authErrorText']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['authErrorText']->value;?>

    </div>
<?php }else{ ?>
    <?php echo smarty_function_add_content(array('key'=>'event.content.user_list.top','eventId'=>$_smarty_tpl->tpl_vars['eventId']->value),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->tpl_vars['users']->value;?>

    
    <?php echo smarty_function_add_content(array('key'=>'event.content.user_list.bottom','eventId'=>$_smarty_tpl->tpl_vars['eventId']->value),$_smarty_tpl);?>

<?php }?><?php }} ?>