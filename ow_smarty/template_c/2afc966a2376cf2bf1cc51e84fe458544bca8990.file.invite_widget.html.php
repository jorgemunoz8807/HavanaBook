<?php /* Smarty version Smarty-3.1.12, created on 2014-12-14 22:59:18
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\groups\views\components\invite_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:4980548e86c6b820c9-33862848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2afc966a2376cf2bf1cc51e84fe458544bca8990' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\groups\\views\\components\\invite_widget.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4980548e86c6b820c9-33862848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548e86c6bd3907_31460612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e86c6bd3907_31460612')) {function content_548e86c6bd3907_31460612($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.groups-invite-link
{
    text-align:center;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script type="text/javascript">

function GROUPS_InitInviteButton( options )
{
    var floatBox, userIdList = options.userList;

    $('#GROUPS_InviteLink').click(
        function()
        {
            floatBox = OW.ajaxFloatBox('BASE_CMP_AvatarUserListSelect', [userIdList],
            {
                width:600,
                height:350,
                iconClass: 'ow_ic_user',
                title: options.floatBoxTitle
            });
        }
    );

    OW.bind('base.avatar_user_list_select',
        function(list)
        {
            floatBox.close();

            $.ajax({
                type: 'POST',
                url: options.inviteResponder,
                data: {"groupId": options.groupId, "userIdList": JSON.stringify(list), "allIdList": JSON.stringify(options.userList)},
                dataType: 'json',
                success : function(data)
                {
                    if( data.messageType == 'error' )
                    {
                        OW.error(data.message);
                    }
                    else
                    {
                        OW.info(data.message);
                        userIdList = data.allIdList;
                    }
                }
            });
        }
    );
}


</script>

<div class="groups-invite-link ow_std_margin">
    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','type'=>'button','langLabel'=>'groups+invite_btn_label','id'=>'GROUPS_InviteLink'),$_smarty_tpl);?>

</div><?php }} ?>