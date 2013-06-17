<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-29 00:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 00:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 00:30:06 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 00:30:06 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 01:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 01:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 01:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 01:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 02:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 02:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 02:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 02:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 03:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 03:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 03:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 03:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 04:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 04:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 04:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 04:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 05:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 05:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 05:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 05:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 06:00:06 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 06:00:06 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 06:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 06:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 07:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 07:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 07:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 07:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 08:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 08:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 09:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 09:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 09:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 09:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 10:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 10:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 10:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 10:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 11:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 11:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 11:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 11:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 12:00:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 12:00:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 12:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 12:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 13:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 13:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 13:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 13:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 14:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 14:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 14:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 14:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 15:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 15:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 15:30:08 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 15:30:08 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 16:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 16:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 16:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-29 16:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 16:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 16:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 17:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 17:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 17:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 17:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 18:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 18:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 18:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 18:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 19:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 19:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 19:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 19:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 20:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 20:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 20:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 20:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 21:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 21:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 21:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 21:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 22:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 22:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 22:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 22:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 23:00:11 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 23:00:11 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-29 23:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-29 23:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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