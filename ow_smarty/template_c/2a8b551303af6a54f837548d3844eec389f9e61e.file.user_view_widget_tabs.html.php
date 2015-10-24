<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 21:57:10
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\user_view_widget_tabs.html" */ ?>
<?php /*%%SmartyHeaderCode:9399548e7836e49064-49336177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8b551303af6a54f837548d3844eec389f9e61e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\user_view_widget_tabs.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9399548e7836e49064-49336177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownerMode' => 0,
    'adminMode' => 0,
    'superAdminProfile' => 0,
    'menu' => 0,
    'profileEditUrl' => 0,
    'sectionsHtml' => 0,
    'html' => 0,
    'displayName' => 0,
    'avatarUrl' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e7836e66fd7_04453374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e7836e66fd7_04453374')) {function content_548e7836e66fd7_04453374($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
?><?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
            .ow_edit_profile_link
            {
                position: absolute;
                right: 0px;
                top: 0px;
            }
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
            (function(){
                $(".user_profile_data").hover(
                  function(){
                    $("#edit-profile").fadeIn();
                  },
                  function(){
                    $("#edit-profile").fadeOut();
                  }
              );
           }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div style="position:relative;">
    <div class="user_profile_data">

    <div class="user_view_menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
        <div style="display: none;" id="edit-profile" class="ow_edit_profile_link">
            <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['profileEditUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+edit_profile_link'),$_smarty_tpl);?>
</a>
        </div>
    <?php }?>
    

    <?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sectionsHtml']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value){
$_smarty_tpl->tpl_vars['html']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['html']->key;
?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php } ?>
    </div>
    
<?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['displayName']->value,'image'=>$_smarty_tpl->tpl_vars['avatarUrl']->value,'entityType'=>'user','entityId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

</div>

<?php }} ?>