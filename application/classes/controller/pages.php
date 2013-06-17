<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 17.05.13
 * Time: 20:23
 * To change this template use File | Settings | File Templates.
 */
defined('SYSPATH') or die('No direct access allowed.');

//if(!isset(Auth::instance()->get_user()->username)){Request::current()->redirect('/');};
// Описание класса

class Controller_Pages extends Controller_Template {
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
    public function action_get_way() {

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content = View::factory('frontend/get_way');

        //объявляем как шаблон переменную $content
        $this->template->content = $content;

    }
    public function action_index() {
        $textarea = "fsdfs";

        ////////////////////////////////////////
        //Возвращаемые в вид параметры
        $content = View::factory('frontend/pages');
        $content->textarea = $textarea;


        //объявляем как шаблон переменную $content
        $this->template->content = $content;

        //Задаем активную вкладкуавыаы
        //$this->template->result = "class='active'";
        ////////////////////////////////////////////////////////////////////////////////
    }
}
