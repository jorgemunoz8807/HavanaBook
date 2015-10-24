<?php
class CHATROOMS_CTRL_Setup extends OW_ActionController { 


public function block()
{
         if ( !OW::getUser()->isAuthenticated() )
        {
            exit;
        }
if(!OW::getUser()->isAdmin())
 {
  OW::getApplication()->redirect(OW_URL_HOME);
  exit;
 }

$block = $_POST["data"];
$time  = $_POST["time"];   if($time == "") { $time = "5"; }
$reason = $_POST["reason"]; if ($reason == "") { $reason = "None Given"; }
$room  = $_POST["room"]; if($room == "") { $room = "*"; }

if($block == "1") { exit; }

if(is_numeric($time))
  {
  $str = "+$time hour";
  $td = strtotime($str);
  }
  else
  {
  $td = "*";
  }

if($block != "" AND is_numeric($block))
 {
 $user_service = BOL_UserService::getInstance();
 $sql = "INSERT INTO ".OW_DB_PREFIX."superfeed_user_blocked VALUES (null,'$block','$room','$reason','$td')";
 OW::getDbo()->insert($sql); 
 
 $sql = "UPDATE ".OW_DB_PREFIX."superfeed_chat_users SET LastUpdate='0' WHERE userId='$block' LIMIT 1;";
 OW::getDbo()->update($sql);
 
 $displayname  = $user_service->getDisplayName($block);
$now = time();
$msg = "$displayname has left the room!";
$sql = "INSERT INTO ".OW_DB_PREFIX."super_feed_message VALUES(null,'$room','$block','$msg', $now,'userjoin')";
OW::getDbo()->insert($sql);
 
 echo "BLOCKED"; 
 } 


exit;
}

public function unblock()
 {
 
         if ( !OW::getUser()->isAuthenticated() )
        {
            exit;
        }
if(!OW::getUser()->isAdmin())
 {
  OW::getApplication()->redirect(OW_URL_HOME);
  exit;
 }
 
 $remove = $_POST["unblock"];
 if($remove != "" AND is_numeric($remove))
  {
  $sql = "DELETE FROM ".OW_DB_PREFIX."superfeed_user_blocked WHERE block_id='$remove' LIMIT 1";
  OW::getDbo()->delete($sql); 
  echo $remove;
  } 
  else
  {
  echo "";
  }
 exit;
 }

public function index($param)
{
        if ( !OW::getUser()->isAuthenticated() )
        {
            exit;
        }
if(!OW::getUser()->isAdmin())
 {
  OW::getApplication()->redirect(OW_URL_HOME);
  exit;
 }
 
 if($_POST)
 {
 $title1 = $_POST["chat1"]; if($title1 == "") { $title1 = "Chat 1"; }
 $title2 = $_POST["chat2"]; if($title2 == "") { $title2 = "Chat 2"; }
 $title3 = $_POST["chat3"]; if($title3 == "") { $title3 = "Chat 3"; }
 $title4 = $_POST["chat4"]; if($title4 == "") { $title4 = "Chat 4"; }
 $title5 = $_POST["chat5"]; if($title5 == "") { $title5 = "Chat 5"; }
 
 $chat_refresh = $_POST["chat_newmsg_check"];
 $user_refresh = $_POST["chat_userlist_refresh"];
 
  OW::getConfig()->saveConfig("chatrooms","chat_1_title", $title1);
  OW::getConfig()->saveConfig("chatrooms","chat_2_title", $title2);
  OW::getConfig()->saveConfig("chatrooms","chat_3_title", $title3);
  OW::getConfig()->saveConfig("chatrooms","chat_4_title", $title4);
  OW::getConfig()->saveConfig("chatrooms","chat_5_title", $title5);
  OW::getConfig()->saveConfig("chatrooms","chat_newmsg_check", $chat_refresh);
  OW::getConfig()->saveConfig("chatrooms","chat_userlist_refresh", $user_refresh);
  
 
 echo "UPDATED";
 exit;
 }

$content = "";

$content .= "
		<script>
		function update() {
		
		if ($('#chat1').val() == '') { $('#chat1').val('Chat 1'); }
		if ($('#chat2').val() == '') { $('#chat1').val('Chat 2'); }
		if ($('#chat3').val() == '') { $('#chat1').val('Chat 3'); }
		if ($('#chat4').val() == '') { $('#chat1').val('Chat 4'); }
		if ($('#chat5').val() == '') { $('#chat1').val('Chat 5'); }
		
    $.ajax({type:'POST', url: '".OW_URL_HOME."chatrooms/admin/setup', data:$('#frmmain').serialize(), success: function(response) {
    

    if(response == 'UPDATED') 
     { 
     window.OW.info(\"Settings Updated\"); 
     
     $('#chat1t').text($('#chat1').val())
     $('#chat2t').text($('#chat2').val())
     $('#chat3t').text($('#chat3').val())
     $('#chat4t').text($('#chat4').val())
     $('#chat5t').text($('#chat5').val())
     
     } 
     
    }});

    return false;
}

		</script>



";

$user = OW::getUser()->getId();



$title1 = OW::getConfig()->getValue('chatrooms', 'chat_1_title'); if($title1 == "") { $title1 = "Chat 1"; }
$title2 = OW::getConfig()->getValue('chatrooms', 'chat_2_title'); if($title2 == "") { $title2 = "Chat 2"; }
$title3 = OW::getConfig()->getValue('chatrooms', 'chat_3_title'); if($title3 == "") { $title3 = "Chat 3"; }
$title4 = OW::getConfig()->getValue('chatrooms', 'chat_4_title'); if($title4 == "") { $title4 = "Chat 4"; }
$title5 = OW::getConfig()->getValue('chatrooms', 'chat_5_title'); if($title5 == "") { $title5 = "Chat 5"; }


$chat_refresh = OW::getConfig()->getValue('chatrooms', 'chat_newmsg_check');
$user_refresh = OW::getConfig()->getValue('chatrooms', 'chat_userlist_refresh');




 $content .= "<div class=\"ow_content_menu_wrap\">
<ul class=\"ow_content_menu clearfix\">
      <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/1\"><span id=\"chat1t\" class=\"ow_ic_files\">$title1</span></a></li>
      <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/2\"><span id=\"chat2t\" class=\"ow_ic_files\">$title2</span></a></li>
      <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/3\"><span id=\"chat3t\" class=\"ow_ic_files\">$title3</span></a></li>
      <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/4\"><span id=\"chat4t\" class=\"ow_ic_files\">$title4</span></a></li>
      <li class=\"_recent   \"><a href=\"".OW_URL_HOME."chatrooms/5\"><span id=\"chat5t\" class=\"ow_ic_files\">$title5</span></a></li>
";
if(OW::getUser()->isAdmin())
 {
  $content .= " <li class=\"_recent  active \"><a href=\"".OW_URL_HOME."chatrooms/admin/setup\"><span class=\"ow_ic_files\">Setup (Admin)</span></a></li> ";
 }

$content .= "
	</ul>
</div>
"; 
$content .= "<form id=\"frmmain\" name=\"frmmain\" onsubmit=\"return update();\">";
$content .= "<table class=\"ow_table_1\"> <tr class=\"ow_tr_first\"><th colspan=2 class=\"ow_name ow_txtleft\"><span class=\"ow_section_icon ow_ic_script\">Settings</span></th></tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat 1 Title: </center> </td> <td> <center> <input type=text id=\"chat1\" name=\"chat1\" style=\"width: 200px\" value=\"$title1\"></center> </td> </tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat 2 Title: </center> </td> <td> <center> <input type=text id=\"chat2\" name=\"chat2\" style=\"width: 200px\" value=\"$title2\"></center> </td> </tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat 3 Title: </center> </td> <td> <center> <input type=text id=\"chat3\" name=\"chat3\" style=\"width: 200px\" value=\"$title3\"></center> </td> </tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat 4 Title: </center> </td> <td> <center> <input type=text id=\"chat4\" name=\"chat4\" style=\"width: 200px\" value=\"$title4\"></center> </td> </tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat 5 Title: </center> </td> <td> <center> <input type=text id=\"chat5\" name=\"chat5\" style=\"width: 200px\" value=\"$title5\"></center> </td> </tr>";
$content .= "</table><br>";

$content .= "<table class=\"ow_table_1\"> <tr class=\"ow_tr_first\"><th colspan=2 class=\"ow_name ow_txtleft\"><span class=\"ow_section_icon ow_ic_script\">Adv. Settings (Do not edit unless you are 100% sure ofwhat you are doing!)</span></th></tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> Chat Refresh Time: </center> </td> <td> <center> <input type=text name=\"chat_newmsg_check\" style=\"width: 200px\" value=\"$chat_refresh\"></center> </td> </tr>";
$content .= "<tr class=\"ow_alt1\"><td><Center> User Refresh Time: </center> </td> <td> <center> <input type=text name=\"chat_userlist_refresh\" style=\"width: 200px\" value=\"$user_refresh\"></center> </td> </tr>";
$content .= "</table><br>";
$content .= "<div class=\"ow_right\"><span class=\"ow_button\"><span class=\" ow_ic_save ow_positive\"><input type=\"submit\" name=\"save\" class=\"ow_ic_save ow_positive\" id=\"input_65112305\" value=\"Save\"></span></span></div>";
$content .= "</form><br><br><br><hr size=2 noshade width=\"95%\"><center><h3>Blocked Users </h3><br>";

$content .= "<table class=\"ow_table_1\"> <tr class=\"ow_tr_first\"><th colspan=4 class=\"ow_name ow_txtleft\"><span class=\"ow_section_icon ow_ic_script\">Blocked Users</span></th></tr>";
$content .= "<tr class=\"ow_alt1\"> <th> Username </th> <Th> Blocked from room </th> <th> Reason </th>  <th> Unblock </th></tr>";

$user_service = BOL_UserService::getInstance();

$sql = "SELECT * FROM ".OW_DB_PREFIX."superfeed_user_blocked WHERE 1";
$query_data = OW::getDbo()->queryForList($sql); 
  foreach ($query_data as $msg)
     {
     
     $buserid = $msg['user_id'];
     $breason = $msg['reason'];
     $broomid = $msg['room_id'];
     $blockid = $msg['block_id'];
     
     $content .= "<Tr id=\"block-$blockid\" class=\"ow_alt2\"><td><center> ".$user_service->getDisplayName($buserid)." </center> </td>";
     $content .= "<td><center> $broomid </center> </td>";
     $content .= "<td><Center> $breason </center> </td>";
     $content .= "<td><Center> <form id=\"unblock\" class=\"unblock\" method=\"post\" action=\"".OW_URL_HOME."chatrooms/admin/setup/unblock\"> <input type=hidden name=\"unblock\" value=\"$blockid\"> <span class=\"ow_button\"><span class=\"  ow_positive\"><input type=\"submit\" value=\"Unblock\" id=\"input_65112305\" class=\" ow_positive\" name=\"save\"></form></span></span></center> </td>";
     $content .= "</tr>";
     
     }

$content .= "</table>";

$content .= "<script>
$(\".unblock\").live(\"submit\", function() {

    $.ajax({
            type     : \"POST\",
            cache    : false,
            url      : $(this).attr('action'),
            data     : $(this).serializeArray(),
            success  : function(data) {
             
             if(data != '') 
                { 
                $('#block-' + data).remove();
                window.OW.info(\"User has been unblocked\");  
                }
             if(data == '') { window.OW.error(\"Unable to unblock, try again\");  }
             
            }
    });
    return false;
});
</script>";

$this->assign("content",$content);
}

}
?>