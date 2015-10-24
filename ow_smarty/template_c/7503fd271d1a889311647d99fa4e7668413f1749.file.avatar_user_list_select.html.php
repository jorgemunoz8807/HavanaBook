<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 02:46:04
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\avatar_user_list_select.html" */ ?>
<?php /*%%SmartyHeaderCode:3186548ebbecde9823-11563966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7503fd271d1a889311647d99fa4e7668413f1749' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\avatar_user_list_select.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3186548ebbecde9823-11563966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contexId' => 0,
    'users' => 0,
    'user' => 0,
    'avatars' => 0,
    'langs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548ebbece80214_76251583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ebbece80214_76251583')) {function content_548ebbece80214_76251583($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.avatar_select_list{
    height:320px;
    text-align:left;
    padding:0 8px;
}

.avatar_select_list .ow_user_list_picture{
    height:45px;
}

.avatar_select_list .ow_user_list_item{
    cursor:pointer;
}

.avatar_select_list .ow_item_set2{
    width:48%;
}

.avatar_select_list .asl_users{
    height:270px;
    overflow-y:scroll;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_lp_avatars avatar_select_list" id="<?php echo $_smarty_tpl->tpl_vars['contexId']->value;?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)){?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list_select'),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
    <div class="asl_users">
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['user']->iteration=0;
 $_smarty_tpl->tpl_vars['user']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user']->iteration++;
 $_smarty_tpl->tpl_vars['user']->index++;
 $_smarty_tpl->tpl_vars['user']->first = $_smarty_tpl->tpl_vars['user']->index === 0;
 $_smarty_tpl->tpl_vars['user']->last = $_smarty_tpl->tpl_vars['user']->iteration === $_smarty_tpl->tpl_vars['user']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['first'] = $_smarty_tpl->tpl_vars['user']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user_list']['last'] = $_smarty_tpl->tpl_vars['user']->last;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['first']){?>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <?php }?>
        <?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['user']->value['id']],'username'=>$_smarty_tpl->tpl_vars['user']->value['username'],'displayName'=>$_smarty_tpl->tpl_vars['user']->value['title'],'noUserLink'=>1,'contId'=>$_smarty_tpl->tpl_vars['user']->value['linkId'],'set_class'=>'ow_item_set2'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['iteration']%2==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
            </div>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['user_list']['last']){?>
          </div>
        <?php }?>
        <?php } ?>
    </div>
    <div class="ow_center" style="padding: 8px;">
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])){?><input type="hidden" class="count_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['countLabel'];?>
" /><?php }?>
    <input type="hidden" class="button_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['buttonLabel'];?>
" />
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])){?><div class="count_label"><?php echo $_smarty_tpl->tpl_vars['langs']->value['startCountLabel'];?>
</div><?php }?>
    <div class="submit_cont"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','label'=>$_smarty_tpl->tpl_vars['langs']->value['startButtonLabel'],'class'=>'submit'),$_smarty_tpl);?>
</div></div>
    </div>
    <?php }?>
</div><?php }} ?>