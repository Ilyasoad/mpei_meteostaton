<?php

/**
 * @author soadilya
 * @copyright 2012
 */
 $host = "37.1.192.35";
 $user = "root";
 $pass = "tNva5trCm2";
 global $con;
 function exec_ssh ($con,$command){
    if (!$stream = ssh2_exec($con, $command)){
            die ("fuck");
        }else{
            stream_set_blocking($stream, true);
            $data = "";
            while($o = fgets($stream)){
                $data .=" ".$o;
            };
        fclose($stream);
    };
    return $data;
 };
 if (!function_exists("ssh2_connect")) die ("function ssh2_connect doesn't exist");
 if(!($con = ssh2_connect($host, 22))){
            echo "unable to connect\n";
    } else {
        if(!ssh2_auth_password($con, $user, $pass)) {
                echo "unable to auth\n";
            } else {
                $dir = "/var/www/svarog/data/www/obicardroyting.141592.org/Upload";   //задаём имя директории
                if(is_dir($dir)) {   //проверяем наличие директории
                    echo $dir.' - директория существует;<br>'; 
                    $files = scandir($dir);    //сканируем (получаем массив файлов)
                    array_shift($files); // удаляем из массива '.'
                    array_shift($files); // удаляем из массива '..'
                    var_dump($files);
                    for($i=0; $i<sizeof($files); $i++){
                           $instruction="pscp -pw tNva5trCm2 -r $dir/$files[$i] root@37.1.192.35:/Uplo*";
                           echo $instruction;
                           echo exec_ssh ($con,$instruction) or die("fuck");        //выводим все файлы
                    };
                } else echo $dir.' -такой директории нет;<br>';
                
                /*exec_ssh ($con,"ls");
                echo '-файл: '.$files[$i].';<br>';
                $file_dir=exec_ssh ($con,"cd Uplo*;ls");
                $files=(explode(' ', $file_dir));
                foreach ($files as $file => $value) {
                    $content[$value]=exec_ssh($con,"cat {$file[$value]}");
                    echo 'kjpji'.$content[$value];
                    exec_ssh($con,"cat {$file[$value]}");
                };*/
        };
    };
echo isset($data);
?>