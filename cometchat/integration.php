<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* ADVANCED */

define('SET_SESSION_NAME','');			// Session name
define('DO_NOT_START_SESSION','1');		// Set to 1 if you have already started the session
define('DO_NOT_DESTROY_SESSION','0');	// Set to 1 if you do not want to destroy session on logout
define('SWITCH_ENABLED','1');		
define('INCLUDE_JQUERY','1');	
define('FORCE_MAGIC_QUOTES','0');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* DATABASE */

define('_OW_', true);
define('DS', DIRECTORY_SEPARATOR);
define('OW_DIR_ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
require_once(OW_DIR_ROOT . 'ow_includes' . DIRECTORY_SEPARATOR . 'init.php');
OW::getSession()->start();

define('DB_SERVER',					"192.168.172.5"			);
define('DB_PORT',					"3306"				);
define('DB_USERNAME',				"havana_book"			);
define('DB_PASSWORD',				"JAMCH"		);
define('DB_NAME',					"havana_book"			);
define('TABLE_PREFIX',				"ow_"		);
define('DB_USERTABLE',				"base_user"		);
define('DB_USERTABLE_USERID',		"id"				);
define('DB_USERTABLE_NAME',			"username"			);
define('DB_AVATARTABLE',		    " left join ".TABLE_PREFIX."base_avatar on ".TABLE_PREFIX."base_avatar.userId=".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID."");
define('DB_AVATARFIELD',		    " concat(coalesce(".TABLE_PREFIX."base_avatar.userId,''),'^',coalesce(".TABLE_PREFIX."base_avatar.hash,''))"	                      );
define('DB_USERTABLE_LASTACTIVITY',	"activityStamp"		);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/* FUNCTIONS */
function getUserID() {
	$userid = 0; // Return 0 if user is not logged in
  
	if (!empty($_SESSION['basedata']) && $_SESSION['basedata'] != 'null') {
		$_REQUEST['basedata'] = $_SESSION['basedata'];
	}

	if (!empty($_REQUEST['basedata'])) {
		$userid = $_REQUEST['basedata'];
	}

    if (!empty($_SESSION['userId'])) {
        $userid = $_SESSION['userId'];
    }
    return $userid;
}

function chatLogin($userName,$userPass){
	$userid = 0;
	if (filter_var($userName, FILTER_VALIDATE_EMAIL)) {
		$sql ="SELECT * FROM ".TABLE_PREFIX.DB_USERTABLE." WHERE email ='".$userName."'"; 
	} else {
		$sql ="SELECT * FROM ".TABLE_PREFIX.DB_USERTABLE." WHERE username ='".$userName."'"; 		
	}
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);				
	if($row['password']== md5($userPass)){
		$userid = $row['id'];			
	}		
	return $userid;		
}

function getFriendsList($userid,$time) {
	$sql = ("select DISTINCT ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." userid, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." username, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_LASTACTIVITY." lastactivity, ".DB_AVATARFIELD." avatar, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." link, cometchat_status.message, cometchat_status.status from (select userId,friendId,status  from ".TABLE_PREFIX."friends_friendship  union select friendId,userId,status  from ".TABLE_PREFIX."friends_friendship ) ".TABLE_PREFIX."friends_friendship join ".TABLE_PREFIX.DB_USERTABLE." on ".TABLE_PREFIX."friends_friendship.userId = ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." left join cometchat_status on ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." = cometchat_status.userid ".DB_AVATARTABLE." where ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." <> 1 and ".TABLE_PREFIX."friends_friendship.friendId = '".mysql_real_escape_string($userid)."' and ".TABLE_PREFIX."friends_friendship.status='active' order by username asc");
	
	if (defined('DISPLAY_ALL_USERS') && DISPLAY_ALL_USERS == 1) {

		$sql = ("select DISTINCT ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." userid, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." username, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_LASTACTIVITY." lastactivity, ".DB_AVATARFIELD." avatar, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." link, cometchat_status.message, cometchat_status.status from ".TABLE_PREFIX.DB_USERTABLE." left join cometchat_status on ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." = cometchat_status.userid ".DB_AVATARTABLE." where ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." <> 1 and ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." <> '".mysql_real_escape_string($userid)."' and ('".$time."'-".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_LASTACTIVITY." < 580) order by username asc");

	}
	return $sql;
}

function getUserDetails($userid) {
	$sql = ("select DISTINCT ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." userid, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." username, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_LASTACTIVITY." lastactivity, ".DB_AVATARFIELD." avatar, ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_NAME." link, cometchat_status.message, cometchat_status.status from ".TABLE_PREFIX.DB_USERTABLE." left join cometchat_status on ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." = cometchat_status.userid ".DB_AVATARTABLE." where ".TABLE_PREFIX.DB_USERTABLE.".".DB_USERTABLE_USERID." = '".mysql_real_escape_string($userid)."'");
    return $sql;
}

function updateLastActivity($userid) {
	$sql = ("update `".TABLE_PREFIX.DB_USERTABLE."` set ".DB_USERTABLE_LASTACTIVITY." = '".getTimeStamp()."' where ".DB_USERTABLE_USERID." = '".mysql_real_escape_string($userid)."'");
	return $sql;
}

function getUserStatus($userid) {
	 $sql = ("select cometchat_status.message, cometchat_status.status from cometchat_status where userid = '".mysql_real_escape_string($userid)."'");
	 return $sql;
}

function getLink($link) {
    return BASE_URL.'../user/'.$link;
}

function getAvatar($image) {
   $img = explode("^",$image);
	if (is_file(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'ow_userfiles'.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'base'.DIRECTORY_SEPARATOR.'avatars'.DIRECTORY_SEPARATOR.'avatar_'.$img[0].'_'.$img[1].'.jpg')) {
        return BASE_URL.'../ow_userfiles/plugins/base/avatars/avatar_'.$img[0].'_'.$img[1].'.jpg';
    } else {
        return BASE_URL.'../ow_static/themes/graphite/images/no-avatar-big.png';
    }
}


function getTimeStamp() {
	return time();
}

function processTime($time) {
	return $time;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* HOOKS */

function hooks_statusupdate($userid,$statusmessage) {
	
}

function hooks_forcefriends() {
	
}

function hooks_activityupdate($userid,$status) {

}

function hooks_message($userid,$unsanitizedmessage) {
	
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* Nulled by TrioxX */

$p_ = 4;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////