<?php

class CHATROOMS_CTRL_Chat extends OW_ActionController { 

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



$user = OW::getUser()->getId();
$chat = $param['chat'];
$now = time();
$sql = "SELECT block_id,reason FROM ".OW_DB_PREFIX."superfeed_user_blocked WHERE user_id='$user' AND (room_id = '$chat' OR room_id = '*') LIMIT 1";
$query_data = OW::getDbo()->queryForList($sql); 
$data = $query_data[0];
$block = $data['block_id'];
$reason = $data['reason'];


if($block != "" OR $reason != "")
  {
  echo "BLOCKED";
  exit;
  }



if(isset($_POST['txt_message']) && $_POST['txt_message'] != '') {
$msg = addslashes ($_POST['txt_message']);
$now = time();
$sql = "INSERT INTO ".OW_DB_PREFIX."super_feed_message VALUES(null,'$chat','$user ','$msg', $now,'usermsg')";
OW::getDbo()->insert($sql);

$user_service = BOL_UserService::getInstance();
$displayname  = $user_service->getDisplayName($user);

$msg = stripslashes($msg);

     $msg = str_replace(":)",$smile,$msg);
     $msg = str_replace(":(",$sad,$msg);
     $msg = str_replace(":*(",$cry,$msg);
     $msg = str_replace(":D",$lol,$msg);
     $msg = str_replace(":p",$razz,$msg);
     $msg = str_replace(":o",$confused,$msg);
     $msg = str_replace(":x",$mad,$msg);
     $msg = str_replace(";)",$wink,$msg);
     $msg = str_replace("B-)", $cool,$msg);
     $msg = str_replace(":|", $neutral,$msg);
	 $msg = str_replace(":cool", $thumbsup,$msg);
	 $msg = str_replace(":bash", $bash,$msg);
	 $msg = str_replace(":censored", $censored,$msg);
	 $msg = str_replace(":santa", $santa,$msg);
	 $msg = str_replace(":shy", $shy,$msg);

echo "POSTED::$displayname::$msg::$now";
}
else
{
echo "BAD::";
}



exit;



}

}


?>