<?php 
//defined('SYSPATH') or die('No direct script access.');


class Controller_Welcome extends Controller
{
 
	public function action_index()
	{
        $query = DB::select('name_request')->from('requests')->where('id', '=', 1700);
        $query=$query->execute()->as_array();
        var_dump($query) ;
        /*$requests = ORM::factory('request')->find_all();
        foreach($requests as $request1){
            echo($request1->id);
            echo('ntcn');

            $cards='';
        };*/

        //echo('ЛОХ ПИДР<br />');
        $status=2;
        $status_last=2;
        $request_id=1701;
        $card_count=7;
        /*DB::query(Database::SELECT, 'SELECT * FROM `requests` WHERE `id`=1701');
        $query = DB::update('cards')
            ->set(array('status' => $status))
            ->where('request_id', '=', $request_id)
            ->and_where('status', '=', $status_last)
            ->limit($card_count)
            ;
        $query->execute();

        $query = DB::update('requests')
            ->set(array("count_$status_last" => '`count_$card_count`-$card_count'))
            ->where('id', '=', $request_id)
            ->limit(1);
        $query->execute();*/

        //echo $card_count;

        //DB::query(Database::UPDATE, "UPDATE `requests` SET `count_$status_last`=`count_$status_last`-$card_count WHERE `id`=$request_id LIMIT $card_count ")->execute();
        /*$requests = ORM::factory('request')->find_all();
        //var_dump($cards);


        UPDATE `cards` SET `status`=0 WHERE 1



        foreach($requests as $request){
            echo $request->status .' - '. $request->ISO2 .' - '.$request->name_request .'<br />';
        };*/



	}

}