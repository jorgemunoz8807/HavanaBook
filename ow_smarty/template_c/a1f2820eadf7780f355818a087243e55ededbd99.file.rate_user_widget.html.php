<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:34:22
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\ocs_topusers\views\components\rate_user_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:25240548e56be261ae5-27942322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f2820eadf7780f355818a087243e55ededbd99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\ocs_topusers\\views\\components\\rate_user_widget.html',
      1 => 1324826318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25240548e56be261ae5-27942322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpId' => 0,
    'ownerMode' => 0,
    'maxRate' => 0,
    'total_score' => 0,
    'list' => 0,
    'user' => 0,
    'userId' => 0,
    'avatars' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e56be2995f2_17553069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56be2995f2_17553069')) {function content_548e56be2995f2_17553069($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_format_date')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.format_date.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .topusers_rated_me .ow_avatar {
        float: left;
    }
    
    .topusers_rated_me .rate_info {
        float: left;
        padding-left: 5px;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box_cap','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box_cap','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box_cap','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="rate_<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
">
    <?php if (!$_smarty_tpl->tpl_vars['ownerMode']->value){?>
    <div class="ow_smallmargin">
	    <span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+your_rate_label'),$_smarty_tpl);?>
</span>
	    <div class="rates_cont clearfix">
	    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['maxRate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
	        <a href="javascript://" class="rate_item" id="<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
_rate_item_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
">&nbsp;</a>
	    <?php endfor; endif; ?>
	    </div>
    </div>
    <?php }?>

	<?php echo $_smarty_tpl->tpl_vars['total_score']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value&&$_smarty_tpl->tpl_vars['list']->value){?>
    <div class="ow_smallmargin ow_outline"><?php echo smarty_function_text(array('key'=>'ocstopusers+rated_me'),$_smarty_tpl);?>
</div>
    <div class="topusers_rated_me">
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <div class="clearfix ow_smallmargin">
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userId', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['user']->value['dto']->id;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value['score']){?><div class="rate_info">
            <?php echo BASE_CTRL_Rate::displayRate(array('avg_rate'=>$_smarty_tpl->tpl_vars['user']->value['score']),$_smarty_tpl);?>
<br />
            <a href="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]['title'];?>
</a><br />
            <?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value['timeStamp']),$_smarty_tpl);?>

        </div><?php }?>
    </div>
    <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['toolbar']->value){?><div class="clearfix"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>
</div><?php }?>
    <?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>