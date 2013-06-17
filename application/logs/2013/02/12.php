<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-12 15:20:41 --- ERROR: ErrorException [ 2 ]: ssh2_scp_send() [function.ssh2-scp-send]: Failure creating remote file: failed to send file ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 71 ]
2013-02-12 15:20:41 --- STRACE: ErrorException [ 2 ]: ssh2_scp_send() [function.ssh2-scp-send]: Failure creating remote file: failed to send file ~ MODPATH/ssh/classes/kohana/ssh/scp.php [ 71 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #103, 'Upload/E_201302...', '/var/www/obi/da...', 493)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/ssh/classes/kohana/ssh/scp.php(71): ssh2_scp_send('Upload/E_201302...', '/var/www/obi/da...', 493)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(268): Kohana_SSH_SCP->send()
#3 [internal function]: Controller_Admin->action_send(Object(Controller_Admin))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-12 15:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-12 15:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-12 15:21:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  file_name ~ APPPATH/classes/controller/admin.php [ 259 ]
2013-02-12 15:21:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  file_name ~ APPPATH/classes/controller/admin.php [ 259 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(259): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_send(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-12 15:22:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:22:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:23:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1714' AND `status` = '2' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:23:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1714' AND `status` = '2' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:23:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:23:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:23:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:23:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:24:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:24:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:26:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:26:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:27:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  0 ~ APPPATH/classes/controller/admin.php [ 220 ]
2013-02-12 15:27:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  0 ~ APPPATH/classes/controller/admin.php [ 220 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(220): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-12 15:28:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:28:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-12 15:29:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-02-12 15:29:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `card`.* FROM `cards` AS `card` WHERE `request_id` = '1700' AND `status` = '0' AND `send` = 0 LIMIT  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `card`.*...', 'Model_Card', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(142): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin->action_transhipment()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}