<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 07.04.13
 * Time: 21:14
 * To change this template use File | Settings | File Templates.
 */


class Model_Data extends Model
{
    protected $_tableData = 'data';

    public function get_data($parameter, $time_start, $time_end)
    {
        $data_get = DB::query(Database::SELECT,
            "SELECT $parameter, DATE_FORMAT(`time_stamp`,'%e/%c/%Y %T') as `time_stamp`
             FROM $this->_tableData
             WHERE (`time_stamp` > DATE_FORMAT('$time_start','%Y-%c-%e %l:%i%p')) AND (`time_stamp` < DATE_FORMAT('$time_end','%Y-%c-%e %l:%i%p'))
             LIMIT 100")
        //echo $data_get;
            ->execute()->as_array();
        $i = 0;
        foreach($data_get as $data){
            $json_data[$i]= array($data['time_stamp'],str_replace(',','.',$data[$parameter]));
            $i++;
        }
        /*$data_get = DB::select($parameter,'time_stamp')
            ->from($this->_tableData)
            //->where_open()
            //->where($param['name'],$param['op'],$param['value'])
            ->where('time_stamp', '>', strftime('%Y-%c-%e %l:%i%p',$time_start))
            //->and_where('time_stamp', '<', "DATE_FORMAT('$time_end','%Y-%c-%e %l:%i%p')")
            //->and_where('time_stamp', '<',strtotime($time_end))
            //->where_close()
            ->limit(100)

        ;
        echo $data_get;
        $data_get
            ->execute()
            ->as_array();*/
        if(!empty($data_get))
            return json_encode($json_data);
        else
            return false;
    }
    public function get_moment_data()
    {
        $moment_data = DB::query(Database::SELECT,
            'SELECT *
             FROM `mimic_panel`')
            ->execute()->as_array();
        if(!empty($moment_data))
            return $moment_data[0];
        else
            return false;
    }
    public function set_mode($mode)
    {
        $mode_ = DB::query(Database::UPDATE,
            "UPDATE `mimic_panel`
             SET `mode` = $mode")
            ->execute();
        if($mode_){
            if ($mode){
                return 'Режим успешно изменен на автоматический';
            }else{
                return 'Режим успешно изменен на ручной';
            }
        }else{
            return false;
        }

    }
    public function set_button($tn_but, $ten_but, $sk_but, $g_gs)
    {
        return DB::query(Database::UPDATE,
            "UPDATE `mimic_panel`
             SET  `tn_but`  = $tn_but,
                  `ten_but` = $ten_but,
                  `sk_but`  = $sk_but,
                  `g_gs`    = $g_gs
                  ")
            ->execute();

    }
    public function get_json($parameter, $time_start, $time_end )
    {
        $diff = $time_end - $time_start ;
        $diff = $diff / 30;

        $range = ceil( 52000 / $diff );

        $time_start = date('Y-m-d H:i:s', $time_start);
        $time_end = date('Y-m-d H:i:s', $time_end);

        $json = DB::query(Database::SELECT,
           "SELECT AVG(  `$parameter` ) AS  `value`
            FROM  `data`
            WHERE  `time_stamp`
                BETWEEN STR_TO_DATE(  '$time_start',  '%Y-%m-%d %H:%i:%s' )
                AND STR_TO_DATE(  '$time_end',  '%Y-%m-%d %H:%i:%s' )
            GROUP BY TIME_TO_SEC(  `time_stamp` ) - TIME_TO_SEC(  `time_stamp` ) % ( 60 * $range )
            ORDER BY  DATE_FORMAT(  `time_stamp` ,  '%Y-%m-%d %H:%i:%s' ) ")
         ->execute() -> as_array();

        $i = 0;
        foreach($json as $key => $value){
            $json_new[$i] = round($value['value'] , 1) ;
            $i++;
        }

        if(!empty($json_new))
            return $json_new;
        else
            return false;

    }
    public function get_table( $time_start, $time_end )
    {

        $diff = $time_end - $time_start ;
        $diff = $diff / 30;

        $range = ceil( 52000 / $diff );

        $time_start = date('Y-m-d H:i:s', $time_start);
        $time_end   = date('Y-m-d H:i:s', $time_end);

        $sql = DB::query(Database::SELECT,
                "SELECT  `id` as '0',  `temperature`  AS  '1',  `humidity`  AS  '2', `time_stamp` AS '3'
             FROM  `data`
             WHERE  `time_stamp`
                BETWEEN STR_TO_DATE(  '$time_start',  '%Y-%m-%d %H:%i:%s' )
                AND     STR_TO_DATE(  '$time_end',    '%Y-%m-%d %H:%i:%s' )
             ORDER BY   DATE_FORMAT(   `time_stamp` , '%Y-%m-%d %H:%i:%s' ) ")
                ->execute() -> as_array();
            $excel_data = array(
                1 => array('Данные полученные с метеостанции принадлежащей "Полигону по исследованию нетрадиционных источников тепла ВФ МЭИ"'),
                2 => array('На периуд с',$time_start,'по',$time_end),
                4 => array('ID', 'Температура', "Влажность", "Время"));
            foreach($sql as $str){
                $excel_data[]  = $str;
            }
            $data = array(
                'Users' => $excel_data
            );
        if(!empty($data))
            return $data;

        else
            return false;

        }


public function bootstrap_table( $time_start, $time_end)
{

    $diff = $time_end - $time_start ;
    $diff = $diff / 30;

    $range = ceil( 52000 / $diff );

    $time_start = date('Y-m-d H:i:s', $time_start);
    $time_end   = date('Y-m-d H:i:s', $time_end);

    $data = DB::query(Database::SELECT,
            "SELECT `time_stamp`,  AVG(  `temperature` ) AS  `temp`, AVG(  `humidity` ) AS  `hum`
             FROM  `data`
             WHERE  `time_stamp`
                BETWEEN STR_TO_DATE(  '$time_start',  '%Y-%m-%d %H:%i:%s' )
                AND     STR_TO_DATE(  '$time_end',  '%Y-%m-%d %H:%i:%s' )
             GROUP BY TIME_TO_SEC(  `time_stamp` ) - TIME_TO_SEC(  `time_stamp` ) % ( 60 * $range )
             ORDER BY  DATE_FORMAT(  `time_stamp` ,  '%Y-%m-%d %H:%i:%s' ) ")
            ->execute() -> as_array();
        //var_dump($table_data);

    if(!empty($data))
        return $data;

    else
        return false;

    }
}
