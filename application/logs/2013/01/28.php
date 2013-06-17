<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-28 00:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 00:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 00:30:09 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 00:30:09 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 00:55:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: textarea_status ~ APPPATH/classes/controller/admin.php [ 357 ]
2013-01-28 00:55:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: textarea_status ~ APPPATH/classes/controller/admin.php [ 357 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(357): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardinfo(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-28 01:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 01:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 01:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 01:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 02:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 02:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 02:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 02:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 03:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 03:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 03:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 03:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 04:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 04:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 04:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 04:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 05:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 05:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 05:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 05:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 06:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 06:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 06:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 06:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 07:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 07:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 07:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 07:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 08:30:07 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 08:30:07 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 09:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 09:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 09:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 09:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(23): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 10:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 10:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 10:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 10:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 10:34:36 --- ERROR: Kohana_Exception [ 0 ]: The file_name property does not exist in the Model_History class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-01-28 10:34:36 --- STRACE: Kohana_Exception [ 0 ]: The file_name property does not exist in the Model_History class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(240): Kohana_ORM->set('file_name', 'E_20130128_003_...')
#1 [internal function]: Controller_Admin->action_transhipment()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-28 10:46:16 --- ERROR: Kohana_Exception [ 0 ]: The cards_count property does not exist in the Model_History class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-01-28 10:46:16 --- STRACE: Kohana_Exception [ 0 ]: The cards_count property does not exist in the Model_History class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(244): Kohana_ORM->set('cards_count', '2')
#1 [internal function]: Controller_Admin->action_transhipment()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-28 11:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 11:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 11:03:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/views/history.php [ 16 ]
2013-01-28 11:03:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/views/history.php [ 16 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(16): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:03:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
2013-01-28 11:03:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(21): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:05:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
2013-01-28 11:05:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(21): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:05:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
2013-01-28 11:05:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(21): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:05:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
2013-01-28 11:05:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(21): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:05:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
2013-01-28 11:05:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_id ~ APPPATH/views/history.php [ 21 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/history.php(21): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-28 11:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 11:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 12:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 12:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 12:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 12:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 13:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 13:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 13:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 13:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 14:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 14:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 14:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 14:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 15:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 15:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 15:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 15:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 16:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 16:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 16:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 16:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 17:00:06 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 17:00:06 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 17:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 17:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 18:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 18:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 18:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 18:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 19:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 19:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 19:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 19:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 20:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 20:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 20:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 20:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 21:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 21:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 21:30:11 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 21:30:11 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 22:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 22:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 22:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 22:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 23:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 23:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 23:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-28 23:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #91, 'Download/E_2012...', 'Download/E_2012...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(82): ssh2_scp_recv('Download/E_2012...', 'Download/E_2012...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/download.php(25): Kohana_SSH_SCP->receive()
#3 [internal function]: Controller_Download->action_download(Object(Controller_Download))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}