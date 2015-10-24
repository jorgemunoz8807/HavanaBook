<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 23:16:30
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\user_search_result.html" */ ?>
<?php /*%%SmartyHeaderCode:4724548e8ace1b6c15-73562585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977a6caace684068efb7bd1f9c7b9f51d86b1b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\user_search_result.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4724548e8ace1b6c15-73562585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'searchUrl' => 0,
    'listType' => 0,
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e8ace1eb800_10012975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e8ace1eb800_10012975')) {function content_548e8ace1eb800_10012975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php }?>


<script language="javascript" type="text/javascript">
    $(function(){
        $(".back_to_search_button").click(
            function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['searchUrl']->value;?>
" }
        );
   });
</script>


<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)){?><?php echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_decorator(array('name'=>"button",'buttonName'=>"back_to_search",'class'=>"back_to_search_button ow_ic_left_arrow",'langLabel'=>"base+user_search_back_to_search"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_add_content(array('key'=>"base.content.user_search.after_back"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
<?php }} ?>