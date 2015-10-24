<?php /* Smarty version Smarty-3.1.12, created on 2014-12-17 00:52:38
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\admin\views\controllers\users_index.html" */ ?>
<?php /*%%SmartyHeaderCode:3390549144564675a8-03671344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0046c636fdfde1a4120ec1b53ab378be98171406' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\admin\\views\\controllers\\users_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3390549144564675a8-03671344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totalUsers' => 0,
    'searchQ' => 0,
    'question' => 0,
    'currentSearch' => 0,
    'label' => 0,
    'menu' => 0,
    'userList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5491445651a801_95101486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5491445651a801_95101486')) {function content_5491445651a801_95101486($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



    $("#invite_btn").click(function(){
	    var $form_content = $("#invite_members");
	
	    window.invite_members_floatbox = new OW_FloatBox({
	        $title: OW.getLanguageText('admin', 'invite_members_cap_label'),
	        $contents: $form_content,
	        icon_class: 'ow_ic_add',
	        width: 550
	    });
    });
    
    $("#username-search-input").focus();


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_hidden">
    <div id="invite_members" class="ow_center">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'invite-members')); $_block_repeat=true; echo smarty_block_form(array('name'=>'invite-members'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_input(array('name'=>'emails'),$_smarty_tpl);?>

        <div style="text-align: center;padding: 5px;"><?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'invite-members'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>

<?php echo smarty_function_text(array('key'=>'admin+total_users','count'=>$_smarty_tpl->tpl_vars['totalUsers']->value),$_smarty_tpl);?>


<div class="ow_stdmargin clearfix">
	<div class="ow_right ow_superwide ow_txtright">
        <form method="get">
		<div class="ow_box ow_admin_search_box ow_smallmargin">
	       <?php echo smarty_function_text(array('key'=>'admin+search_by'),$_smarty_tpl);?>

	       <select name="search_by">
	           <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['searchQ']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['question']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
	           <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['currentSearch']->value['question']==$_smarty_tpl->tpl_vars['question']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
	           <?php } ?>
	       </select> :
	       <input type="text" name="search" id="username-search-input" style="width: 280px" value="<?php echo $_smarty_tpl->tpl_vars['currentSearch']->value['value'];?>
" />
	       <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'admin+go'),$_smarty_tpl);?>

	    </div>
	    
	    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','langLabel'=>'admin+invite_members_button_label','id'=>'invite_btn'),$_smarty_tpl);?>

	    </form>	
	</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

<?php }} ?>