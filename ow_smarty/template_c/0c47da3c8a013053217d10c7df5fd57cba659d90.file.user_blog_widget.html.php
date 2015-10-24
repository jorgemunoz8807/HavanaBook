<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:49:54
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\blogs\views\components\user_blog_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:30075548e6872d65827-50512844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c47da3c8a013053217d10c7df5fd57cba659d90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\blogs\\views\\components\\user_blog_widget.html',
      1 => 1416959680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30075548e6872d65827-50512844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'info' => 0,
    'id' => 0,
    'tb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6872da3de8_08452395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6872da3de8_08452395')) {function content_548e6872da3de8_08452395($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
?><?php if ($_smarty_tpl->tpl_vars['list']->value){?>
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
 $_smarty_tpl->tpl_vars["item"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->index++;
 $_smarty_tpl->tpl_vars["item"]->first = $_smarty_tpl->tpl_vars["item"]->index === 0;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts']['first'] = $_smarty_tpl->tpl_vars["item"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts']['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['dto']->id, null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info', null); ob_start(); ?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['dto']->getPost();?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo smarty_function_decorator(array('name'=>"ic",'titleHref'=>$_smarty_tpl->tpl_vars['item']->value['titleHref'],'title'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['dto']->title),'info'=>$_smarty_tpl->tpl_vars['info']->value,'toolbar'=>$_smarty_tpl->tpl_vars['tb']->value[$_smarty_tpl->tpl_vars['id']->value],'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['posts']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['posts']['last']),$_smarty_tpl);?>

    <?php } ?>
<?php }else{ ?>
    <?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>

<?php }?><?php }} ?>