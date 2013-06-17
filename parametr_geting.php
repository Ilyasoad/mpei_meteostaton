<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 03.05.13
 * Time: 12:46
 * To change this template use File | Settings | File Templates.
 */
//Подключаем db
$mysql_database = "obi_base";       //Имя базы данных
$mysql_username = "svarog";         //Имя пользователя базы данных
$mysql_password = "Am20010408ceq";  //Пароль пользователя базы данных
$mysql_host     = "localhost";      //Сервер базы данных
$dbpf           = "prefix";

//соединение с базой данных при помощи функции mysql_connect()
//в аргументах функции укажите имя сервера, логин и пароль.
$db = mysql_connect($mysql_host, $mysql_username, $mysql_password);

//функция mysql_select_db() выбирает текущую
//базу данных с именем $mysql_database
mysql_select_db($mysql_database ,$db);

//Выяснение кодировки запросов, при необходимости раскоментировать echo
$charset = mysql_client_encoding($db);
//echo($charset);



//Меняем кодировку запроса

$sql = mysql_query("SET NAMES utf8",$db);

//echo($charset);
//функция mysql_query() выполняет запрос на выборку данных
$sql = mysql_query("SELECT * FROM `cards` WHERE `request_id`= $request_id ",$db); //|| die(mysql_error());

if ($handle = opendir(".")) {
    while ($entry = readdir($handle)) {
        if (is_file($entry)) {
            $file_str       = "Download/$entry";
            $rHandle        = fopen($file_str,'r');
            $content        = fread($rHandle, filesize($file_str));

        }
    }
    closedir($handle);
}



