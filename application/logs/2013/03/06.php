<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-06 00:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 00:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 00:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 00:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 01:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 01:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 01:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 01:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 02:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 02:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 02:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 02:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 03:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 03:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 03:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 03:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 04:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 04:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 04:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 04:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 05:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 05:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 05:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 05:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 06:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 06:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 06:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 06:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 07:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 07:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 07:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 07:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 08:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 08:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 09:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 09:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 09:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 09:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 10:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 10:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 10:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 10:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(28): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 12:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 12:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 13:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 13:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 13:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 13:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 14:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 14:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 14:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 14:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 14:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/demos/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-06 14:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-06 14:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 14:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 14:40:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 72 ]
2013-03-06 14:40:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 72 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(72): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:40:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 72 ]
2013-03-06 14:40:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 72 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(72): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:41:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 73 ]
2013-03-06 14:41:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 73 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(73): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:46:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 73 ]
2013-03-06 14:46:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id_next ~ APPPATH/classes/controller/download.php [ 73 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(73): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:48:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 10' at line 1 [ UPDATE `requests` SET `count_0`=`count_0`+10 AND `count_1`=`count_1`+10 WHERE `id`= LIMIT 10  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-06 14:48:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 10' at line 1 [ UPDATE `requests` SET `count_0`=`count_0`+10 AND `count_1`=`count_1`+10 WHERE `id`= LIMIT 10  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `request...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(77): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Download->action_download()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-06 14:57:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%E_20130306% AND `additional_information` = 'SG' AND `cart_count`='10'' at line 1 [ SELECT `id` FROM `requests` WHERE `name_request` LIKE %E_20130306% AND `additional_information` = 'SG' AND `cart_count`='10'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-06 14:57:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%E_20130306% AND `additional_information` = 'SG' AND `cart_count`='10'' at line 1 [ SELECT `id` FROM `requests` WHERE `name_request` LIKE %E_20130306% AND `additional_information` = 'SG' AND `cart_count`='10'  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(61): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Download->action_download()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-06 14:58:47 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 62 ]
2013-03-06 14:58:47 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 62 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(62): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:59:23 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 62 ]
2013-03-06 14:59:23 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 62 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(62): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 14:59:45 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 63 ]
2013-03-06 14:59:45 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 63 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 15:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 15:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 15:02:55 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 67 ]
2013-03-06 15:02:55 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 67 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 15:03:47 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 65 ]
2013-03-06 15:03:47 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH/classes/controller/download.php [ 65 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(65): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-06 15:05:54 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `cards` (`card_code`, `card_num`, `lot_number`, `status`, `request_id`) VALUES ('209916689942834431', '16689942834431', ('209916689942834431', 'RU', '4896', '9571'), 0, '1756') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-06 15:05:54 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `cards` (`card_code`, `card_num`, `lot_number`, `status`, `request_id`) VALUES ('209916689942834431', '16689942834431', ('209916689942834431', 'RU', '4896', '9571'), 0, '1756') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(93): Kohana_ORM->create()
#3 [internal function]: Controller_Download->action_download()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-06 15:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 15:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 16:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 16:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 16:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 16:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 17:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 17:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 17:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 17:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 17:54:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-06 17:54:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'count_' in 'field list' [ UPDATE `requests` SET `count_`=`count_`+0 WHERE `id`=0 LIMIT 1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `request...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(370): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_requestcansel()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-06 18:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 18:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 18:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 18:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 19:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 19:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 19:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 19:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 20:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 20:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 20:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 20:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 21:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 21:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 21:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 21:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 22:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 22:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 22:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 22:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 23:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 23:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-06 23:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-06 23:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20130306_001_SG.ERR): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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