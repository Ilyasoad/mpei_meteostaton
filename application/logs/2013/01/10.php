<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-10 00:34:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/E.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2013-01-10 00:34:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/Upload/E.SND ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2013-01-10 00:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-10 00:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-10 11:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-10 11:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-10 11:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 17:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-10 17:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/svarog/data/www/obicardroyting.141592.org/index.php(109): Kohana_Request->execute()
#1 {main}