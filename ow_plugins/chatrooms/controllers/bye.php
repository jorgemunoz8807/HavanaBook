<?php

class CHATROOMS_CTRL_Bye extends OW_ActionController { 

public function index()
{
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
$room = $_POST["room"];


if($room != "" AND is_numeric($room))
 {
$now = time();
$user = OW::getUser()->getId();
$user_service = BOL_UserService::getInstance();
 $displayname  = $user_service->getDisplayName($user);
$msg = "$displayname has left the room!"; 
 
$sql = "INSERT INTO ".OW_DB_PREFIX."super_feed_message VALUES(null,'$room','$user','$msg', $now,'userjoin')";
OW::getDbo()->insert($sql);
 }

exit;



}

}


?>