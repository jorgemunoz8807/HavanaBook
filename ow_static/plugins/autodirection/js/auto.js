function checkPersian( firstChar ) {
    if( typeof this.characters == 'undefined' )
        this.characters = ['ا','ب','پ','ت','س','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی'];
    return this.characters.indexOf( firstChar ) != -1;
}




function checkInput(){
    jQuery( this ).css( 'direction', checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'rtl' : 'ltr' );
}





function newsfeedContent() {//make right align
 for (var i=0; i<$('.ow_newsfeed_content.ow_smallmargin').length; i++) {
    $( ".ow_newsfeed_content.ow_smallmargin:eq("+i+")" ).addClass( checkPersian($(".ow_newsfeed_content.ow_smallmargin:eq("+i+")" ).text().trim().substr( 0, 1 )) ? 'right' : 'left' );
    }
  }
  
  
  
  
  
  function commentContent() {//make right align for comment
 for (var i=0; i<$('.ow_comments_content.ow_smallmargin').length; i++) {
    $( ".ow_comments_content.ow_smallmargin:eq("+i+")" ).addClass( checkPersian($(".ow_comments_content.ow_smallmargin:eq("+i+")" ).text().trim().substr( 0, 1 )) ? 'right' : 'left' );
    }
  }
  
  
  
  

function newsfeedAdd() {//when add a new post to newsfeed

var i = 0;
$( ".ow_newsfeed_content.ow_smallmargin:eq("+i+")" ).addClass( checkPersian($(".ow_newsfeed_content.ow_smallmargin:eq("+i+")" ).text().trim().substr( 0, 1 )) ? 'right' : 'left' );
//alert(checkPersian($(".ow_newsfeed_content.ow_smallmargin:eq("+i+")" ).text().trim().substr( 0, 1 )));

}




function maketimeforadd() {
$('input[name="save"]').click(function(){

setTimeout(newsfeedAdd, 3000);
});
}





function newsfeedmore(){// when user click on view more button call !
$( "input[class='ow_newsfeed_view_more ow_ic_down_arrow']").click(function(){
setTimeout(newsfeedContent, 2500);
//alert('view more');
});
}




/*
function commentadd(){// add new comment !

$("textarea.ow_comment_textarea").click(function(){
//setTimeout(commentContent, 1500);
alert('submit !');
});
}
*/



function forumContent() {//make right align
 for (var i=0; i<$('.post_content').length; i++) {
    $( ".post_content:eq("+i+")" ).addClass( checkPersian($(".post_content:eq("+i+")" ).text().trim().substr( 0, 1 )) ? 'right' : 'left' );
    }
  }
  
  
  
  
  
  function blogpost() {
  //alert($(".ow_box_empty.ow_stdmargin.ow_no_cap.ow_break_word").find('.clearfix:eq(0)').text().trim());
  var i = 0;
$(".ow_box_empty.ow_stdmargin.ow_no_cap.ow_break_word").find('.clearfix:eq(0)').addClass( checkPersian($(".ow_box_empty.ow_stdmargin.ow_no_cap.ow_break_word").find('.clearfix:eq(0)').text().trim().substr( 0, 1 )) ? 'right' : 'left' );
  

  }
  
  
  

/*
function newsfeedinfo() {//make right align
 for (var i=0; i<$('.ow_newsfeed_string.ow_small.ow_smallmargin').length; i++) {
    $( ".ow_newsfeed_string.ow_small.ow_smallmargin:not('a'):eq("+i+")" ).addClass( checkPersian($(".ow_newsfeed_string.ow_small.ow_smallmargin:eq("+i+")" ).remove('a');.text().trim().substr( 0, 1 )) ? 'right' : 'left' );
    }
  }
  */
  
  
  


$('textarea').change( checkInput );
$('textarea').keydown( checkInput );
$('textarea').keyup( checkInput );
$('input').change( checkInput );
$('input').keydown( checkInput );
$('input').keyup( checkInput );
newsfeedContent();
commentContent();
maketimeforadd();
newsfeedmore();
//commentadd();
forumContent();
blogpost();
//newsfeedinfo();









