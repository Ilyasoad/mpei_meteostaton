<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-03 21:01:02 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-03-03 21:01:02 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
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
2013-03-03 21:31:02 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-03-03 21:31:02 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
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
2013-03-03 22:01:02 --- ERROR: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
2013-03-03 22:01:02 --- STRACE: ErrorException [ 2 ]: ssh2_connect(): Unable to connect to 87.251.154.146 on port 22 ~ MODPATH/ssh/classes/kohana/ssh.php [ 77 ]
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