<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:31:32
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\privacy\views\controllers\privacy_index.html" */ ?>
<?php /*%%SmartyHeaderCode:17168548e6424a1af65-98183542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e5492213020a348d1f1b2aca22c1898266f926e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\privacy\\views\\controllers\\privacy_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17168548e6424a1af65-98183542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentMenu' => 0,
    'actionList' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6424ab87e4_14548330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6424ab87e4_14548330')) {function content_548e6424ab87e4_14548330($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_desc')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


tr.ow_privacy td.ow_label{
    width:40%
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'privacy+privacy_description'),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (empty($_smarty_tpl->tpl_vars['actionList']->value)){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

             <?php echo smarty_function_text(array('key'=>"privacy+no_items"),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }else{ ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'privacyForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'privacyForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="ow_table_1 ow_form ow_smallmargin">
                <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['action']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['action']->iteration=0;
 $_smarty_tpl->tpl_vars['action']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->iteration++;
 $_smarty_tpl->tpl_vars['action']->index++;
 $_smarty_tpl->tpl_vars['action']->first = $_smarty_tpl->tpl_vars['action']->index === 0;
 $_smarty_tpl->tpl_vars['action']->last = $_smarty_tpl->tpl_vars['action']->iteration === $_smarty_tpl->tpl_vars['action']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["a"]['first'] = $_smarty_tpl->tpl_vars['action']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["a"]['last'] = $_smarty_tpl->tpl_vars['action']->last;
?>
                        <tr class="ow_privacy <?php echo smarty_function_cycle(array('name'=>'privacy_action','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['a']['first']){?>ow_tr_first<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['a']['last']){?>ow_tr_last<?php }?>">
                            <td class="ow_label">
                                <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_value">
                                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_desc">
                                <?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                        </tr>
                <?php } ?>

            </table>                            
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			   <?php echo smarty_function_text(array('key'=>'privacy+bottom warning'),$_smarty_tpl);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                            
            <div class="clearfix ow_smallmargin">
				<div class="ow_right"><?php echo smarty_function_submit(array('name'=>'privacySubmit'),$_smarty_tpl);?>
</div>
			</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'privacyForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>