<?php

class CHATROOMS_CTRL_Get extends OW_ActionController { 

public function index($param)
{
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );

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



$chat = $param['chat'];
$now = time();
$sql = "SELECT block_id,reason FROM ".OW_DB_PREFIX."superfeed_user_blocked WHERE user_id='$user' AND (room_id = '$chat' OR room_id = '*') LIMIT 1";
$query_data = OW::getDbo()->queryForList($sql); 
$data = $query_data[0];
$block = $data['block_id'];
$reason = $data['reason'];


if($block != "" OR $reason != "")
  {
  exit;
  }


$user = OW::getUser()->getId();
$user_service = BOL_UserService::getInstance();

if(isset($_POST['latest']) && $_POST['latest'] != '' && is_numeric($_POST['latest'])) {
$last = $_POST['latest'];


$return = "";

$sql = "SELECT * FROM ".OW_DB_PREFIX."super_feed_message WHERE message_id > '$last' AND user_id != '$user' AND chat_id = '$chat' ";
$query_data = OW::getDbo()->queryForList($sql); 
$now = time();
  foreach ($query_data as $msg)
     {
     $message_id = $msg['message_id'];
     $user_id    = $msg['user_id'];
     $message    = $msg['message'];
     $post_time  = $msg['post_time'];
     $msgtype    = $msg['msgtype'];
     
     $message = str_replace(":)",$smile,$message);
     $message = str_replace(":(",$sad,$message);
     $message = str_replace(":*(",$cry,$message);
     $message = str_replace(":D",$lol,$message);
     $message = str_replace(":p",$razz,$message);
     $message = str_replace(":o",$confused,$message);
     $message = str_replace(":x",$mad,$message);
     $message = str_replace(";)",$wink,$message);
     $message = str_replace("B-)", $cool,$message);
     $message = str_replace(":|", $neutral,$message);
	 $message = str_replace(":cool", $thumbsup,$message);
	 $message = str_replace(":bash", $bash,$message);
	 $message = str_replace(":censored", $censored,$message);
	 $message = str_replace(":santa", $santa,$message);
	 $message = str_replace(":shy", $shy,$message);
     
     
     $displayname  = $user_service->getDisplayName($user_id);
     
     $return .= ":NEWMSGSTARTER:".$user_id."-cmdx-".$displayname."-cmdx-".$message."-cmdx-".$post_time."-cmdx-".$message_id."-cmdx-".$msgtype;
     
     }
$now = time();
$sql  = "UPDATE ".OW_DB_PREFIX."superfeed_chat_users SET LastUpdate='$now' WHERE userId='$user' AND chatId='$chat' LIMIT 1";
OW::getDbo()->update($sql);
 }

echo $return;
exit;


}


public function distanceOfTimeInWords($fromTime, $toTime = 0, $showLessThanAMinute = false) {
    $distanceInSeconds = round(abs($toTime - $fromTime));
    $distanceInMinutes = round($distanceInSeconds / 60);
       
        if ( $distanceInMinutes <= 1 ) {
            if ( !$showLessThanAMinute ) {
                return ($distanceInMinutes == 0) ? 'less than a minute' : '1 minute';
            } else {
                if ( $distanceInSeconds < 5 ) {
                    return 'less than 5 seconds';
                }
                if ( $distanceInSeconds < 10 ) {
                    return 'less than 10 seconds';
                }
                if ( $distanceInSeconds < 20 ) {
                    return 'less than 20 seconds';
                }
                if ( $distanceInSeconds < 40 ) {
                    return 'about half a minute';
                }
                if ( $distanceInSeconds < 60 ) {
                    return 'less than a minute';
                }
               
                return '1 minute';
            }
        }
        if ( $distanceInMinutes < 45 ) {
            return $distanceInMinutes . ' minutes';
        }
        if ( $distanceInMinutes < 90 ) {
            return 'about 1 hour';
        }
        if ( $distanceInMinutes < 1440 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 60.0) . ' hours';
        }
        if ( $distanceInMinutes < 2880 ) {
            return '1 day';
        }
        if ( $distanceInMinutes < 43200 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 1440) . ' days';
        }
        if ( $distanceInMinutes < 86400 ) {
            return 'about 1 month';
        }
        if ( $distanceInMinutes < 525600 ) {
            return round(floatval($distanceInMinutes) / 43200) . ' months';
        }
        if ( $distanceInMinutes < 1051199 ) {
            return 'about 1 year';
        }
       
        return 'over ' . round(floatval($distanceInMinutes) / 525600) . ' years';
}  

}


?>