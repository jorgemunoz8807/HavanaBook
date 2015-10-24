<?php /* Smarty version Smarty-3.1.12, created on 2014-12-17 18:35:40
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\forum\views\controllers\customize_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2135554923d7ca29768-58081276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8257533a53347ae27c003a82021d01e42f3673d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\forum\\views\\controllers\\customize_index.html',
      1 => 1416959676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135554923d7ca29768-58081276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sectionGroupList' => 0,
    'section' => 0,
    'group' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54923d7cee4332_46229339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54923d7cee4332_46229339')) {function content_54923d7cee4332_46229339($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_forum .ow_lbutton:hover {
    cursor: default;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_box ow_highbox ow_smallmargin ow_center">
    <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_finish_customize_btn','id'=>'finish_customizing','class'=>'ow_ic_lock'),$_smarty_tpl);?>

</div>

<div class="forum_sections">

<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sectionGroupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
<table class="ow_table_1 ow_stdmargin ow_forum forum_section" id="section_<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
">
    <tr class="forum_section_tr ow_tr_first">
        <th class="ow_name"><a href="<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value['sectionName'];?>
</a></th>
        <th class="ow_topics"><?php echo smarty_function_text(array('key'=>'forum+topics'),$_smarty_tpl);?>
</th>
        <th class="ow_replies"><?php echo smarty_function_text(array('key'=>'forum+replies'),$_smarty_tpl);?>
</th>
        <th class="ow_action">
            <div class="ow_section_acts" style="display: none">
                <a class="ow_lbutton section_edit" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+edit_section'),$_smarty_tpl);?>
</a>&nbsp;<a class="ow_lbutton ow_red section_delete" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+delete_section'),$_smarty_tpl);?>
</a>
            </div>
        </th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['groups']['last'] = $_smarty_tpl->tpl_vars['group']->last;
?>
    <tr class="forum_group <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['groups']['last']){?>ow_tr_last<?php }?>" id="group_<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
">
        <td class="ow_name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['groupUrl'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</b> </a>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['group']->value['description'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['isPrivate']){?>
                <span class="ow_lbutton ow_green"><?php echo smarty_function_text(array('key'=>'forum+is_private'),$_smarty_tpl);?>
</span> 
                <span class="ow_small ow_remark"><?php echo smarty_function_text(array('key'=>'forum+visible_to'),$_smarty_tpl);?>
: <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['r']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['r']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->iteration++;
 $_smarty_tpl->tpl_vars['r']->last = $_smarty_tpl->tpl_vars['r']->iteration === $_smarty_tpl->tpl_vars['r']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['r']['last'] = $_smarty_tpl->tpl_vars['r']->last;
?><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['r']['last']){?>, <?php }?><?php } ?></span>
            <?php }?>
        </td>
        <td class="ow_topics"><?php echo $_smarty_tpl->tpl_vars['group']->value['topicCount'];?>
</td>
        <td class="ow_replies"><?php echo $_smarty_tpl->tpl_vars['group']->value['replyCount'];?>
</td>
        <td class="ow_action">
            <div class="ow_group_acts" style="display: none;">
                <a class="ow_lbutton group_edit" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+edit_group'),$_smarty_tpl);?>
</a>&nbsp;<a class="ow_lbutton ow_red group_delete" href="javascript://"><?php echo smarty_function_text(array('key'=>'forum+delete_group'),$_smarty_tpl);?>
</a>
            </div>
        </td>
    </tr>
    <?php } ?>
    <tr class="forum_group no_forum_group" <?php if ($_smarty_tpl->tpl_vars['section']->value['groups']){?>style="display: none;"<?php }?>>
        <td colspan="4"><?php echo smarty_function_text(array('key'=>'forum+no_group'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<?php } ?>

</div>

<div class="ow_stdmargin ow_txtright">
    <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'forum+add_new_forum_btn','id'=>'add_forum_btn','class'=>'ow_ic_add'),$_smarty_tpl);?>

</div>


<div style="display: none">
<div class="add_forum_form" id="add_forum_form">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-forum-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-forum-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_full">
		<tr class="ow_alt2">
			<td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+add_new_forum_name'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'group-name'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'group-name'),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_alt1">
			<td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+add_new_forum_section'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'section'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'section'),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_alt2">
			<td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+add_new_forum_description'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_alt1">
          <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+is_private'),$_smarty_tpl);?>
</td>
          <td class="ow_value"><?php echo smarty_function_input(array('name'=>'is-private'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt2 private_forum_roles" style="display: none;">
          <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+visible_to'),$_smarty_tpl);?>
</td>
          <td class="ow_value"><?php echo smarty_function_input(array('name'=>'roles'),$_smarty_tpl);?>
</td>
        </tr>
		</table>
		<div class="clearfix">
            <div class="ow_right">
        	<?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_positive'),$_smarty_tpl);?>

        	</div>
        </div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-forum-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</div>


<div style="display: none">
<div class="edit_section_form" id="edit_section_form">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-section-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-section-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_full">
		<tr class="ow_alt2">
            <td class="ow_label"><span class="ow_nowrap"><?php echo smarty_function_text(array('key'=>'forum+edit_section_name'),$_smarty_tpl);?>
</span></td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'section-name'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'section-name'),$_smarty_tpl);?>

				<?php echo smarty_function_input(array('name'=>'section-id'),$_smarty_tpl);?>

			</td>
		</tr>			
		</table>
		<div class="clearfix">
            <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_positive'),$_smarty_tpl);?>

            </div>
        </div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-section-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</div>


<div style="display: none;">
<div class="edit_group_form"  id="edit_group_form">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-group-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-group-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_full">
		<tr class="ow_alt2">
			<td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+edit_group_name'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'group-name'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'group-name'),$_smarty_tpl);?>

				<?php echo smarty_function_input(array('name'=>'group-id'),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_alt1">
			<td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+edit_group_description'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>

			</td>
		</tr>
		<tr class="ow_alt2">
		  <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+is_private'),$_smarty_tpl);?>
</td>
		  <td class="ow_value"><?php echo smarty_function_input(array('name'=>'is-private'),$_smarty_tpl);?>
</td>
		</tr>
		<tr class="ow_alt1 private_forum_roles">
		  <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+visible_to'),$_smarty_tpl);?>
</td>
		  <td class="ow_value"><?php echo smarty_function_input(array('name'=>'roles'),$_smarty_tpl);?>
</td>
		</tr>
		</table>
		<div class="clearfix">
            <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_positive'),$_smarty_tpl);?>

            </div>
        </div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-group-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
</div><?php }} ?>