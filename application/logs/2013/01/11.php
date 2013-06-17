<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-11 09:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 09:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 09:48:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
2013-01-11 09:48:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(75): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 09:57:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
2013-01-11 09:57:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(249): Kohana_View->render()
#4 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-11 10:02:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
2013-01-11 10:02:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(75): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(248): Kohana_View->render()
#8 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 10:06:10 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-01-11 10:06:10 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(239): Kohana_View->__get('content')
#1 [internal function]: Controller_Admin->action_changestatus()
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 10:06:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
2013-01-11 10:06:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(242): Kohana_View->render()
#4 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-11 10:13:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
2013-01-11 10:13:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/index.php [ 97 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(242): Kohana_View->render()
#4 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-11 10:16:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
2013-01-11 10:16:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/changestatus.php [ 75 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(75): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 11:11:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 135 ]
2013-01-11 11:11:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 135 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(135): Kohana_Core::error_handler()
#1 [internal function]: Controller_Files->action_clear(Object(Controller_Files))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 11:13:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
2013-01-11 11:13:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(136): Kohana_Core::error_handler()
#1 [internal function]: Controller_Files->action_clear(Object(Controller_Files))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 11:16:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
2013-01-11 11:16:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(136): Kohana_Core::error_handler()
#1 [internal function]: Controller_Files->action_clear(Object(Controller_Files))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 11:27:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
2013-01-11 11:27:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(136): Kohana_Core::error_handler()
#1 [internal function]: Controller_Files->action_clear(Object(Controller_Files))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 11:28:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
2013-01-11 11:28:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/files.php [ 136 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(136): Kohana_Core::error_handler()
#1 [internal function]: Controller_Files->action_clear(Object(Controller_Files))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-11 11:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 11:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 12:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/files.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 12:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/files.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 14:30:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/views/changestatus.php [ 42 ]
2013-01-11 14:30:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/views/changestatus.php [ 42 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(42): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 14:31:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  textarea ~ APPPATH/views/changestatus.php [ 42 ]
2013-01-11 14:31:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  textarea ~ APPPATH/views/changestatus.php [ 42 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(42): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 14:33:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  textarea ~ APPPATH/views/changestatus.php [ 42 ]
2013-01-11 14:33:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  textarea ~ APPPATH/views/changestatus.php [ 42 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/changestatus.php(42): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/index.php(97): Kohana_View->__toString('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-11 14:35:43 --- ERROR: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 14:35:43 --- STRACE: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50efdaa02ec35G....', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:09 --- ERROR: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:32:09 --- STRACE: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50efdaa02ec35G....', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:32:10 --- ERROR: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:32:10 --- STRACE: ErrorException [ 2 ]: fopen(50efdaa02ec35G.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50efdaa02ec35G....', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:32:17 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:32:17 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:32:18 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:32:18 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:34:47 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:34:47 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:34:48 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:34:48 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:34:54 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:34:54 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:34:56 --- ERROR: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
2013-01-11 19:34:56 --- STRACE: ErrorException [ 2 ]: fopen(50f03e8d2c7ebds1_SG.SND) [function.fopen]: failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/controller/admin.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler('50f03e8d2c7ebds...', 'r')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(230): fopen()
#2 [internal function]: Controller_Admin->action_changestatus(Object(Controller_Admin))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-11 19:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-11 19:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-11 19:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}