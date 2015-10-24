<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:19:21
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\hint\views\components\user_hint.html" */ ?>
<?php /*%%SmartyHeaderCode:16862548e53395b0de2-31657588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d3348fdd5a987db976ac9109f474544c7c0de8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\hint\\views\\components\\user_hint.html',
      1 => 1399527838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16862548e53395b0de2-31657588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqId' => 0,
    'user' => 0,
    'cover' => 0,
    'info' => 0,
    'buttons' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e5339616c33_23647792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5339616c33_23647792')) {function content_548e5339616c33_23647792($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_online_now')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.online_now.php';
?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


#<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
 .uhint-avatar-image
{
    background-image: url(<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
);
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="uhint-wrap <?php if (empty($_smarty_tpl->tpl_vars['cover']->value)){?>uhint-no-cover<?php }else{ ?>uhint-has-cover<?php }?>">
    <div class="uhint-body">

        <div class="uhb-head ow_border" <?php if (!empty($_smarty_tpl->tpl_vars['cover']->value)){?>style="height: <?php echo $_smarty_tpl->tpl_vars['cover']->value['height'];?>
px;"<?php }?>>

            <?php if (!empty($_smarty_tpl->tpl_vars['cover']->value)){?>
                <img class="uhint-cover-img" src="<?php echo $_smarty_tpl->tpl_vars['cover']->value['url'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['cover']->value['imageCss'];?>
" />
            <?php }?>

            

            <div class="uhb-head-text-wrap <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['line0'])){?>uhbht-extra-line<?php }?>">
                <div class="uhb-head-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
" class="uhbht-title">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value['displayName'];?>

                    </a>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['line0'])){?>
                        <div class="uhbht-info-line hb-info-line0 ow_small <?php if (empty($_smarty_tpl->tpl_vars['cover']->value)){?>ow_remark<?php }?>"><?php echo $_smarty_tpl->tpl_vars['info']->value['line0'];?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="uhb-info clearfix">

            <div class="uhint-avatar ow_avatar_console ow_bg_color ow_border">
                <div class="uhint-avatar-image">
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value['role']['label'])){?>
                        <span class="ow_avatar_label"<?php if (isset($_smarty_tpl->tpl_vars['user']->value['role']['custom'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['user']->value['role']['custom'];?>
"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['user']->value['role']['label'];?>

                        </span>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['isOnline']){?><?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
<?php }?>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['fgift'])){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['fgift']['url'];?>
" class="hint-fgift">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['fgift']['src'];?>
" />
                        </a>
                    <?php }?>
                </div>
            </div>
            <div class="hb-info-content">
                <div class="hb-info-line hb-info-line1">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['line1'];?>

                </div>
                <div class="hb-info-line hb-info-line2"><?php echo $_smarty_tpl->tpl_vars['info']->value['line2'];?>
</div>
            </div>
        </div>

    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['buttons']->value)){?>
    <div class="uhint-foot ow_border">
        <ul class="ow_bl clearfix">
            <?php  $_smarty_tpl->tpl_vars["button"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["button"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["button"]->key => $_smarty_tpl->tpl_vars["button"]->value){
$_smarty_tpl->tpl_vars["button"]->_loop = true;
?>
                <li><a <?php echo $_smarty_tpl->tpl_vars['button']->value['attrs'];?>
><?php echo $_smarty_tpl->tpl_vars['button']->value['label'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>
</div><?php }} ?>