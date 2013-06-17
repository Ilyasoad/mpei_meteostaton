<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-16 10:16:45 --- ERROR: ErrorException [ 1 ]: Call to undefined function filename() ~ APPPATH/classes/controller/admin.php [ 122 ]
2013-01-16 10:16:45 --- STRACE: ErrorException [ 1 ]: Call to undefined function filename() ~ APPPATH/classes/controller/admin.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-16 10:17:11 --- ERROR: ErrorException [ 1 ]: Call to undefined function filename() ~ APPPATH/classes/controller/admin.php [ 122 ]
2013-01-16 10:17:11 --- STRACE: ErrorException [ 1 ]: Call to undefined function filename() ~ APPPATH/classes/controller/admin.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-16 10:18:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 108 ]
2013-01-16 10:18:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: csv_cont ~ APPPATH/classes/controller/admin.php [ 108 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(108): Kohana_Core::error_handler()
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(122): Controller_Admin->filename()
#2 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-16 10:20:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: UTC ~ APPPATH/classes/controller/admin.php [ 123 ]
2013-01-16 10:20:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: UTC ~ APPPATH/classes/controller/admin.php [ 123 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-16 15:51:28 --- ERROR: Database_Exception [ 1146 ]: Table 'obi_base.cartses' doesn't exist [ SHOW FULL COLUMNS FROM `cartses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-16 15:51:28 --- STRACE: Database_Exception [ 1146 ]: Table 'obi_base.cartses' doesn't exist [ SHOW FULL COLUMNS FROM `cartses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('cartses')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(10): Kohana_ORM::factory('carts')
#7 [internal function]: Controller_Welcome->action_index()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-16 15:52:41 --- ERROR: Database_Exception [ 1146 ]: Table 'obi_base.cartses' doesn't exist [ SHOW FULL COLUMNS FROM `cartses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-16 15:52:41 --- STRACE: Database_Exception [ 1146 ]: Table 'obi_base.cartses' doesn't exist [ SHOW FULL COLUMNS FROM `cartses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('cartses')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(10): Kohana_ORM::factory('carts')
#7 [internal function]: Controller_Welcome->action_index()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-16 15:52:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:52:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 15:53:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:53:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 15:53:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:53:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 15:53:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:53:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 15:54:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:54:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 15:59:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 15:59:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 16:28:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 16:28:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart')
#1 {main}
2013-01-16 16:35:49 --- ERROR: Database_Exception [ 1146 ]: Table 'obi_base.cart' doesn't exist [ SHOW FULL COLUMNS FROM `cart` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-16 16:35:49 --- STRACE: Database_Exception [ 1146 ]: Table 'obi_base.cart' doesn't exist [ SHOW FULL COLUMNS FROM `cart` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('cart')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(10): Kohana_ORM::factory('cart')
#7 [internal function]: Controller_Welcome->action_index()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-16 16:46:18 --- ERROR: Database_Exception [ 1146 ]: Table 'obi_base.cart' doesn't exist [ SHOW FULL COLUMNS FROM `cart` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-16 16:46:18 --- STRACE: Database_Exception [ 1146 ]: Table 'obi_base.cart' doesn't exist [ SHOW FULL COLUMNS FROM `cart` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('cart')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/welcome.php(10): Kohana_ORM::factory('cart')
#7 [internal function]: Controller_Welcome->action_index()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-16 16:58:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Card' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 16:58:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Card' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('card', 1)
#1 {main}
2013-01-16 16:59:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 16:59:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart', 1)
#1 {main}
2013-01-16 17:00:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-01-16 17:00:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cart' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('cart', 1)
#1 {main}