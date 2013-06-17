<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 10.05.13
 * Time: 14:59
 * To change this template use File | Settings | File Templates.
 */
defined('SYSPATH') or die('No direct script access.');


class Controller_Draw extends Controller {

    public function action_draw(){
        //var_dump($this->request->post());

        var_dump(Model::factory('Data')->get_data($this->request->post('param'), $this->request->post('start'), $this->request->post('end'))) ;

        echo "<br />";
    }
}