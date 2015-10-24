$(function () {
 var cache = new Array();
 var mentions2;
 var cachedUsers = new Array();
// $('.ow_newsfeed_status_input,.comments_fake_autoclick').textcomplete([
$('.ow_newsfeed_status_input, .comments_fake_autoclick').livequery(function(){ 
 $(this).textcomplete([
    { 
        match: /\B@(\w*)$/,
        search: function (term, callback) {
            if (cache != undefined &&  cache[term] != undefined && cache[term].length > 0)
	      callback(cache[term], true);
//          if (term.length > 2) {
            console.log("my search " + term);
            var arr= new Array();
            $.ajax({
		url: autocompleteUserSearchResponderUrl,
		data: "term=" + term,
		async:   false,
		dataType: 'json',
		success: function(data) {
		   mentions2 = data;
                   cachedUsers = $.extend(cachedUsers, mentions2);
                   $.each( mentions2, function(i, obj) {
                     if (obj.displayName != undefined)
                       arr.push( obj.userId )
                   })
            	}  
            });
            console.log("arr " + arr);            
            callback(arr);
/*          } else {
            callback([]);
          }*/
            
        },
        template: function (value) {
            if (use_photos)
               return '<img style="height: 30px; width: 30px; margin-right: 10px" src="' + cachedUsers[value].avatarUrl + '"></img>' + cachedUsers[value].displayName;
            else                 
	       return cachedUsers[value].displayName;
        },
        index: 1,
        replace: function (value) {
            return ' @' + mentions2[value].displayName + ' ';
        },
        maxCount: 20,
        cache: true
    }
  ], {	debounce: ac_debounce});
});
});


