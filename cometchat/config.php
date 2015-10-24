<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* SOFTWARE SPECIFIC INFORMATION (DO NOT TOUCH) */

include dirname(__FILE__).DIRECTORY_SEPARATOR.'integration.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* BASE URL START */

define('BASE_URL','cometchat/');

/* BASE URL END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* COOKIE */

$cookiePrefix = 'cc_';				// Modify only if you have multiple CometChat instances on the same site

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* LANGUAGE START */

$lang = 'es-la';

/* LANGUAGE END */ 

if (!empty($_COOKIE[$cookiePrefix."lang"])) {
	$lang = $_COOKIE[$cookiePrefix."lang"];
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* ICONS START */

$trayicon[] = array('announcements','Announcements','modules/announcements/index.php','_popup','280','300','','1','');
$trayicon[] = array('scrolltotop','Scroll To Top','javascript:jqcc.cometchat.scrollToTop();','','','','','','');

/* ICONS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* PLUGINS START */

$plugins = array('smilies','clearconversation','chattime','chathistory','save');

/* PLUGINS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* EXTENSIONS START */

$extensions = array();

/* EXTENSIONS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* CHATROOMPLUGINS START */

$crplugins = array('chattime','colors','filetransfer','smilies');

/* CHATROOMPLUGINS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* SMILEYS START */

$smileys = array( 

	':)'			=>	'smile.png',
	';)'			=>	'wink.png',
	':D'			=>	'big-smile.png',
	':('			=>	'sad.png',
	":'("			=>	'crying.png',
	":p"			=>	'tongue.png',
	'<3<3'			=>	'love.png',
	':*'			=>	'kiss.png',
	':|'			=>	'straight-face.png',
	'3-|'			=>	'not-interested.png',
	':s'			=>	'confused.png',
	':&'			=>	'sick.png',
	">:O"			=>	'angry.png',
	":$"			=>	'embarrassed.png',
	":O"			=>	'surprised.png',
	"(=|"			=>	'yawn.png',
	":x"			=>	'zipped.png',
	">=)"			=>	'devil.png',
	"B-)"			=>	'cool.png',
	":nerd:"		=>	'nerd.png',
	":whistle:"		=>	'whistle.png',
	":grin:"		=>	'grin.png',
	":sarcasm:"		=>	'sarcasm.png',
	":impatient:"	=>	'impatient.png',
	":sour:"		=>	'sour.png',
	":shocked:"		=>	'shocked.png',
	":sing:"		=>	'sing.png',
	":smug:"		=>	'smug.png',
	":stress:"		=>	'stress.png',
	":silly:"		=>	'silly.png',
	":mad:"			=>	'mad.png',
	":dead:"		=>	'dead.png',
	":smitten:"		=>	'smitten.png',
	":evil:"		=>	'evil.png'

);

/* SMILEYS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* BANNED START */

$bannedWords = array( 'pinga','cojone','maricon','bollo','singao' );
$bannedUserIPs = array(  );
$bannedUserIDs = array();
$bannedMessage = 'Sus mensajes no seran enviados, usted ha sido baneado.';

/* BANNED END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* ADMIN START */

define('ADMIN_USER','DraKo');
define('ADMIN_PASS','JAMCH');

/* ADMIN END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* SETTINGS START */

$lightWeight = '0';			// Switch on light-weight chat?
$hideOffline = '1';			// Hide offline users in Whos Online list?
$autoPopupChatbox = '0';			// Auto-open chatbox when a new message arrives
$messageBeep = '1';			// Beep on arrival of message from new user?
$beepOnAllMessages = '1';			// Beep on arrival of all messages?
$barType = 'fluid';			// Bar layout
$barWidth = '960';			// If set to fixed, enter the width of the bar in pixels
$barAlign = 'center';			// If set to fixed, enter alignment of the bar
$barPadding = '20';			// Padding of bar from the end of the window
$minHeartbeat = '3000';			// Minimum poll-time in milliseconds (1 second = 1000 milliseconds)
$maxHeartbeat = '12000';			// Maximum poll-time in milliseconds
$longNameLength = '';			// The length after which characters will be truncated in long names
$shortNameLength = '';			// The length after which characters will be truncated in short names
$autoLoadModules = '1';			// If set to yes, modules open in previous page, will open in new page
$fullName = '0';			// If set to yes, both first name and last name will be shown in chat conversations
$searchDisplayNumber = '10';			// The number of users in Whos Online list after which search bar will be displayed
$thumbnailDisplayNumber = '40';			// The number of users in Whos Online list after which thumbnails will be hidden
$typingTimeout = '10000';			// The number of milliseconds after which typing to will timeout
$idleTimeout = '300';			// The number of seconds after which user will be considered as idle
$displayOfflineNotification = '1';			// If yes, user offline notification will be displayed
$displayOnlineNotification = '1';			// If yes, user online notification will be displayed
$displayBusyNotification = '1';			// If yes, user busy notification will be displayed
$notificationTime = '5000';			// The number of milliseconds for which a notification will be displayed
$announcementTime = '15000';			// The number of milliseconds for which an announcement will be displayed
$scrollTime = '1';			// Can be set to 800 for smooth scrolling when moving from one chatbox to another
$armyTime = '0';			// If set to yes, show time plugin will use 24-hour clock format
$disableForIE6 = '0';			// If set to yes, CometChat will be hidden in IE6
$disableForMobileDevices = '1';			// If set to yes, CometChat will be hidden in mobile devices
$iPhoneView = '0';			// iPhone style messages in chatboxes? (not compatible with dark theme)
$hideBar = '0';			// Hide bar for non-logged in users?
$startOffline = '0';			// Load bar in offline mode for all first time users?
$fixFlash = '0';			// Set to yes, if Adobe Flash animations/ads are appearing on top of the bar (experimental)
$lightboxWindows = '1';			// Set to yes, if you want to use the lightbox style popups
$sleekScroller = '1';			// Set to yes, if you want to use the new sleek scroller


/* SETTINGS END */

$notificationsFeature = 1;			// Set to yes, only if you are using notifications

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* GUESTS START */

$guestsMode = '0';
$guestnamePrefix = 'Guest';
$guestsList = '3';
$guestsUsersList = '3';


/* GUESTS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* THEME START */

$theme = 'default';

/* THEME END */

if (!empty($_COOKIE[$cookiePrefix."theme"])) {
	$theme = $_COOKIE[$cookiePrefix."theme"];
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* DISPLAYSETTINGS START */

define('DISPLAY_ALL_USERS','0');

/* DISPLAYSETTINGS END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* DISABLEBAR START */

define('BAR_DISABLED','0');

/* DISABLEBAR END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* COMET START */

define('KEY_A','');
define('KEY_B','');
define('KEY_C','');

/* COMET END */

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* ADVANCED */

define('REFRESH_BUDDYLIST','60');		// Time in seconds after which the user's "Who's Online" list is refreshed
define('DISABLE_SMILEYS','0');			// Set to 1 if you want to disable smileys
define('DISABLE_LINKING','0');			// Set to 1 if you want to disable auto linking
define('DISABLE_YOUTUBE','1');			// Set to 1 if you want to disable YouTube thumbnail
define('CACHING_ENABLED','0');			// Set to 1 if you would like to cache CometChat
define('GZIP_ENABLED','1');				// Set to 1 if you would like to compress output of JS and CSS
define('DEV_MODE','0');					// Set to 1 only during development
define('ERROR_LOGGING','0');			// Set to 1 to log all errors (error.log file)
define('ONLINE_TIMEOUT',($maxHeartbeat/1000*2.5));			
										// Time in seconds after which a user is considered offline
define('DISABLE_ANNOUNCEMENTS','0');	// Reduce server stress by disabling announcements
define('DISABLE_ISTYPING','1');			// Reduce server stress by disabling X is typing feature
define('CROSS_DOMAIN','0');				// Do not activate without consulting the CometChat Team

if (CROSS_DOMAIN == 1) { $lightboxWindows = 0; }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Pulls the language file if found

include dirname(__FILE__).DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.'en.php';
if (file_exists(dirname(__FILE__).DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.$lang.'.php')) {
	include dirname(__FILE__).DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.$lang.'.php';
}

if (!defined('DB_AVATARFIELD')) {
define('DB_AVATARTABLE','');
define('DB_AVATARFIELD',"''");
}