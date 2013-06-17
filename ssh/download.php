<?php

/**
 * @author soadilya
 * @copyright 2012
 */
 print_r($_POST['files']);
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
                $file_dir=exec_ssh ($con,"ls");
                echo exec_ssh ($con,"cd /root/Down*; ls");
                
                $file_dir=exec_ssh ($con,"cd /root/Down*; ls");;
                $files=(explode(' ', $file_dir));
                $_POST['files']=$files;
                
                
                array_shift($files); // удаляем из массива '.'
                //array_shift($files); // удаляем из массива '..'
                //var_dump($files);
                /*foreach ($files as $file => $value) {
                    //$content[$value]=exec_ssh($con,"cat {$file[$value]}");
                    
                    echo 'файл'.$value;
                    //exec_ssh($con,"cat {$file[$value]}");
                    };*/
                
                };
        };
echo isset($data);
return $files;
?>