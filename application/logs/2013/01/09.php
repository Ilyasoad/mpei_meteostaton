<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-09 00:02:41 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
2013-01-09 00:02:41 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(56): Kohana_Core::error_handler('content', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request::factory('/var/www/svarog...', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 00:03:29 --- ERROR: ErrorException [ 1 ]: Call to a member function matches() on a non-object ~ SYSPATH/classes/kohana/request.php [ 567 ]
2013-01-09 00:03:29 --- STRACE: ErrorException [ 1 ]: Call to a member function matches() on a non-object ~ SYSPATH/classes/kohana/request.php [ 567 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('content', Array)
#1 {main}
2013-01-09 00:04:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: cache ~ APPPATH/views/files.php [ 35 ]
2013-01-09 00:04:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: cache ~ APPPATH/views/files.php [ 35 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#4 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-09 00:05:08 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
2013-01-09 00:05:08 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(56): Kohana_Core::error_handler('content', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request::factory('/var/www/svarog...', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 00:18:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HTTP_Cache - assumed 'HTTP_Cache' ~ APPPATH/views/files.php [ 35 ]
2013-01-09 00:18:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HTTP_Cache - assumed 'HTTP_Cache' ~ APPPATH/views/files.php [ 35 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Core::error_handler('/var/www/svarog...', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#4 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-09 00:21:37 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/request.php [ 916 ]
2013-01-09 00:21:37 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/request.php [ 916 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(916): Kohana_Core::error_handler(Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(37): Kohana_Request->param('/var/www/svarog...', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 00:22:11 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
2013-01-09 00:22:11 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 00:22:55 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
2013-01-09 00:22:55 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 00:28:53 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
2013-01-09 00:28:53 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 00:30:19 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
2013-01-09 00:30:19 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 00:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-09 00:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(36): Kohana_Request->execute()
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#5 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#6 [internal function]: Controller_Files->action_view()
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-09 00:38:53 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, string given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
2013-01-09 00:38:53 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, string given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(56): Kohana_Core::error_handler('content', '50ec7c4dacd7eE_...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request::factory('/var/www/svarog...', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 14:07:45 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: preview ~ SYSPATH/classes/kohana/route.php [ 106 ]
2013-01-09 14:07:45 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: preview ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/route.php(192): Kohana_Route::get('preview')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Route::url('preview', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 14:08:08 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:08 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:08 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:08 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:08 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:08 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:08:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:08:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:09:53 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:09:53 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:09:53 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:09:53 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:09:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:09:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-09 14:15:03 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: preview ~ SYSPATH/classes/kohana/route.php [ 106 ]
2013-01-09 14:15:03 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: preview ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/route.php(192): Kohana_Route::get('preview')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Route::url('preview', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 14:17:32 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
2013-01-09 14:17:32 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Request::factory() must be an instance of HTTP_Cache, array given, called in /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php on line 35 and defined ~ SYSPATH/classes/kohana/request.php [ 56 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(56): Kohana_Core::error_handler('content', Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request::factory('/var/www/svarog...', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 14:18:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Route::factory() ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:18:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Route::factory() ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:21:50 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:21:50 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:31:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:31:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:33:24 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:33:24 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:33:57 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:33:57 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:36:44 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:36:44 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:37:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::excute() ~ APPPATH/views/files.php [ 35 ]
2013-01-09 14:37:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::excute() ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-09 14:37:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:37:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#10 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#11 [internal function]: Controller_Files->action_view()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-09 14:41:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:41:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#10 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#11 [internal function]: Controller_Files->action_view()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-09 14:43:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 14:43:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec960f36cb6eew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#10 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#11 [internal function]: Controller_Files->action_view()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-09 18:39:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ed8f1830eadeew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-09 18:39:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ed8f1830eadeew1_wG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(79): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request->execute()
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#10 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#11 [internal function]: Controller_Files->action_view()
#12 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-09 20:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 20:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 20:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 20:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 20:36:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/classes/controller/admin.php [ 154 ]
2013-01-09 20:36:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: textarea ~ APPPATH/classes/controller/admin.php [ 154 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/admin.php(154): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_transhipment(Object(Controller_Admin))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-09 21:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 21:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 21:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 21:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 23:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 23:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}