<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-27 00:00:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 00:00:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 00:30:40 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 00:30:40 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 01:00:07 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 01:00:07 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 01:24:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 206 ]
2013-01-27 01:24:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 206 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(206): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 01:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 01:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 01:54:00 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Update::set() must be an array, string given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php on line 25 and defined ~ MODPATH/database/classes/kohana/database/query/builder/update.php [ 56 ]
2013-01-27 01:54:00 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Update::set() must be an array, string given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php on line 25 and defined ~ MODPATH/database/classes/kohana/database/query/builder/update.php [ 56 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query/builder/update.php(56): Kohana_Core::error_handler('status', 2)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(25): Kohana_Database_Query_Builder_Update->set()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-27 02:00:08 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 02:00:08 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 02:01:21 --- ERROR: Database_Exception [ 1146 ]: Table 'obi_base.request' doesn't exist [ UPDATE `request` SET `count_0` = -2 WHERE `id` = 1701 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-27 02:01:21 --- STRACE: Database_Exception [ 1146 ]: Table 'obi_base.request' doesn't exist [ UPDATE `request` SET `count_0` = -2 WHERE `id` = 1701 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `request...', false, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-27 02:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 02:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 03:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 03:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 03:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 03:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 03:31:48 --- ERROR: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-01-27 03:31:48 --- STRACE: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(360): Kohana_ORM->__get('request_name')
#1 [internal function]: Controller_Admin->action_changestatus()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 03:32:41 --- ERROR: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-01-27 03:32:41 --- STRACE: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(360): Kohana_ORM->__get('request_name')
#1 [internal function]: Controller_Admin->action_changestatus()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 03:37:25 --- ERROR: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-01-27 03:37:25 --- STRACE: Kohana_Exception [ 0 ]: The request_name property does not exist in the Model_Request class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(360): Kohana_ORM->__get('request_name')
#1 [internal function]: Controller_Admin->action_changestatus()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 03:54:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1686' AND `status` = '1' LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-27 03:54:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1686' AND `status` = '1' LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(141): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 03:59:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1686' AND `status` = '1' LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-27 03:59:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1686' AND `status` = '1' LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(141): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 03:59:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 253 ]
2013-01-27 03:59:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 253 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(253): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardinfo(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 04:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 04:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 04:03:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 252 ]
2013-01-27 04:03:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 252 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(252): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardinfo(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 04:24:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: textarea_status ~ APPPATH/classes/controller/admin.php [ 277 ]
2013-01-27 04:24:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: textarea_status ~ APPPATH/classes/controller/admin.php [ 277 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(277): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardinfo(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 04:28:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 253 ]
2013-01-27 04:28:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 253 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(253): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardinfo(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 04:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 04:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 05:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 05:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 05:30:06 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 05:30:06 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 05:40:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 317 ]
2013-01-27 05:40:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 317 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(317): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 05:41:31 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 317 ]
2013-01-27 05:41:31 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 317 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(317): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 05:59:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
2013-01-27 05:59:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(273): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardchange(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 06:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 06:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 06:00:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
2013-01-27 06:00:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(273): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardchange(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 06:00:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
2013-01-27 06:00:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/controller/admin.php [ 273 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(273): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardchange(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 06:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 06:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 06:32:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  card_num ~ APPPATH/classes/controller/admin.php [ 255 ]
2013-01-27 06:32:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  card_num ~ APPPATH/classes/controller/admin.php [ 255 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(255): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_cardchange(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 06:44:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 06:44:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 07:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 07:01:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 380 ]
2013-01-27 07:01:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_name ~ APPPATH/classes/controller/admin.php [ 380 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(380): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:02:17 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 405 ]
2013-01-27 07:02:17 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 405 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(405): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:04:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:04:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:05:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:05:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:05:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/import.php [ 13 ]
2013-01-27 07:05:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/import.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:09:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/import.php [ 7 ]
2013-01-27 07:09:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/import.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:10:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 20 ]
2013-01-27 07:10:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 07:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 07:33:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:33:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:33:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
2013-01-27 07:33:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:33:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
2013-01-27 07:33:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:35:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:35:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:35:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:35:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:37:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:37:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:37:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:37:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:38:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:38:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:39:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:39:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:40:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:40:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:40:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:40:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:41:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
2013-01-27 07:41:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  request_id ~ APPPATH/classes/controller/admin.php [ 379 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(379): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_print_request(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-27 07:41:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
2013-01-27 07:41:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 131 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(131): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-27 07:42:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 377 ]
2013-01-27 07:42:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin.php [ 377 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2013-01-27 07:43:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2013-01-27 07:43:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 07:44:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2013-01-27 07:44:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 07:44:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2013-01-27 07:44:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 07:45:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
2013-01-27 07:45:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 07:45:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
2013-01-27 07:45:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/views/import.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-27 08:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 08:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 08:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/import.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 08:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/import.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 08:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/import.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 08:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/import.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 08:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 08:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 09:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 09:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 09:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 09:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 10:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 10:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 10:30:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 10:30:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 11:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 11:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 11:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 11:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 12:00:05 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 12:00:05 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 12:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 12:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 13:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 13:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 13:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 13:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 14:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 14:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 14:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 14:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 15:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 15:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 15:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 15:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 16:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 16:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 16:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 16:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 17:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 17:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 17:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 17:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 18:00:06 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 18:00:06 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 18:30:04 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 18:30:04 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 19:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 19:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 19:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 19:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 20:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 20:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 20:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 20:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 21:00:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 21:00:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 21:30:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 21:30:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 22:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 22:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 22:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 22:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 23:00:02 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 23:00:02 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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
2013-01-27 23:30:03 --- ERROR: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
2013-01-27 23:30:03 --- STRACE: ErrorException [ 2 ]: ssh2_scp_recv(Download/E_20120807_001_SG.SND): failed to open stream: Нет такого файла или каталога ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 82 ]
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