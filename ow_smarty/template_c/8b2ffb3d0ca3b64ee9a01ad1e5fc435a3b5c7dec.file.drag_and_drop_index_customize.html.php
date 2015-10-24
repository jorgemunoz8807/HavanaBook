<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 19:19:01
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\components\drag_and_drop_index_customize.html" */ ?>
<?php /*%%SmartyHeaderCode:7025548e5325817316-14152800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b2ffb3d0ca3b64ee9a01ad1e5fc435a3b5c7dec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\components\\drag_and_drop_index_customize.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7025548e5325817316-14152800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'placeName' => 0,
    'componentList' => 0,
    'component' => 0,
    'disableJs' => 0,
    'adminPluginsUrl' => 0,
    'sidebarPosition' => 0,
    'schemeList' => 0,
    'scheme' => 0,
    'activeScheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e53258bf197_96610328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e53258bf197_96610328')) {function content_548e53258bf197_96610328($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_add_content')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .hidden-placeholder {
        display: none;
    }

    .dd_handle {
       cursor: move;
    }

    .component .action {
           display: none;
    }

    .component .action .dd_delete {
           display: none;
    }

    #place_components .clone .action .dd_delete {
           display: inline-block;
    }

    .component .action {
           display: none;
    }

    #place_components .component {
        float: left;
    }

    .place_section .component {

    }

    .place_section {
       min-height: 60px;
       padding-top: 10px;
    }

	.access_member .ow_dnd_schem_item {
	    background-color: #AAFFAA;
	}

	.access_guest .ow_dnd_schem_item {
	    background-color: #FFAAAA;
	}

    .ow_dragndrop_panel .ow_dnd_schem_item{
       width: 166px;
    }

    .ow_dnd_locked_section {
        opacity: 0.5;
        filter: alpha(opacity=50)
    }

    .ow_dnd_locked_section .ow_dnd_placeholder {
        display: none;
    }

    .add_btn_cont {
        position: absolute;
        right: 0px;
        top: 0px;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_add_content(array('key'=>'base.widget_panel_customize.content.top','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.top'),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="ow_sidebar">
        <div class="ow_highbox place_section sidebar_section" ow_place_section="sidebar">
            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['sidebar'])){?>
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php } ?>
            <?php }?>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


 <div style="display: none" id="fb_settings">
     <div class="settings_title">
        <?php echo smarty_function_text(array('key'=>"base+widgets_fb_setting_box_title"),$_smarty_tpl);?>

     </div>
     <div class="settings_content component_settings" style="min-height: 300px;"></div>
     <div class="settings_controls component_controls">
		<div class="clearfix">
			<div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"dd_save ow_ic_save",'langLabel'=>"base+edit_button"),$_smarty_tpl);?>
</div>
		</div>
     </div>
 </div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div class="ow_center" style="position: relative;">
        <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_finish_customize_btn','class'=>'ow_ic_ok','id'=>"goto_normal_btn"),$_smarty_tpl);?>

        <div class="add_btn_cont">
            <form style="display: inline;">
                <?php if ($_smarty_tpl->tpl_vars['disableJs']->value){?>
                    <input type="hidden" name="disable-js" value="0" />
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_enable_js','class'=>'ow_ic_unlock ow_mild_green'),$_smarty_tpl);?>

                <?php }else{ ?>
                    <input type="hidden" name="disable-js" value="1" />
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_disable_js','class'=>'ow_ic_restrict ow_mild_green'),$_smarty_tpl);?>

                <?php }?>
            </form>
        </div>
    </div>

    <div class="ow_dragndrop_panel">

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <p>
            <?php echo smarty_function_text(array('key'=>"base+widgets_avaliable_description",'pluginsUrl'=>$_smarty_tpl->tpl_vars['adminPluginsUrl']->value),$_smarty_tpl);?>

        </p>
        <p>
            <?php echo smarty_function_text(array('key'=>"base+widgets_avaliable_legend"),$_smarty_tpl);?>

        </p>

        <div class="clearfix">
            <div class="ow_dnd_content_components ow_left clearfix" id="place_components">
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['place']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

                <?php } ?>
           </div>
           <div class="ow_dnd_clonable_components ow_right" id="clonable_components">
                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['clonable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

                <?php } ?>
           </div>
        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<div class="ow_dragndrop_sections ow_stdmargin" id="place_sections">

    <div class="clearfix">


        <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>
            <?php echo Smarty::$_smarty_vars['capture']['sidebar'];?>

        <?php }?>

        <div class="ow_dragndrop_content">

            <div class="ow_highbox place_section top_section" ow_place_section="top">

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

            <div class="ow_dnd_slider" >
                <div class="ow_dnd_slider_handle ow_ic_move_horizontal"></div>
                <?php  $_smarty_tpl->tpl_vars['scheme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schemeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheme']->key => $_smarty_tpl->tpl_vars['scheme']->value){
$_smarty_tpl->tpl_vars['scheme']->_loop = true;
?>
                    <div class="ow_dnd_slider_item clearfix">
                        <div class="ow_dnd_slider_pusher <?php echo $_smarty_tpl->tpl_vars['scheme']->value->leftCssClass;?>
"></div>
                        <div class="ow_dnd_slider_marker<?php if ($_smarty_tpl->tpl_vars['activeScheme']->value['id']==$_smarty_tpl->tpl_vars['scheme']->value->id){?> current<?php }?>"
                           ow_scheme="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->id;?>
" dd_leftclass="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->leftCssClass;?>
" dd_rightclass="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->rightCssClass;?>
" >
                        </div>
                    </div>
                <?php } ?>
            </div>

             <div class="clearfix" style="overflow: hidden;">

                <div class="ow_left ow_highbox place_section ow_column_equal_fix left_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];?>
<?php }?>"  ow_place_section="left">

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

                <div class="ow_right ow_highbox place_section ow_column_equal_fix right_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])){?><?php echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];?>
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

            <div class="ow_highbox place_section bottom_section" ow_place_section="bottom">

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
        <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='right'){?>
	        <?php echo Smarty::$_smarty_vars['capture']['sidebar'];?>

	    <?php }?>

    </div>
</div>

<?php echo smarty_function_add_content(array('key'=>'base.widget_panel_customize.content.bottom','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.bottom'),$_smarty_tpl);?>

<?php }} ?>