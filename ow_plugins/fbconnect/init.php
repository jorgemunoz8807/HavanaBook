<?php

/**
 * This software is intended for use with Oxwall Free Community Software http://www.oxwall.org/ and is
 * licensed under The BSD license.

 * ---
 * Copyright (c) 2011, Oxwall Foundation
 * All rights reserved.

 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and
 *  the following disclaimer.
 *
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and
 *  the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 *  - Neither the name of the Oxwall Foundation nor the names of its contributors may be used to endorse or promote products
 *  derived from this software without specific prior written permission.

 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
$plugin = OW::getPluginManager()->getPlugin('fbconnect');

function FBCONNECT_Autoloader( $className )
{
    if ( strpos($className, 'FBCONNECT_FC_') === 0 )
    {
        $file = OW::getPluginManager()->getPlugin('fbconnect')->getRootDir() . DS . 'classes' . DS . 'converters.php';
        require_once $file;

        return true;
    }
}
spl_autoload_register('FBCONNECT_Autoloader');

OW::getRouter()->addRoute(new OW_Route('fbconnect_login', 'facebook-connect/login', 'FBCONNECT_CTRL_Connect', 'login'));
OW::getRouter()->addRoute(new OW_Route('fbconnect_synchronize', 'facebook-connect/synchronize', 'FBCONNECT_CTRL_Connect', 'synchronize'));
OW::getRouter()->addRoute(new OW_Route('fbconnect_xd_receiver', 'fbconnect_channel.html', 'FBCONNECT_CTRL_Connect', 'xdReceiver'));

$route = new OW_Route('fbconnect_configuration', 'admin/plugins/fbconnect', 'FBCONNECT_CTRL_Admin', 'index');
OW::getRouter()->addRoute($route);

$route = new OW_Route('fbconnect_configuration_fields', 'admin/plugins/fbconnect/fields', 'FBCONNECT_CTRL_Admin', 'fields');
OW::getRouter()->addRoute($route);

$route = new OW_Route('fbconnect_configuration_settings', 'admin/plugins/fbconnect/settings', 'FBCONNECT_CTRL_Admin', 'settings');
OW::getRouter()->addRoute($route);

$registry = OW::getRegistry();
$registry->addToArray(BASE_CTRL_Join::JOIN_CONNECT_HOOK, array(new FBCONNECT_CMP_ConnectButton(), 'render'));
$registry->addToArray(BASE_CTRL_Edit::EDIT_SYNCHRONIZE_HOOK, array(new FBCONNECT_CMP_SynchronizeButton(), 'render'));

$eventHandler = new FBCONNECT_CLASS_EventHandler();
$eventHandler->init();