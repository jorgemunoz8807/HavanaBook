<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:44:09
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\quick_links_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:26483548e59098b8be8-39155851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13012c29ffba926ffa6d88edf417c5f0c9ee531c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\quick_links_widget.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26483548e59098b8be8-39155851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e59098e39e4_39953915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e59098e39e4_39953915')) {function content_548e59098e39e4_39953915($_smarty_tpl) {?><table class="ow_nomargin" width="100%">
	<tbody>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td class="ow_label"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></td>
			<td class="ow_txtright"><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active_count'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['active_count_url'];?>
"><span class="ow_lbutton ow_green"><?php echo $_smarty_tpl->tpl_vars['item']->value['active_count'];?>
</span></a><?php }?></td>
			<td class="ow_txtright"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['count_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</a></td>
		</tr>
        <?php } ?>
	</tbody>
</table><?php }} ?>