<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:27:17
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\video\views\components\video_list.html" */ ?>
<?php /*%%SmartyHeaderCode:5001548e6325a80778-33987565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa14661eb9475a1d3778b7a66877b035ccd530e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\video\\views\\components\\video_list.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5001548e6325a80778-33987565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_content' => 0,
    'clips' => 0,
    'cnt' => 0,
    'count' => 0,
    'alt1' => 0,
    'clip' => 0,
    'listType' => 0,
    'userId' => 0,
    'usernames' => 0,
    'displayNames' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6325b40638_09680631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6325b40638_09680631')) {function content_548e6325b40638_09680631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['no_content']->value){?>

	<div class="ow_video_list ow_stdmargin clearfix">
	
	    <?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(true, null, 0);?>
	    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
	
		<?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['clip']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['clip']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value){
$_smarty_tpl->tpl_vars['clip']->_loop = true;
 $_smarty_tpl->tpl_vars['clip']->iteration++;
 $_smarty_tpl->tpl_vars['clip']->last = $_smarty_tpl->tpl_vars['clip']->iteration === $_smarty_tpl->tpl_vars['clip']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c']['last'] = $_smarty_tpl->tpl_vars['clip']->last;
?>
		
	        <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value){?>
	            <?php if ($_smarty_tpl->tpl_vars['alt1']->value){?><?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(false, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_variable(true, null, 0);?><?php }?>
	            <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
	        <?php }?>
	        
	        <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
		
	        <?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['clip']->value['userId'], null, 0);?>
	
	        <?php if ($_smarty_tpl->tpl_vars['cnt']->value==1){?>
	            <div class="clearfix <?php if ($_smarty_tpl->tpl_vars['alt1']->value){?>ow_alt1<?php }else{ ?>ow_alt2<?php }?>">
	        <?php }?> 
	                
		    <?php echo smarty_function_decorator(array('name'=>'video_list_item','data'=>$_smarty_tpl->tpl_vars['clip']->value,'listType'=>$_smarty_tpl->tpl_vars['listType']->value,'username'=>$_smarty_tpl->tpl_vars['usernames']->value[$_smarty_tpl->tpl_vars['userId']->value],'displayName'=>$_smarty_tpl->tpl_vars['displayNames']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

	        
            <?php if ($_smarty_tpl->tpl_vars['cnt']->value==$_smarty_tpl->tpl_vars['count']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['c']['iteration']!=1||$_smarty_tpl->getVariable('smarty')->value['foreach']['c']['last']){?>
                </div>
            <?php }?>
	        
	    <?php } ?>
	    
	</div>
	
    <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

    
<?php }else{ ?>
    <div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['no_content']->value;?>
</div>
<?php }?><?php }} ?>