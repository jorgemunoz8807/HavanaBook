<?php /* Smarty version Smarty-3.1.12, created on 2014-12-15 23:51:34
         compiled from "C:\xampp\htdocs\havanabook\ow_plugins\photo\views\components\make_album_cover.html" */ ?>
<?php /*%%SmartyHeaderCode:12760548fe486248431-33685274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a587746388674ab61ebbee73328a1b03b85a75d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\havanabook\\ow_plugins\\photo\\views\\components\\make_album_cover.html',
      1 => 1416959678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12760548fe486248431-33685274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgError' => 0,
    'coverUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_548fe4863eaac0_99003697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fe4863eaac0_99003697')) {function content_548fe4863eaac0_99003697($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'C:\\xampp\\htdocs\\havanabook\\ow_smarty\\plugin\\function.submit.php';
?>

<?php if (!empty($_smarty_tpl->tpl_vars['imgError']->value)){?>
    <div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['imgError']->value;?>
</div>
<?php }else{ ?>
    <div id="set-as-album-cover" class="ow_box ow_wide ow_automargin ow_smallmargin clearfix ow_no_cap ow_break_word">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"album-cover-maker")); $_block_repeat=true; echo smarty_block_form(array('name'=>"album-cover-maker"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="clearfix">
                <div class="ow_left ow_superwide ow_center" style="width: 260px;">
                    <h4><?php echo smarty_function_text(array('key'=>'photo+cover_original'),$_smarty_tpl);?>
</h4>
                    <img width="220" class="ow_smallmargin crop_img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="" />
                    <br/>
                    <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

                </div>
                <div class="ow_avatar_preview ow_right ow_supernarrow ow_center" style="width: 120px;">
                    <h4><?php echo smarty_function_text(array('key'=>'photo+cover_preview'),$_smarty_tpl);?>
</h4>
                    <div style="width: 120px; height: 120px; overflow: hidden">
                        <img class="crop_preview" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="" style="width: 120px;" />
                    </div>
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"album-cover-maker"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <script>
        var albumCoverMaker = (function( $ )
        {
            return {
                init: function()
                {
                    var _elements = {}, _methods = {};
                    _elements.content = $(document.getElementById('set-as-album-cover'));
                    _elements.coverImg = $('.crop_img', _elements.content);
                    _elements.coverPreview = $('.crop_preview', _elements.content);

                    _methods.complete = function()
                    {
                        _elements.coverPreview.css({
                            width: 120 + 'px',
                            height: 'auto',
                            marginLeft: 0,
                            marginTop: 0
                        });

                        _elements.jcrop = $.Jcrop(_elements.coverImg, (function()
                        {
                            var photoWidth = _elements.coverImg.width(),
                                minSize = Math.ceil(330 / (_elements.coverImg[0].naturalWidth / photoWidth));

                            return {
                                onChange: _methods.showPreview,
                                onSelect: _methods.showPreview,
                                aspectRatio: 1,
                                minSize: [minSize, minSize]
                            };
                        })());
                    };

                    _methods.showPreview = function( coords )
                    {
                        var rx = 120 / coords.w;
                        var ry = 120 / coords.h;

                        if ( rx === Infinity || ry === Infinity )
                        {
                            _elements.coverPreview.css({
                                width: 120 + 'px',
                                height: 'auto',
                                marginLeft: 0,
                                marginTop: 0
                            });
                        }
                        else
                        {
                            _elements.coverPreview.css({
                                width: Math.round(rx * _elements.coverImg.width()) + 'px',
                                height: Math.round(ry * _elements.coverImg.height()) + 'px',
                                marginLeft: '-' + Math.round(rx * coords.x) + 'px',
                                marginTop: '-' + Math.round(ry * coords.y) + 'px'
                            });
                        }
                    };

                    _elements.coverPreview[0].src = '<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
';
                    _elements.coverImg[0].src = '<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
';
                    _elements.coverImg[0].onerror = _methods.complete;

                    +_elements.coverImg[0].naturalHeight !== 0 ? _methods.complete() : _elements.coverImg[0].onload = _methods.complete;

                    window.owForms['album-cover-maker'].bind('submit', function( data )
                    {
                        data.coords = _elements.jcrop.tellSelect();
                        data.view_size = _elements.coverImg.width();
                    });

                    window.owForms['album-cover-maker'].bind('success', function( data )
                    {
                        if ( data && data.result )
                        {
                            photoAlbum.setCoverUrl(data.url);
                            window.albumCoverMakerFB.close();
                        }
                        else
                        {
                            alert(OW.getLanguageText('photo', 'no_photo_selected'));
                        }
                    });

                    window.albumCoverMakerFB.bind('close', function()
                    {
                        _elements.jcrop.destroy();
                    });
                }
            };
        })(jQuery);
    </script>
<?php }?>
<?php }} ?>