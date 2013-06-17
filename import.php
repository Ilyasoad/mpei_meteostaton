<?php //defined('SYSPATH') or die('No direct script access.');
/**
 * @var array    $files
 * @var array    $errors
 * @var string   $message
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 */
//var_dump($_POST);
if($_POST['proverka']=="lyr5ic7El5tSmpn"){
    $request_name=$_POST['request_name'];
    $request_id=$_POST['request_id'];
    /**
     * @author soadilya
     * @copyright 2012
     */
    /*
    // разкомментируйте строки ниже, если файл не будет загружаться
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    */

//стандартный заголовок, которого обычно хватает
    header('Content-Type: text/x-csv; charset=utf-8');
    header("Content-Disposition: attachment;filename=".$request_name.".xls");
    header("Content-Transfer-Encoding: binary ");
    /*
    // Теперь можно выводить ранее полученные данные, будь то из MySQL
    // будь то из файла, или же полученные в работе скрипта...
    // для начала лучше использовать стандартную
    // шапку для HTML страницы под вашу кодировку, к примеру utf-8
    // чтобы корректно отображалась кириллица в EXCEL
    // так же убедитесь что сам файл скрипта установлен в соответствующей
    кодировке это можно посмотреть в любом PHP редакторе
    // итак, шапка страницы:
    */

    /*$csv_output ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="soadilya" />
<title>obi</title>
</head>
<body>';*/

//Подключаем db
    $mysql_database="obi_base"; //Имя базы данных
    $mysql_username="svarog"; //Имя пользователя базы данных
    $mysql_password="Am20010408ceq"; //Пароль пользователя базы данных
    $mysql_host="localhost"; //Сервер базы данных
    $dbpf="prefix";

//соединение с базой данных при помощи функции mysql_connect()
//в аргументах функции укажите имя сервера, логин и пароль.
    $db = mysql_connect($mysql_host, $mysql_username, $mysql_password);

//функция mysql_select_db() выбирает текущую
//базу данных с именем $mysql_database
    mysql_select_db($mysql_database ,$db);

//Выяснение кодировки запросов, при необходимости раскоментировать echo
    $charset = mysql_client_encoding($db);
//echo($charset);

//функция mysql_query() выполняет запрос на выборку данных
//результирующий набор данных хранится в переменной $sql
    /*  $sql = mysql_query("SELECT *
    FROM  `product`
    WHERE  `description` NOT
    IN (
    ' '

    )

    ",$db);
    */
//Меняем кодировку запроса

    $sql = mysql_query("SET NAMES utf8",$db);

    //echo($charset);
    $sql = mysql_query("SELECT * FROM `cards` WHERE `request_id`= $request_id ",$db); //|| die(mysql_error());

    //echo mysql_error();
    $num_rows =  mysql_num_rows($sql);
    //var_dump($sql);
    //echo("SELECT * FROM `cards` WHERE 1");
//Рисуем заголовок
    $output ='<tr>
          <td>Номер карты</td>
          <td>Запрос по карте произведен</td>
          <td>Статус</td>
          <td>Тип дизайна</td>
          <td>Номер типа дизайна</td>
          <td>Номер партии</td>
          <td>PIN</td>
          <td>Дополнительная информация</td>
          <td>Номер эмитента</td>
          <td>Номинал карты</td>
          <td>Скидка</td>
          </tr>';
//Дополняем таблицу НЕ ПУСТЫМИ значениями, сделано 2 защиты.
    $i1=0;
    while($row = mysql_fetch_array($sql))
    {
        //var_dump($row);
        $output .='<tr>';

        //Столбец id
        $output .='<td>'.$row['card_num'].'</td>';
        $output .='<td>'.$row['send'].'</td>';
        $output .='<td>'.$row['status'].'</td>';
        $output .='<td>'.$row['design_num'].'</td>';
        $output .='<td>'.$row['design_type'].'</td>';
        $output .='<td>'.$row['lot_number'].'</td>';
        $output .='<td>'.$row['pin_code'].'</td>';
        $output .='<td>'.$row['additonal_info'].'</td>';
        $output .='<td>'.$row['issuer_number'].'</td>';
        $output .='<td>'.$row['card_denomination'].'</td>';
        $output .='<td>'.$row['discount'].'</td>';

        $output .='</tr>';

        $i1++;
    }
// Теперь данные в виде таблицы:
    $csv_output .='<table border="1">'.$output.'</table>';

// закрываем тело страницы
    $csv_output .='</body></html>';
// И наконец выгрузка в EXCEL - что в скрипте как обычный вывод
    echo $csv_output;
    /*
    // браузер выдаст окно на запрос загрузки и сохранения файла
    // скрипт готов, пользуйтесь на здоровье !
    // при перепечатке оставляйте ссылку на сайт zapishi.net :)
    // Регистрируйтесь и публикуйте свои материалы на сайте - поможем друг
    другу получить больше новых знаний! :)
    */

//закрытие соединение (рекомендуется)
    mysql_close($db);}else{
    echo("Хакер, ты пьян, уходи");
};
?>