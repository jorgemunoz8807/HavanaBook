<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:18:40
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\drag_and_drop_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1495548e53103f4553-67328551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26efa87c5fe93973d9d4392147bd4508fb3767f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\drag_and_drop_index.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495548e53103f4553-67328551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'placeName' => 0,
    'allowCustomize' => 0,
    'componentList' => 0,
    'component' => 0,
    'activeScheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e531045d5f3_24746198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e531045d5f3_24746198')) {function content_548e531045d5f3_24746198($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    DND_InterfaceFix.fix('.place_section');
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    #place_components .component {
        float: left;
    }

    .configurable_component .ow_box_icons {
        float: right;
        padding-top: 6px;
    }

    .configurable_component h3 {
        float: left;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_add_content(array('key'=>'base.widget_panel.content.top','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`.content.top'),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['allowCustomize']->value){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box','type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box','type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ow_center">
                <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_customize_btn','class'=>'ow_ic_gear_wheel','id'=>"goto_customize_btn"),$_smarty_tpl);?>

            </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box','type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="ow_dragndrop_sections ow_stdmargin" id="place_sections">

    <div class="clearfix">
        <div class="ow_dragndrop_content">

            <div class="place_section">

                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['top'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>

            </div>

            <div class="clearfix" style="overflow: hidden;">

                <div class="ow_left place_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>">

                    <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['left'])){?>
                        <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                        <?php } ?>
                    <?php }?>

                </div>

                <div class="ow_right place_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
<?php }?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
<?php }?>"  ow_place_section="right">

                    <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['right'])){?>
                        <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                        <?php } ?>
                    <?php }?>

                </div>

             </div>

            <div class="place_section">

                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'])){?>
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php } ?>
                <?php }?>

            </div>

        </div>
        <?php echo smarty_function_add_content(array('key'=>'index.add_content_bottom'),$_smarty_tpl);?>

    </div>
</div>

<?php echo smarty_function_add_content(array('key'=>'base.widget_panel.content.bottom','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`.content.bottom'),$_smarty_tpl);?>

<?php }} ?>