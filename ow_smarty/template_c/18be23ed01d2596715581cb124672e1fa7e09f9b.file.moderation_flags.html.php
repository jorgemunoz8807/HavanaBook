<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 20:12:41
         compiled from "C:\xampp\htdocs\havanabook\ow_system_plugins\base\views\controllers\moderation_flags.html" */ ?>
<?php /*%%SmartyHeaderCode:22260548fb139902665-95178430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18be23ed01d2596715581cb124672e1fa7e09f9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_system_plugins\\base\\views\\controllers\\moderation_flags.html',
      1 => 1416959674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22260548fb139902665-95178430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'uniqId' => 0,
    'contentMenu' => 0,
    'responderUrl' => 0,
    'group' => 0,
    'flags' => 0,
    'item' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fb139b035b6_61996357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fb139b035b6_61996357')) {function content_548fb139b035b6_61996357($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><script type="text/javascript">

function MODERATION_FlagsInit( uniqId, options )
{
    var c = $("#" + uniqId);
    
    $("[data-checkall]", c).click(function() {
        $("[data-item]", c).prop("checked", this.checked);
    });

    $("[data-command]", c).click(function() {
        var node = $(this),
            command = node.data("command"),
            contentLabel = node.data("content"),
            action = command.split(".")[0],
            itemKey = node.data("item"),
            form = $("#" + uniqId + "-form");
            
        var count = c.find("[data-item]:checked").length;
        
        if ( !contentLabel && !count ) {
            alert(OW.getLanguageText("base", "moderation_no_items_warning"));
            
            return false;
        }
        
        var deleteConfirmMsg = contentLabel
            ? OW.getLanguageText("base", "moderation_delete_confirmation", { "content": contentLabel })
            : OW.getLanguageText("base", "moderation_delete_multiple_confirmation", { "content": options.groupLabel, "count": count });

        if ( action === "delete" && !confirm(deleteConfirmMsg) ) {
            return false;
        }

        $(form.get(0)["command"]).val(command);
        $(form.get(0)["item"]).val(itemKey);

        form.submit();
        
        return false;
    });
    
    
    
    (function() {
        
        var OFFSET = 40;
        var stickers = [];
        
        function stick( sticker ) {
            sticker.addClass("ow_moderation_sticked");
        };
        
        function unstick( sticker ) {
            sticker.removeClass("ow_moderation_sticked");
        };
        
        $(document).on("scroll", function() {
            var top = $(document).scrollTop();
            $.each(stickers, function(i, sticker) {
                if ( sticker.top - top <= OFFSET ) {
                    stick(sticker.el);
                } else {
                    unstick(sticker.el);
                }
            });
        });
        
        $(".ow_moderation_sticky").each(function() {
            var sticker = {};
            sticker.el = $(this);
            sticker.top = sticker.el.position().top;
                        
            stickers.push(sticker);
        });
    })();
}

</script>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_moderation_sticked {
    position: fixed;
    top: 40px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<div class="ow_moderation_wrap clearfix" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <div class="ow_moderation_sticky">
        <div class="ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

        </div>
        <table class="ow_table_2">
            <tbody>
            <tr class="ow_tr_first ow_tr_last ow_alt1">
                <td class="ow_txtleft" style="border-right: none;">
                    <input type="checkbox" data-checkall="">
                </td>
                <td class="ow_txtleft" style="border-right: none;">
                     <span><?php echo smarty_function_text(array('key'=>'base+check_all_to'),$_smarty_tpl);?>
</span>
                </td>
                <td>
                    <div class="ow_moderation_label_bnts ow_left">
                        <a data-command="unflag.multiple" class="ow_lbutton ow_smallmargin ow_green" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+unflag'),$_smarty_tpl);?>
</a>
                        <br>
                        <a data-command="delete.multiple" class="ow_lbutton ow_red" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</a>
                    </div>
                </td>
            </tr>
        </tbody></table>
    </div>
    <div class="ow_left" style="width: 100%;">

        <form action="<?php echo $_smarty_tpl->tpl_vars['responderUrl']->value;?>
" method="post" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-form">
            <input type="hidden" name="command" />
            <input type="hidden" name="item" />
            
        <table class="ow_table_2 ow_margin ow_moderation_table">
        <tbody>
            <tr class="ow_tr_first">
                <th><?php echo $_smarty_tpl->tpl_vars['group']->value['label'];?>
</th>
                <th><?php echo smarty_function_text(array('key'=>"base+moderation_reporter"),$_smarty_tpl);?>
</th>
                <th><?php echo smarty_function_text(array('key'=>"base+moderation_reason"),$_smarty_tpl);?>
</th>
                <th><?php echo smarty_function_text(array('key'=>"base+moderation_action"),$_smarty_tpl);?>
</th>
            </tr>
                
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
            <tr class="ow_alt1">
                <td>
                    <div class="clearfix ow_moderation_content_wrap">
                        <input type="checkbox" class="ow_left" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
" name="items[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
">
                       <div class="ow_user_list_picture">
                           <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['item']->value['avatar']),$_smarty_tpl);?>

                        </div>
                        <div class="ow_user_list_data">
                            <div class="ow_moderation_string ow_txtleft ow_small ow_smallmargin">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

                            </div>
                            <div class="ow_moderation_content ow_txtleft">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                            </div>      

                        </div>
                    </div>
                    <div class="ow_newsfeed_btns ow_small ow_remark clearfix">
                        <span class="ow_nowrap create_time ow_newsfeed_date ow_small" style="line-height: 14px;"><?php echo smarty_function_text(array('key'=>"base+flagged_time",'time'=>$_smarty_tpl->tpl_vars['item']->value['time']),$_smarty_tpl);?>
</span>
                    </div>
                </td>
                <td>
                    <div class="ow_small">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['reporter']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['reporter']['name'];?>
</b></a>
                    </div>
                </td>
                <td>
                    <div class="ow_small">
                        <?php echo smarty_function_text(array('key'=>"base+flag_".((string)$_smarty_tpl->tpl_vars['item']->value['reason'])),$_smarty_tpl);?>

                    </div>
                </td>
                <td class="ow_small">
                    <div class="ow_moderation_label_bnts">
                        <a data-command="unflag.single" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentLabel'];?>
" class="ow_lbutton ow_smallmargin ow_green" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+unflag'),$_smarty_tpl);?>
</a>
                        <br />
                        <a data-command="delete.single" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['entityId'];?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentLabel'];?>
" class="ow_lbutton ow_red" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
            
        </form>

        <div class="ow_smallmargin">
            <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

        </div>

    </div>
</div><?php }} ?>