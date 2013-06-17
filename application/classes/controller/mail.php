<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 15.04.13
 * Time: 23:08
 * To change this template use File | Settings | File Templates.
 */

defined('SYSPATH') or die('No direct script access.');

class Controller_Mail extends Controller_Template
{

    public function action_send()
    {
        $message = $_POST['feedback'];
        $config = Kohana::$config->load('email');
        Email::connect($config);
        Email::send('soadilya@gmail.com', 'vfmpei.meteo@gmail.com', 'Замечание или вопрос с сайта vfmpei', $message, $html = false);
    }


}