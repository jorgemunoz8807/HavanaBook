<?php

class CHATROOMS_CTRL_User extends OW_ActionController { 

public function index($param)
{
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );

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

$no_avatar = OW_URL_HOME."ow_static/themes/".OW::getConfig()->getValue('base', 'selectedTheme')."/images/no-avatar.png";

$user = OW::getUser()->getId();
$user_service = BOL_UserService::getInstance();
$avat_service = BOL_AvatarService::getInstance();



$then = strtotime("-1 Minute");

$returns = array();

$sql = "SELECT userId FROM ".OW_DB_PREFIX."superfeed_chat_users WHERE chatId='$chat' AND LastUpdate >= $then";
$query_data = OW::getDbo()->queryForList($sql); 
  foreach ($query_data as $users)
     {
     $userIdx = $users['userId'];
     $displayname  = $user_service->getDisplayName($userIdx);
      $displayimage = $avat_service->getAvatarUrl($userIdx); if(!$displayimage) { $displayimage = $no_avatar; }
     $return .= "-xUSERx-".$displayname.":data:".$displayimage.":data:".$userIdx;
     }

echo $return;
exit;


}

}


?>