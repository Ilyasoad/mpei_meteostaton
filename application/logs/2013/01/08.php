<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-08 17:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-08 17:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-08 17:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-08 17:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-08 17:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-08 17:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-08 17:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-08 17:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-08 17:16:16 --- ERROR: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-08 17:16:16 --- STRACE: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(137): Kohana_View->set_filename('files')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(30): Kohana_View->__construct('files', NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(32): Kohana_View::factory('files')
#3 [internal function]: Controller_Files->action_view()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 17:18:33 --- ERROR: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-08 17:18:33 --- STRACE: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(137): Kohana_View->set_filename('files')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(30): Kohana_View->__construct('files', NULL)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(32): Kohana_View::factory('files')
#3 [internal function]: Controller_Files->action_view()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 22:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-08 22:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-08 22:37:12 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 22:37:12 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2013-01-08 23:04:26 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
2013-01-08 23:04:26 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/route.php(192): Kohana_Route::get('content')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Route::url('content', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-08 23:05:32 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
2013-01-08 23:05:32 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/route.php(192): Kohana_Route::get('content')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Route::url('content', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-08 23:05:45 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
2013-01-08 23:05:45 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: content ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/route.php(192): Kohana_Route::get('content')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Route::url('content', Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#3 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_view()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-08 23:06:32 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:06:32 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:06:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:06:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:06:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:06:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:08:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:08:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:08:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:08:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:38 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:38 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:38 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:38 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:50 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:50 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:09:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:09:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec75668241bG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:10:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-08 23:10:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/50ec7c4dacd7eE_20120503_001_SG.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/svarog...')
#1 /var/www/svarog/data/www/obicardroyting.141592.org/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/svarog...')
#2 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(81): Kohana_Image::factory('/var/www/svarog...')
#3 [internal function]: Controller_Files->action_preview()
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-08 23:55:28 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/files.php [ 35 ]
2013-01-08 23:55:28 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/files.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/svarog...', Array)
#1 {main}
2013-01-08 23:56:25 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH/classes/kohana/response.php [ 206 ]
2013-01-08 23:56:25 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH/classes/kohana/response.php [ 206 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/response.php(206): array_key_exists(Array)
#2 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(953): Kohana_Response->status('content', Array)
#3 /var/www/svarog/data/www/obicardroyting.141592.org/application/views/files.php(35): Kohana_Request->redirect('/var/www/svarog...', Array)
#4 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(61): include('/var/www/svarog...')
#5 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/view.php(343): Kohana_View::capture()
#6 /var/www/svarog/data/www/obicardroyting.141592.org/application/classes/controller/files.php(58): Kohana_View->render()
#7 [internal function]: Controller_Files->action_view(Object(Controller_Files))
#8 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/svarog/data/www/obicardroyting.141592.org/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#12 {main}