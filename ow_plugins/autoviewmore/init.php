<?php
//Persian community 
//Mohammad Puyandeh 
OW::getRouter()->addRoute(new OW_Route('automore-admin', 'admin/autoviewmore/settings', "AUTOVIEWMORE_CTRL_Admin", 'settings'));
function viewmore(){
    $image = OW::getPluginManager()->getPlugin('autoviewmore')->getStaticUrl() . 'image/loading.gif';

   $config = OW::getConfig();
   
   $autoclick = $config->getValue('autoviewmore', 'autoclick');
   
   $script = '<script type="text/javascript">';
   $script .= '$(window).scroll(function() {
         var final = "input[class=' . "'ow_newsfeed_view_more ow_ic_down_arrow']" . '";
         jQuery( ".ow_newsfeed_view_more_c .ow_button" ).css( "background", "transparent" );
         jQuery( ".ow_newsfeed_view_more_c .ow_button" ).css( "border", "none" );
         jQuery( final ).css( "font-size", "0" );
         jQuery( final ).css( "background", "transparent" );
if($(window).scrollTop() + $(window).height() > $(document).height() - ' . $autoclick . ' && $( final ).is(":visible")) {
       $( final ).click();
       $( "#feed1 .ow_newsfeed_view_more_c" ).append(\'<img src="' . $image . '">\' );
   }
   
if($(window).scrollTop() + $(window).height() < $(document).height() - ' . $autoclick . ' || $( final ).is(":hidden")) {

       $( "#feed1 .ow_newsfeed_view_more_c img" ).remove();
   }
});' . '</script>';
   
   
    OW::getDocument()->appendBody($script);
}

OW::getEventManager()->bind('core.finalize', 'viewmore');
