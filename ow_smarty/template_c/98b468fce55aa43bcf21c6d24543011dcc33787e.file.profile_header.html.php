<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:50:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\mobile\views\components\profile_header.html" */ ?>
<?php /*%%SmartyHeaderCode:14303548e92ac39d4b5-54125844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b468fce55aa43bcf21c6d24543011dcc33787e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\mobile\\views\\components\\profile_header.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14303548e92ac39d4b5-54125844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'avatarDto' => 0,
    'owner' => 0,
    'isModerator' => 0,
    'showPresence' => 0,
    'isOnline' => 0,
    'activityStamp' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e92ac3d38c6_33894558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e92ac3d38c6_33894558')) {function content_548e92ac3d38c6_33894558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
?><div class="owm_profile_header_wrap owm_std_margin_bottom">
    <div class="owm_profile_header clearfix owm_std_margin_bottom">
        <div class="owm_profile_avatar_wrap" style="position:relative;">
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['user']->value['avatar'],'fullLabel'=>true),$_smarty_tpl);?>

            <div class="ow_avatar_pending_approval" style="<?php if (empty($_smarty_tpl->tpl_vars['avatarDto']->value)||!$_smarty_tpl->tpl_vars['owner']->value&&!$_smarty_tpl->tpl_vars['isModerator']->value||!empty($_smarty_tpl->tpl_vars['avatarDto']->value)&&$_smarty_tpl->tpl_vars['avatarDto']->value->status=='active'){?>display:none;<?php }else{ ?><?php }?>position: absolute; top: 0; right: 0; left: 0; bottom: 0; background-color: rgba(0,0,0,0.6); color: #fff; padding: 8px;"><?php echo smarty_function_text(array('key'=>'base+avatar_pending_approval'),$_smarty_tpl);?>
</div>
        </div>
        <span class="owm_profile_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['displayName'];?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['showPresence']->value){?>
            <div class="owm_profile_online <?php if (!$_smarty_tpl->tpl_vars['isOnline']->value){?>owm_profile_offline<?php }?>"><span><?php echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
: <?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['activityStamp']->value),$_smarty_tpl);?>
</span></div>
        <?php }?>
    </div>
    <div class="owm_profile_btns">
        <?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>

    </div>
</div>
<?php }} ?>