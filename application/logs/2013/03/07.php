<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-07 00:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 00:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 00:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 00:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 01:01:54 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 01:01:54 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 01:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 01:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 02:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 02:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 02:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 02:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 03:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 03:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 03:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 03:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 03:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-07 03:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-07 03:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-07 03:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-07 03:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-07 03:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-07 04:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 04:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 04:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 04:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 05:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 05:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 05:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 05:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 06:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 06:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 06:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 06:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 07:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 07:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 07:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 07:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 08:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 08:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 09:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 09:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 09:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 09:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 10:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 10:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 10:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 10:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 11:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 11:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 11:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 11:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 12:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 12:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 12:06:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 266 ]
2013-03-07 12:06:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 266 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(266): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-07 12:22:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  0 ~ APPPATH/classes/controller/admin.php [ 256 ]
2013-03-07 12:22:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  0 ~ APPPATH/classes/controller/admin.php [ 256 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(256): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-07 12:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 12:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 13:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 13:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 13:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 13:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 14:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 14:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 14:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 14:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-07 14:37:46 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 345 ]
2013-03-07 14:37:46 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 345 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(345): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_requestcansel(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-07 14:38:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 345 ]
2013-03-07 14:38:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 345 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(345): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_requestcansel(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-07 14:38:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-07 14:38:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `request...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(366): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_requestcansel()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-07 14:38:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-07 14:38:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `request...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(366): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_requestcansel()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-07 15:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-07 15:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2013...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2013...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}