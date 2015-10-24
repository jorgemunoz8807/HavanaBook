<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 09:25:00
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\comments.html" */ ?>
<?php /*%%SmartyHeaderCode:13724548f196c2cd2c5-50030426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2ba0563c2d05136d4d55a3a4277f1c113f4919' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\comments.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13724548f196c2cd2c5-50030426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpContext' => 0,
    'commentList' => 0,
    'formCmp' => 0,
    'form' => 0,
    'authErrorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548f196c2d8c62_24204834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f196c2d8c62_24204834')) {function content_548f196c2d8c62_24204834($_smarty_tpl) {?><div class="owm_newsfeed_comments" id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <a name="comments"></a>
    <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['formCmp']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    <?php }else{ ?>
    <div class="owm_nocontent"><?php echo $_smarty_tpl->tpl_vars['authErrorMessage']->value;?>
</div>
    <?php }?>
</div>				            	<?php }} ?>