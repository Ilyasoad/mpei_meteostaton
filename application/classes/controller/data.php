<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 01.04.13
 * Time: 0:49
 * To change this template use File | Settings | File Templates.
 */
defined('SYSPATH') or die('No direct script access.');


class Controller_Data extends Controller {

    public function action_get()
    {
        //распаковываем полученные параметры
        $data = json_decode($_REQUEST['jsonData'], true);

        //делаем запрос в базу
        $time_start = $data['start'];
        $time_end   = $data['end'];

        //Параметр, который получаем
        $needed_param = $data['parametr'];

        //Получаем из модели все данные
        $data_get = Model::factory('Data')->get_data($needed_param, $time_start, $time_end );

        //Возвращаем результат
        if ($data_get != false){
            echo $data_get;
            //return  json_encode($data_get);
        }else{
            throw new HTTP_Exception_404('Category not found');
        }
    }
    public function action_get_moment()
    {
        //Получаем из модели все данные
        $data_get = Model::factory('Data')->get_moment_data();

        //Возвращаем результат
        if ($data_get != false){
            print_r(json_encode($data_get));
            //  ($data_get);
        }else{
            throw new HTTP_Exception_404('Category not found');
        }
    }
    public function action_set_mode()
    {
        //Получаем из модели все данные
        $data_get = Model::factory('Data')->set_mode($_POST['mode']);

        //Возвращаем результат
        if ($data_get != false){
            print_r($data_get);
        }else{
            throw new HTTP_Exception_404('Category not found');
        }
    }
    public function action_set_but()
    {
        //Получаем из модели все данные
        $data_get = Model::factory('Data')->set_button($_POST['tn_but'],$_POST['ten_but'],$_POST['sk_but'],$_POST['g_gs']);

        //Возвращаем результат
        if ($data_get != false){
            print_r("Изменения успешно внесены");
        }else{
            throw new HTTP_Exception_404('Category not found');
        }
    }
    public function action_set()
    {
        $now = time();
        echo($now);
        for($i = 1; $i <= 2000; $i++){
            $rand_t = rand(2, 8);
            $rand_h = rand(2, 8);
            $rand_t .= ".".rand(0, 100);
            $rand_h .= ".".rand(0, 100);

            //echo("Температура: " . $rand_t . "\n");
            //echo("Влажность : " . $rand_h . "\n");
            //echo("Время : " . $now + 30 * $i . "\n");

            $data_set = DB::insert('data', array('temperature', 'humidity' ,'time_stamp'))
                ->values(array($rand_t, $rand_h, date('Y-m-d H:i:s', $now + 30 * $i)));
            echo $data_set;
            $data_set->execute();
        }
        echo mysql_error();

    }
    public function action_graph_json()
    {
        //делаем запрос в базу
        $time_start = $_REQUEST['start'];
        $time_end   = $_REQUEST['end'];

        //Параметр, который получаем
        $param      = $_REQUEST['param'];

        //Получаем из модели все данные
        $data_get = Model::factory('Data')->get_json($param, $time_start, $time_end);


        //Возвращаем результат
        if ($data_get != false){
            $this->request->headers['Content-Type'] = 'application/json';
            echo json_encode($data_get);
        }else{
            throw new HTTP_Exception_404('Category not found');
        }
    }




}