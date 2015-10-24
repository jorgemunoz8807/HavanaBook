<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:01:59
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\virtual_gifts\views\components\send_gift.html" */ ?>
<?php /*%%SmartyHeaderCode:20934548e6b477c4966-43567004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5fcd127cd6b570a3da3cfc9cc18f96b1729d76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\virtual_gifts\\views\\components\\send_gift.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20934548e6b477c4966-43567004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themeImagesUrl' => 0,
    'authMessage' => 0,
    'showPrice' => 0,
    'balance' => 0,
    'catSetup' => 0,
    'menu' => 0,
    'tpls' => 0,
    'id' => 0,
    'cat' => 0,
    'tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e6b4784a4e2_61919896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6b4784a4e2_61919896')) {function content_548e6b4784a4e2_61919896($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_error')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
    .ow_gift_templates {
        position: relative;
    }
    
    .ow_gift_templates .ow_gift_wrapper {
        margin: 0px 0px 4px 4px;
        cursor: pointer;
        padding-left: 5px;
    }
    
    .ow_gift_templates .ow_gift_checked {
        position: absolute;
        top: 8px;
        left: 8px;
        width: 20px;
        height: 20px;
        background-image: url(<?php echo $_smarty_tpl->tpl_vars['themeImagesUrl']->value;?>
ic_ok.png);
        background-repeat: no-repeat;
    }
    
    .ow_gift_wrapper {
        height: 110px;
    }
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
  
    var $tpl_list = $(".ow_gift_templates .ow_gift_wrapper");
    var $hidden_input = $("input[name=tplId]");
    
    $tpl_list.hover(
        function(){
            $(this).addClass("ow_alt1");
        },
        function(){
            $(this).removeClass("ow_alt1");
        }
    );
    
    $tpl_list.click(function(){
        $tpl_list.removeClass('ow_alt2');
        $tpl_list.find(".ow_gift_checked").remove();
        $(this).append('<div class="ow_gift_checked"></div>');
        $(this).addClass('ow_alt2');
        $hidden_input.val($(this).find(".ow_gift_helper").attr("rel"));
    });
    
    var $tabs = $('a[href^=js-call]', '#ow_gift_category_menu');
    $tabs.click(function(){
        var $this = $(this);
        $tabs.parent().removeClass('active');
        $this.parent().addClass('active');
        $('.ow_gift_category').hide();
        $('#gift_cat_' + $this.data('tab_content')).show();
         
    }).each(function(){
        var command = this.href.split(':');
        $(this).data('tab_content', command[1]);
        $(this).attr('href', 'javascript://');
    });
    
  
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="virtualgifts_send_gift_cmp">
<?php if (empty($_smarty_tpl->tpl_vars['authMessage']->value)){?>
<?php if ($_smarty_tpl->tpl_vars['showPrice']->value){?><div class="ow_center ow_smallmargin ow_small"><?php echo smarty_function_text(array('key'=>'usercredits+credits_balance'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</div><?php }?>

<div id="ow_gift_category_menu"><?php if ($_smarty_tpl->tpl_vars['catSetup']->value&&$_smarty_tpl->tpl_vars['menu']->value){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'send-gift-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'send-gift-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_gift_templates clearfix">
    <?php if ($_smarty_tpl->tpl_vars['catSetup']->value){?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cat']->key;
 $_smarty_tpl->tpl_vars['cat']->index++;
 $_smarty_tpl->tpl_vars['cat']->first = $_smarty_tpl->tpl_vars['cat']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c']['first'] = $_smarty_tpl->tpl_vars['cat']->first;
?>
        <div id="gift_cat_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="clearfix ow_smallmargin ow_gift_category"<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['c']['first']){?> style="display: none;"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['tpls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
            <div class="ow_gift_wrapper">
                <div class="ow_gift_holder"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['imageUrl'];?>
" />
                <?php if ($_smarty_tpl->tpl_vars['showPrice']->value&&$_smarty_tpl->tpl_vars['tpl']->value['price']){?><div class="ow_small"><b><?php echo $_smarty_tpl->tpl_vars['tpl']->value['price'];?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</div><?php }?></div>
                <div class="ow_gift_helper" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"></div>
            </div>
        <?php } ?>
        </div>
    <?php } ?>
    <?php }else{ ?>
		<?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value){
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
		<div class="ow_gift_wrapper">
		    <div class="ow_gift_holder"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['imageUrl'];?>
" />
		    <?php if ($_smarty_tpl->tpl_vars['showPrice']->value&&$_smarty_tpl->tpl_vars['tpl']->value['price']){?><div class="ow_small"><b><?php echo $_smarty_tpl->tpl_vars['tpl']->value['price'];?>
</b> <?php echo smarty_function_text(array('key'=>'usercredits+credits'),$_smarty_tpl);?>
</div><?php }?></div>
		    <div class="ow_gift_helper" rel="<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"></div>
		</div>
		<?php } ?>
	<?php }?>
</div>
<?php echo smarty_function_error(array('name'=>'tplId'),$_smarty_tpl);?>

<table class="ow_table_3 ow_stdmargin">
<tr class="ow_tr_first">
    <td class="ow_label" style="width: 15%"><?php echo smarty_function_text(array('key'=>'virtualgifts+message'),$_smarty_tpl);?>
</td>
    <td class="ow_value"><?php echo smarty_function_input(array('name'=>'message','class'=>'ow_gift_message_area'),$_smarty_tpl);?>
</td>
</tr>
<tr class="ow_tr_last">
    <td class="ow_label"></td>
	<td class="ow_value" style="border: none"><?php echo smarty_function_input(array('name'=>'isPrivate'),$_smarty_tpl);?>
 <?php echo smarty_function_label(array('name'=>'isPrivate'),$_smarty_tpl);?>
</td>
</tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_ic_mail ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'send-gift-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>
    <div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMessage']->value;?>
</div>
<?php }?>
</div><?php }} ?>