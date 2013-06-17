<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller {

	public function action_download()
	{
        $n=0;
        $history_card="";
        $config = Kohana::$config->load('email');
        Email::connect($config);

	    $connection = SSH::connect('87.251.154.146', 'obi', 'oPWk2wPt');


        $file_dir = $connection->exec('cd /home/obi/data/Download; ls')->output();
        $file_dir = trim($file_dir);
        $files    = explode("\n", $file_dir);
        //array_shift($files); // удаляем из массива '.'
        //array_shift($files); // удаляем из массива '..'
        $mail_list_file     = "";
        $mail_err_list_file = "";
        foreach ($files as $key => $value) {
            if (trim($value)!=""){

                $file_str       = "Download/$value";
                $file_str2      = "/home/obi/data/Download/$value";

                $connection->scp()->receive($file_str2, $file_str) or die("Не получить файл $value");
                $rHandle        = fopen($file_str,'r');
                $content        = fread($rHandle, filesize($file_str));

                if(preg_match('/\.*.OK/',$value)){
                    if(substr($value,0,1) == 'E'){

                        $explode_cont  = explode("\r\n", $content);

                        foreach( $explode_cont as $content ){

                            $explode_cont_next=explode(";", $content);

                            if(count($explode_cont_next) == '1'){
                                $n=substr($explode_cont_next[0],7,1);
                            };

                            if(count($explode_cont_next) == '9'){
                                $name_request           = "E_".substr($explode_cont_next[7],0,4).substr($explode_cont_next[7],5,2).substr($explode_cont_next[7],8,2);
                                $cart_count             = $explode_cont_next[1];
                                $additional_information = $explode_cont_next[6];
                                $card_type              = $explode_cont_next[2];
                                var_dump($explode_cont_next);

                                if(isset($request_id)){
                                    /*$requests=ORM::factory('request')
                                        ->where('name_request', 'LIKE', "%$name_request%")
                                        ->where('additional_information', '=', "$additional_information")
                                        ->where('cart_type', '=', "$card_type")
                                        ->where('cart_count', '=', "$cart_count")
                                        ->limit(1)
                                        ->find_all();
                                    foreach($requests as $request){
                                        $request_id=$request->id;
                                    };*/
                                    $query = DB::query(Database::SELECT, "SELECT `id` FROM `requests` WHERE `name_request` LIKE '%$name_request%' AND `additional_information` = '$additional_information' AND `cart_count`='$cart_count' LIMIT 1 ")->execute()->as_array();
                                    var_dump($query);
                                    $request_id=$query[0]['id'];
                                }else{
                                    var_dump($name_request);
                                    $requests=ORM::factory('request')
                                        ->where('name_request', 'LIKE', "%$name_request%")
                                        ->where('additional_information', '=', "$additional_information")
                                        ->where('cart_type', '=', "$card_type")
                                        ->where('cart_count', '=', "$cart_count")
                                        ->limit(1)
                                        ->find_all();
                                    foreach($requests as $request){
                                        $request_id_next=$request->id;
                                        var_dump($name_request);
                                    };
                                    if($request_id_next==$request_id){$request_id=$request_id+1;}else{$request_id=$request_id_next;}
                                };
                                $card_count=$explode_cont_next[1];
                                DB::query(Database::UPDATE, "UPDATE `requests` SET `count_0`=`count_0`+$card_count AND `count_1`=`count_1`+$card_count WHERE `id`=$request_id LIMIT $card_count ")->execute();
                                //echo "<br />";
                            };
                            $card_num=substr($explode_cont_next[0],4,17);
                            if(count($explode_cont_next)=='4'){
                                $card=ORM::factory('card')
                                    ->set('card_code', $explode_cont_next[0])
                                    ->set('card_num',$card_num )
                                    //->set('lot_number',$explode_cont_next)
                                    ->set('status', 0)
                                    ->set('request_id', $request_id);
                                $card->create();
                            };
                            $status=0;
                            $last_status='';
                            $history_card.=$card_num.';';
                        };
                    };
                    if(substr($value,0,1)=='S'){
                        $explode_cont=explode("\r\n", $content);
                        foreach( $explode_cont as $content ){
                            $explode_cont_next=explode(";", $content);
                            //var_dump($explode_cont_next);

                            ///////////////////////////////////////////////////////
                            if(count($explode_cont_next)=='25'){
                                $n=$n+1;
                                $card_num=$explode_cont_next[2];
                                $status=$explode_cont_next[0];

                                $last_status=$status-1;
                                $cards=ORM::factory('card')
                                    ->where('card_num', '=', "$card_num")
                                    ->limit(1)
                                    ->find_all();
                                $history_card.=$card_num.';';

                                foreach($cards as $card){
                                    $last_status=$card->status;
                                    $request_id=$card->id;
                                    //$card->status=$status;
                                    //$card->save();
                                };
                                DB::query(Database::UPDATE, "UPDATE `card` SET `status`=$status AND `send`=0 WHERE `card_num`=$card_num LIMIT 1 ")->execute();
                                //var_dump($explode_cont_next);
                                //echo "Реквест id $request_id; Номер карты $card_num; Новый статус $status старый статус $last_status;<br />";

                                DB::query(Database::UPDATE, "UPDATE `requests` SET `count_$last_status`=`count_$last_status`-1 WHERE `id`=$request_id LIMIT 1 ")->execute();
                                DB::query(Database::UPDATE, "UPDATE `requests` SET `count_$status`=`count_$status`+1 WHERE `id`=$request_id LIMIT 1 ")->execute();
                                //echo "Ласт статус $last_status Новый статус $status <br />";
                            };
                            ///////////////////////////////////////////////////////////
                        }
                    }
                    $mail_list_file.="Файл с именем: $value<br />";
                };
                if(preg_match('/\.*.ERR/', $value)) {
                    $mail_err_list_file.="Была обнаружена ошибка в файле: $value;<br />$content<br />";
                    $n=0;
                    $request_id='';
                    $last_status='';
                    $status='';
                    $history_card=$content;
                }
                $query = ORM::factory('history');
                $query->set('file_name',$value);
                $query->set('request_id',$request_id);
                $query->set('status',$status);
                $query->set('last_status',$last_status);
                $query->set('cards_count',$n);
                $query->set('cards',$history_card);
                $query->create();
                fclose($rHandle);
            };
        };
        //$rem=$connection->exec("rm -f /root/Down*/*");
        if($mail_list_file!=""){
            $to = 'soadilya@gmail.com';
            $subject = 'Успешно проверенные файлы ';
            $from = 'obicardroyting@gmail.com';

            $message = "Здравствуйте Полина, были получены ответы на запросы<br />$mail_list_file";
            Email::send($to, $from, $subject, $message, $html = true);
        }
        if($mail_err_list_file!=""){
            $to = 'soadilya@gmail.com';
            $subject = 'Ошибка в форме файла ';
            $from = 'obicardroyting@gmail.com';
            $message = "Ошибка в файле $value.\r\n $content ";
            Email::send($to, $from, $subject, $message, $html = false);
        }

        /*$to = 'soadilya@gmail.com';
        $subject = 'Тестирование планировщика';
        $from = 'obicardroyting@gmail.com';
        $message = "Собственно сабж";
 
        Email::send($to, $from, $subject, $message, $html = false);*/
	}

} // End Download
