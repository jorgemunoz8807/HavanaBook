<?php
//CHATROOMS_CTRL_postmsg
OW::getRouter()->addRoute(new OW_Route('chatroomstb.index', 'chatrooms/:chat', "CHATROOMS_CTRL_Index", 'index'));
OW::getRouter()->addRoute(new OW_Route('chatroomsx.index', 'chatrooms/', "CHATROOMS_CTRL_Index", 'index'));
OW::getRouter()->addRoute(new OW_Route('chatroomsbye.index', 'chatrooms/bye/bye', "CHATROOMS_CTRL_Bye", 'index'));

OW::getRouter()->addRoute(new OW_Route('chatroomsxx.index', 'chatrooms/admin/setup', "CHATROOMS_CTRL_Setup", 'index'));
OW::getRouter()->addRoute(new OW_Route('chatroomsxy.index', 'chatrooms/admin/setup/unblock', "CHATROOMS_CTRL_Setup", 'unblock'));
OW::getRouter()->addRoute(new OW_Route('chatroomsxc.index', 'chatrooms/admin/setup/block', "CHATROOMS_CTRL_Setup", 'block'));


OW::getRouter()->addRoute(new OW_Route('chat.index', 'chatrooms/chat/:chat', "CHATROOMS_CTRL_Chat", 'index'));
OW::getRouter()->addRoute(new OW_Route('getchat.index', 'chatrooms/getchat/:chat', "CHATROOMS_CTRL_Get", 'index'));
OW::getRouter()->addRoute(new OW_Route('getuser.index', 'chatrooms/getuser/:chat', "CHATROOMS_CTRL_User", 'index'));






?>