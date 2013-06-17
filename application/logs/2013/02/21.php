<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-21 11:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-21 11:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-21 11:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-21 11:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-21 14:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 14:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 14:30:01 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 14:30:01 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 15:00:46 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 15:00:46 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 15:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 15:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 16:00:01 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 16:00:01 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 16:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 16:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-21 17:00:11 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-02-21 17:00:11 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Error starting up SSH connection(-43): Failed sending banner ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
--
#0 [internal function]: Kohana_Core::error_handler('87.251.154.146', 22, NULL)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(77): ssh2_connect('87.251.154.146', 'obi', 'oPWk2wPt', 22, NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh.php(55): Kohana_SSH->__construct('87.251.154.146', 'obi', 'oPWk2wPt')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(12): Kohana_SSH::connect()
#4 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}