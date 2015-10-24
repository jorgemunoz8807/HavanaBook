<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 20:46:25
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\hint\views\controllers\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:22171548e67a1816ff6-71890393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb49eb8e57b354dfa64aff1a054fd66ab6ded1d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\hint\\views\\controllers\\admin_index.html',
      1 => 1399527838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22171548e67a1816ff6-71890393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preloaderUrl' => 0,
    'entityType' => 0,
    'requirements' => 0,
    'r' => 0,
    'buttonConfigs' => 0,
    'btn' => 0,
    'coverRequired' => 0,
    'info' => 0,
    'preview' => 0,
    'pluginUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e67a18888f4_90320005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e67a18888f4_90320005')) {function content_548e67a18888f4_90320005($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\havanabook\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_label')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_block_block_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.block_decorator.php';
?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.h-preview-wrap {
    position: relative;
    width: 355px;
    height: 250px;
    margin: 15px auto 0px;
}

.h-left-col {
    width: 440px;
}

.h-right-col {
    width: 400px;
}

html table.h-setting-form td.ow_label {
    width: auto;
    text-align: left;
}

html table.h-setting-form td.ow_value {
    width: 30px;
    text-align: center;
}

html h3.h_preloader {
    background-image: url(<?php echo $_smarty_tpl->tpl_vars['preloaderUrl']->value;?>
);
}

.h-requirements {
    padding-left: 40px;
}

.p-question-c {
    
}

div.h-dnd-legend {
    margin: 5px 10px;
    padding: 5px 10px;
}

.h-leave-review {
    background-repeat: no-repeat;
    background-position: left center;
    padding-left: 20px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var actionConfiguration = function() {
        var out = [];

        $("input[data-key]:checked").each(function() {
            out.push($(this).attr("data-key"));
        });

        return out;
    };
    
    var lineConfiguration = function( line ) {
        var out = {};
        out.key = line.val();
        
        if (out.key == "base-question") {
            out.question = line.parent().find(".p-question-c select").val();
        }
        
        return out;
    };
    
    var infoConfiguration = function() {
        var out = {};
        out.line0 = lineConfiguration($("#info0"));
        out.line1 = lineConfiguration($("#info1"));
        out.line2 = lineConfiguration($("#info2"));
    
        return out;
    };

    var refresh = function() {
        var params = {};

        params.actions = actionConfiguration();
        params.info = infoConfiguration();
        
        params.features = {
            "cover": $("#feature_uheader").get(0).checked
        };
        
        $(".h-requirements").hide();
        
        if ( params.features.cover ) {
             $("#r-cover").show();
        }
        
        $.each(params.actions, function(i, key) {
            $("#r-" + key).show();
        });
        
        $("#h-preview-box .ow_box_cap_body h3").removeClass("ow_ic_lens").addClass("h_preloader");
        OW.loadComponent("HINT_CMP_UserHintPreview", ["<?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
", params], function( html ) {
            $("#h-preview").html(html);

            $("#h-preview-box .ow_box_cap_body h3").removeClass("h_preloader").addClass("ow_ic_lens");
        });
    };

    var timeOut, delayedRefresh = function() {
        if ( timeOut ) window.clearTimeout(timeOut);
        timeOut = window.setTimeout(refresh, 100);
    };

    $(".h-refresher").click(delayedRefresh);
    
    $("#info0, #info1, #info2").change(function() {
        if ( $(this).val() == "base-question" ) {
            $(this).parent().find(".p-question-c").show();
        } else {
            $(this).parent().find(".p-question-c").hide();
            
            refresh();
        }
    });
    
    $(".p-question-c select").change(refresh);

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars["r"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["r"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requirements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["r"]->key => $_smarty_tpl->tpl_vars["r"]->value){
$_smarty_tpl->tpl_vars["r"]->_loop = true;
?>
    <div class="h-requirements ow_anno ow_smallmargin" id="r-<?php echo $_smarty_tpl->tpl_vars['r']->value['key'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['hidden']){?>style="display: none;"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['r']->value['text'];?>

    </div>
<?php } ?>

<div class="clearfix ow_stdmargin">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"HINT_ConfigurationForm")); $_block_repeat=true; echo smarty_block_form(array('name'=>"HINT_ConfigurationForm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_left h-left-col">
        <table class="ow_table_1 ow_form h-setting-form">
            <tr class="ow_tr_first">
                <th class="ow_name ow_txtleft" colspan="2">
                    <span class="ow_section_icon ow_ic_user"><?php echo smarty_function_text(array('key'=>"hint+admin_button_configuration_label"),$_smarty_tpl);?>
</span>
                </th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars["btn"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["btn"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttonConfigs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["btn"]->key => $_smarty_tpl->tpl_vars["btn"]->value){
$_smarty_tpl->tpl_vars["btn"]->_loop = true;
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
">
                    <td class="ow_value"><?php echo smarty_function_input(array('name'=>"action-".((string)$_smarty_tpl->tpl_vars['btn']->value['key'])),$_smarty_tpl);?>
</td>
                    <td class="ow_label">
                        <div class="h-button-label"><?php echo smarty_function_label(array('name'=>"action-".((string)$_smarty_tpl->tpl_vars['btn']->value['key'])),$_smarty_tpl);?>
</div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['requirements']['short'])){?>
                            <div class="h-button-label-requirements ow_small">
                                <?php echo $_smarty_tpl->tpl_vars['btn']->value['requirements']['short'];?>

                            </div>
                        <?php }?>
                    </td>
                </tr>
            <?php } ?>

        </table>
        
        <table class="ow_table_1 ow_form h-setting-form">
            <tr class="ow_tr_first">
                <th class="ow_name ow_txtleft" colspan="2">
                    <span class="ow_section_icon ow_ic_add"><?php echo smarty_function_text(array('key'=>"hint+admin_button_features_label"),$_smarty_tpl);?>
</span>
                </th>
            </tr>

            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
">
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>"uheader_enabled"),$_smarty_tpl);?>
                    
                </td>
                <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>"hint+admin_profile_cover_option"),$_smarty_tpl);?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['coverRequired']->value)){?>
                        <div class="h-button-label-requirements ow_small">
                            <?php echo $_smarty_tpl->tpl_vars['coverRequired']->value;?>

                        </div>
                    <?php }?>
                </td>
            </tr>

        </table>
        
        <table class="ow_table_1 ow_form h-info-form">
            <tr class="ow_tr_first">
                <th class="ow_name ow_txtleft" colspan="2">
                    <span class="ow_section_icon ow_ic_add"><?php echo smarty_function_text(array('key'=>"hint+admin_info_label"),$_smarty_tpl);?>
</span>
                </th>
            </tr>

            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
">
                <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>"hint+admin_info0_label"),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>"info_line0"),$_smarty_tpl);?>
 <span <?php if (empty($_smarty_tpl->tpl_vars['info']->value['line0'])||$_smarty_tpl->tpl_vars['info']->value['line0']['key']!="base-question"){?>style="display: none;"<?php }?> class="p-question-c"><?php echo smarty_function_input(array('name'=>"info_line0_question"),$_smarty_tpl);?>
</span>
                </td>
            </tr>
            
            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
">
                <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>"hint+admin_info1_label"),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>"info_line1"),$_smarty_tpl);?>
 <span <?php if (empty($_smarty_tpl->tpl_vars['info']->value['line1'])||$_smarty_tpl->tpl_vars['info']->value['line1']['key']!="base-question"){?>style="display: none;"<?php }?> class="p-question-c"><?php echo smarty_function_input(array('name'=>"info_line1_question"),$_smarty_tpl);?>
</span>
                </td>
            </tr>
            
            <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1, ow_alt2"),$_smarty_tpl);?>
">
                <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>"hint+admin_info2_label"),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>"info_line2"),$_smarty_tpl);?>
 <span <?php if (empty($_smarty_tpl->tpl_vars['info']->value['line2'])||$_smarty_tpl->tpl_vars['info']->value['line2']['key']!="base-question"){?>style="display: none;"<?php }?> class="p-question-c"><?php echo smarty_function_input(array('name'=>"info_line2_question"),$_smarty_tpl);?>
</span>
                </td>
            </tr>

        </table>

        <div class="clearfix ow_stdmargin"><div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>

        </div></div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"HINT_ConfigurationForm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="ow_right h-right-col" id="h-preview-box">
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','langLabel'=>"hint+admin-hit-preview",'iconClass'=>"ow_ic_lens",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>"hint+admin-hit-preview",'iconClass'=>"ow_ic_lens",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="h-preview-wrap" id="h-preview">
                <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>"hint+admin-hit-preview",'iconClass'=>"ow_ic_lens",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <div class="admin_notification h-dnd-legend">
            <?php echo smarty_function_text(array('key'=>"hint+admin_button_dnd_legend"),$_smarty_tpl);?>

        </div>
    </div>
</div>

<div class="h-leave-review ow_ic_star">
    <?php echo smarty_function_text(array('key'=>"hint+leave_review_suggest",'pluginUrl'=>$_smarty_tpl->tpl_vars['pluginUrl']->value),$_smarty_tpl);?>

</div>

<?php }} ?>