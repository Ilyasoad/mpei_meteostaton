<?php

/**
 * @author soadilya
 * @copyright 2012
 */
defined('SYSPATH') or die('No direct access allowed.');

//if(!isset(Auth::instance()->get_user()->username)){Request::current()->redirect('/');};
// Описание класса

class Controller_Admin extends Controller_Template {
    //задаем публичный шаблон для этого контроллера
    public $template = 'frontend/index';

    //задаем публичные переменные шаблона
    public function before(){
        
        parent::before();

        //Задаем глобальную переменную футера
        View::set_global('footer', View::factory('frontend/footer'));

        //Задаем глобальную переменную приветствия
        //View::set_global('privetstvie','Добро пожаловать, '.Auth::instance()->get_user()->username.'!'.' '."<a href='/login/logout'>Разлогинится</a>");
    }
    
    public function action_index() {

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/main');

        //объявляем как шаблон переменную $content
        $this->template->content =$content;
        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }

    public function action_meteo_picker() {

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/meteo_picker');

        //объявляем как шаблон переменную $content
        $this->template->content =$content;
        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }

    public function action_mimic_panel() {

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/mimic_panel');

        //объявляем как шаблон переменную $content
        $this->template->content =$content;

        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }
    public function action_graph() {

        foreach ($_REQUEST as $key => $value){
            if($value == "on"){
                $parameters[] = $key;
            }
        }

        $start      = date('U', strtotime($_REQUEST['Start_data'] . " " . $_REQUEST['Start_time']));
        $end        = date('U', strtotime($_REQUEST['End_data'] . " " . $_REQUEST['End_time']));

        $g_tmpl = View::factory('frontend/graph_tmpl')
            ->bind('parameter', $parameter)
            ->bind('start', $start)
            ->bind('end', $end);

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/graph');

        //Переменные параметры
        $content->parameters        = $parameters;
        $content->start             = $start;
        $content->end               = $end;
        $content->g_tmpl            = $g_tmpl;

        //объявляем как шаблон переменную $content
        $this->template->content =$content;

        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }
    public function action_table() {

        foreach ($_REQUEST as $key => $value){
            if($value == "on"){
                $parameters[] = $key;
            }
        }

        $start      = date('U', strtotime($_REQUEST['Start_data'] . " " . $_REQUEST['Start_time']));
        $end        = date('U', strtotime($_REQUEST['End_data'] . " " . $_REQUEST['End_time']));

        $table = Model::factory('Data')->bootstrap_table( $start, $end,  $parameters );

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/table_tmpl');

        //Переменные параметры
        $content->parameters        = $parameters;
        $content->start             = $start;
        $content->end               = $end;
        $content->table             = $table;

        //объявляем как шаблон переменную $content
        $this->template->content =$content;

        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }
    public function getData(){
        $data = json_decode($_REQUEST['jsonData'], true);

        return  json_encode($data);
    }

    public function action_test() {
        $parameters = array('temperature','humidity');
        $start = '2011-4-29 8:30pm';
        $end = '2014-4-29 8:30pm';

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content= View::factory('frontend/test');
        $content->parameters = $parameters;
        $content->start = strtotime($start);
        $content->end = strtotime($end);

        //объявляем как шаблон переменную $content
        $this->template->content =$content;

        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }
    public function action_get_way() {

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content = View::factory('frontend/get_way');

        //объявляем как шаблон переменную $content
        $this->template->content = $content;

    }

};