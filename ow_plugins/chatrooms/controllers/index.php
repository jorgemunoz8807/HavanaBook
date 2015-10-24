<?php

class CHATROOMS_CTRL_Index extends OW_ActionController { 

public function index($param)
{
        if ( !OW::getUser()->isAuthenticated() )
        {
            exit;
        }
$smile = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley.gif\">";
$cool = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-cool.gif\">";
$confused = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-confused.gif\">";
$cry = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-cry.gif\">";
$lol = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-lol.gif\">";
$mad = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-mad.gif\">";
$neutral = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-neutral.gif\">";
$razz = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-razz.gif\">";
$sad = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-sad.gif\">";
$shock = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-surprise.gif\">";
$wink = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-wink.gif\">";
$thumbsup = "<img style=\"height: 61px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugin/chatrooms/smilies/cool.gif\">";
$bash = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-bash.gif\">";
$censored = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-censored.gif\">";
$santa = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-santa.gif\">";
$shy = "<img style=\"height: 20px; width: 20px;\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/smilies/smiley-shy.gif\">";



$content = "";
 $is_admin = false;
if(OW::getUser()->isAdmin())
 {
 $is_admin = true;
 $content .= "<script type=\"text/javascript\" src=\"".OW_URL_HOME."ow_static/plugins/chatrooms/jquery.contextmenu.js\"></script>";
 }

$no_avatar = OW_URL_HOME."ow_static/themes/".OW::getConfig()->getValue('base', 'selectedTheme')."/images/no-avatar.png";

$user = OW::getUser()->getId();
$user_service = BOL_UserService::getInstance();
$avat_service = BOL_AvatarService::getInstance();



$chats = "";
$chat_id = $param['chat'];
if($chat_id == "" OR $chat_id <= 0 OR $chat_id >=6 OR !is_numeric($chat_id)) { $chat_id = 1; }


//check for blocked status
$now = time();
$sql = "SELECT block_id,reason FROM ".OW_DB_PREFIX."superfeed_user_blocked WHERE user_id='$user' AND (room_id = '$chat_id' OR room_id = '*') LIMIT 1";
$query_data = OW::getDbo()->queryForList($sql); 
$data = $query_data[0];
$block = $data['block_id'];
$reason = $data['reason'];


if($block != "" OR $reason != "")
  {
  $info = "You have been blocked from live chat (reason: $reason)";
  OW::getFeedback()->warning($info);
  OW::getApplication()->redirect(OW_URL_HOME);
  exit;
  }

// GET LATEST CHAT COMMENTS


 $sql = "SHOW TABLE STATUS WHERE `Name` = '".OW_DB_PREFIX."super_feed_message'";   
 $query_data = OW::getDbo()->queryForList($sql); 
 
  $latest = $query_data[0]['Auto_increment'];

 $now = time();
$sql = "DELETE FROM ".OW_DB_PREFIX."superfeed_chat_users WHERE userId='$user' LIMIT 1;
        INSERT INTO ".OW_DB_PREFIX."superfeed_chat_users VALUES(null,'$user','$chat_id','$now');
       ";
OW::getDbo()->query($sql);

$displayname  = $user_service->getDisplayName($user);
$now = time();
$msg = "$displayname has joined the room!";
$sql = "INSERT INTO ".OW_DB_PREFIX."super_feed_message VALUES(null,'$chat_id','$user','$msg', $now,'userjoin')";
OW::getDbo()->insert($sql);

// END GET LATEST CHAT COMMENTS


// GET PEOPLE IN CHAT
$totpeople = "";
$users_in_chat = "";
$then = strtotime("-2 Minute");
$sql = "SELECT userId FROM ".OW_DB_PREFIX."superfeed_chat_users WHERE chatId='$chat_id' AND LastUpdate >= $then";
$query_data = OW::getDbo()->queryForList($sql); 
  foreach ($query_data as $users)
     {
	  $totpeople = intval($totpeople) + 1; //added to get total chatters
      $userIdx = $users['userId'];
      $displayname  = $user_service->getDisplayName($userIdx);
      $displayimage = $avat_service->getAvatarUrl($userIdx); if(!$displayimage) { $displayimage = $no_avatar; }
      $users_in_chat .= "
      <div style=\"padding-bottom:5px;\"><img style=\"width:24px;height:24px;vertical-align:middle\" src=\"$displayimage\"> &nbsp; <span id=\"$userIdx\" class=\"userblock\" style=\"\">$displayname</span></div>
      ";
      

      
     }
// END GET PEOPLE IN CHAT

if($latest == "") { $latest = 0; }


$s1 = "";
$s2 = "";
$s3 = "";
$s4 = "";
$s5 = "";

$title1 = OW::getConfig()->getValue('chatrooms', 'chat_1_title'); if($title1 == "") { $title1 = "Chat 1"; }
$title2 = OW::getConfig()->getValue('chatrooms', 'chat_2_title'); if($title2 == "") { $title2 = "Chat 2"; }
$title3 = OW::getConfig()->getValue('chatrooms', 'chat_3_title'); if($title3 == "") { $title3 = "Chat 3"; }
$title4 = OW::getConfig()->getValue('chatrooms', 'chat_4_title'); if($title4 == "") { $title4 = "Chat 4"; }
$title5 = OW::getConfig()->getValue('chatrooms', 'chat_5_title'); if($title5 == "") { $title5 = "Chat 5"; }


if($chat_id == "1") { $s1 = "active"; }
if($chat_id == "2") { $s2 = "active"; }
if($chat_id == "3") { $s3 = "active"; }
if($chat_id == "4") { $s4 = "active"; }
if($chat_id == "5") { $s5 = "active"; }

 $content .= "<div class=\"ow_content_menu_wrap\">
<ul class=\"ow_content_menu clearfix\">
      <li class=\"_recent   $s1\"><a href=\"".OW_URL_HOME."chatrooms/1\"><span class=\"ow_ic_files\">$title1</span></a></li>
      <li class=\"_recent   $s2\"><a href=\"".OW_URL_HOME."chatrooms/2\"><span class=\"ow_ic_files\">$title2</span></a></li>
      <li class=\"_recent   $s3\"><a href=\"".OW_URL_HOME."chatrooms/3\"><span class=\"ow_ic_files\">$title3</span></a></li>
      <li class=\"_recent   $s4\"><a href=\"".OW_URL_HOME."chatrooms/4\"><span class=\"ow_ic_files\">$title4</span></a></li>
      <li class=\"_recent   $s5\"><a href=\"".OW_URL_HOME."chatrooms/5\"><span class=\"ow_ic_files\">$title5</span></a></li>
";
if(OW::getUser()->isAdmin())
 {
  $content .= " <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/admin/setup\"><span class=\"ow_ic_files\">Setup</span></a></li> ";
 }

$content .= "</ul><br>
	Total Chat Users(all rooms) = $totpeople <br>
	<b>Smilies:</b> :) , :( , :*( , :D , :p , :o , :x , ;) , B-) , :|
</div>


"; 

$chat_refresh = OW::getConfig()->getValue('chatrooms', 'chat_newmsg_check');
$user_refresh = OW::getConfig()->getValue('chatrooms', 'chat_userlist_refresh');

$user_list_script = "
<script>
		 window.setInterval(function(){
		 var latest = $('#lastids').text();

		 $.ajax({
		 
		 type     : 'POST',
            cache    : false,
            url      : '".OW_URL_HOME."chatrooms/getuser/$chat_id',
            data     : 'latest=' + latest,
            success  : function(data) {
            
            var returndata = data.split('-xUSERx-');
            
            var html = '';
            for (var i = 0; i < returndata.length; i++) 
             {
             var msgdata = returndata[i].split(':data:');
             var usern = msgdata[0];
             var useri = msgdata[1];
             var userid = msgdata[2];

             if(usern != '') 
               {
               var newhtml = '<div style=\'padding-bottom:10px;\'><img style=\'width:24px;height:24px;vertical-align:middle\' src=\''+useri+'\'><span id=\''+userid+'\' class=\'userblock\' style=\'\'> &nbsp; '+usern+'</span></div>';
               html += newhtml;
               
               }
             }
             
          
             $('#div_user').html(html);
            }
		 
		 
		 });
		 
		 },$user_refresh );
		</script>
		";


$content .= "
<script type='text/javascript' src='".OW_URL_HOME."ow_static/plugins/chatrooms/scroll.js'></script>
<style type=\"text/css\" media=\"screen\">
			.chat_time {
				font-style: italic;
				font-size: 9px;
			}
		</style>
		
		
		<script>
		var lastmsg = 0;
		function ChatMsg() {
    $.ajax({type:'POST', url: '".OW_URL_HOME."chatrooms/chat/$chat_id', data:$('#frmmain').serialize(), success: function(response) {
    
     var returndata = response.split('::');
     
     var status = returndata[0];
     var userdn = returndata[1];
     var usermg = returndata[2];
     var posttd = returndata[3];
     
     if(status == 'BLOCKED')
     {
     
     var html='<div><b>You have been blocked from this chat</b></div>';
     $('#div_chat').append(html);
     $('#txt_message').val('');
     $('#div_chat').scrollTo('max', {axis: 'y'});
     }
     
     if(status == 'POSTED')
      {
     
     var html = '<div><b>'+userdn+'</b>: '+usermg+'</div>';
     
     $('#div_chat').append(html);
     $('#txt_message').val('');
     $('#div_chat').scrollTo('max', {axis: 'y'});
     }
     
     
     
    }});

    return false;
}
		</script>
		<script>
		
		
		 window.setInterval(function(){
		 var latest = $('#lastids').text();

		 $.ajax({
		 
		 type     : 'POST',
            cache    : false,
            url      : '".OW_URL_HOME."chatrooms/getchat/$chat_id',
            data     : 'latest=' + latest,
            success  : function(data) {
            
            var returndata = data.split(':NEWMSGSTARTER:');
            
            for (var i = 1; i < returndata.length; i++) 
             {
             var msgdata = returndata[i].split('-cmdx-');
             
             var usid = msgdata[0];
             var disn = msgdata[1];
             var msgx = msgdata[2];
             var tdst = msgdata[3];
             var lstid = msgdata[4];
             var msgtype = msgdata[5];
             
               if(msgtype == 'usermsg') { var html = '<div><b>'+disn+'</b>: '+msgx+'</div>'; }
               if(msgtype == 'userjoin') { var html = '<div><i>'+msgx+'</i></div>'; }
                
               $('#div_chat').append(html);
               
               $('#div_chat').scrollTo('max', {axis: 'y'});
             }
             
            $('#lastids').text(lstid);
            $('#div_chat').scrollTo('max', {axis: 'y'});
   
            }
		 
		 
		 });
		 
		 },$chat_refresh);
		</script>
		
		$user_list_script
		
	</head>
	<body onload=\"\">
	  <div style=\"float: center; width: 100%;\">
		<div id=\"div_chat\" style=\"float: left; height: 300px; width: 620px; overflow: auto; background-color: #CCCCCC; border: 1px solid #555555; color: #000000\">$chat</div>
		<div id=\"div_user\" style=\"float: right; height: 300px; width: 150px; overflow: auto; background-color: #CCCCCC; border: 1px solid #555555; color: #000000\">$users_in_chat</div>
		</div>
		<form id=\"frmmain\" name=\"frmmain\" onsubmit=\"return ChatMsg();\">
			<input type=\"text\" id=\"txt_message\" name=\"txt_message\" style=\"width: 525px;\" autocomplete=\"off\" />
			<span class=\"ow_button\"><span class=\" ow_button ow_ic_save\"><input type=\"submit\" name=\"btn_send_chat\" id=\"btn_send_chat\" value=\"Send\" /></span></span>
		</form>
		<div id=\"lastids\" class=\"lastids\" style=\"display: none; visibility: hidden\">$latest</div>
		

";

if( $is_admin == true)
{
$content .= "<script>
$(\".userblock\").live(\"click\", function() {
   var dataid = $(this).attr('id');
   var xx = confirm('Block User from chat system?');
   
   if(xx == true)
   {
   
   var why  = prompt(\"Reason for block\");
   var chat = ".$chat_id.";
   var time = 999999;
 

   
    $.ajax({
            type     : \"POST\",
            cache    : false,
            url      : \"".OW_URL_HOME."chatrooms/admin/setup/block\",
            data     : \"data=\"+ $(this).attr('id') + \"&reason=\"+why+\"&time=\"+time+\"&room=\"+chat,
            success  : function(datax) {
             
             if(datax == 'BLOCKED')
             {
             window.OW.info(\"User has been blocked\");  
             }
            }
    
    });
    return false;
    }
});
</script>
";
}

$content .="

<script>
$(document).ready(function(){
  window.onbeforeunload = function(){
  var chat = ".$chat_id.";
  $.ajax({
    type: 'POST',
    async: false,
    url: '".OW_URL_HOME."chatrooms/bye/bye',
    data: \"room=\"+chat

});

  }
});
</script>

";

$this->assign("content",$content);
}

}
?>