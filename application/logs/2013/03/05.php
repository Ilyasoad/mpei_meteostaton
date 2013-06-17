<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-05 00:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 00:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 00:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 00:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 01:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 01:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 01:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 01:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 02:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 02:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 02:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 02:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 03:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 03:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 03:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 03:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 04:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 04:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 04:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 04:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 05:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 05:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 05:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 05:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 06:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 06:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 06:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 06:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 07:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 07:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 07:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 07:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 08:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 08:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 09:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 09:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 09:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 09:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 09:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-05 09:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 10:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 10:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, '/home/obi/data/...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('/home/obi/data/...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(27): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-05 10:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 10:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 10:45:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
2013-03-05 10:45:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-05 10:51:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
2013-03-05 10:51:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-05 10:52:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
2013-03-05 10:52:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/classes/controller/download.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-05 11:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 11:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 11:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 11:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 12:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 12:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 12:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 12:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 13:00:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 13:00:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 13:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 13:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 14:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 14:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 14:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 14:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 15:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 15:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 15:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 15:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 16:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 16:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 16:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 16:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 17:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 17:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 17:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 17:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 18:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 18:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 18:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 18:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 19:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 19:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 19:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 19:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 20:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 20:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 20:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 20:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 21:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 21:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 21:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 21:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 22:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 22:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 22:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 22:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 23:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 23:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-03-05 23:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-03-05 23:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120810_001_SG.OK): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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