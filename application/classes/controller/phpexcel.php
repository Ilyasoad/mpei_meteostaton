<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 11.06.13
 * Time: 1:10
 * To change this template use File | Settings | File Templates.
 */
defined('SYSPATH') or die('No direct script access.');

class Controller_Phpexcel extends Controller {
    public function action_index() {

        $start      = date('U', strtotime($_REQUEST['Start_data'] . " " . $_REQUEST['Start_time']));
        $end        = date('U', strtotime($_REQUEST['End_data'] . " " . $_REQUEST['End_time']));

        $name = "meteostation";
        $XLSX = new Spreadsheet();

        //$start  = strtotime('2011-4-29 8:30pm');
        //$end    = strtotime('2014-4-29 8:30pm');

        $data_get = Model::factory('Data')->get_table($start, $end );

        $XLSX->setData( $data_get, 1 );
        $name = $XLSX->save(array('name'=>$name));



        echo "<a href='/Download/meteo/$name'>Скачать отчет</a>";
    }
    public function action_excel() {

        $start      = date('U', strtotime($_REQUEST['Start_data'] . " " . $_REQUEST['Start_time']));
        $end        = date('U', strtotime($_REQUEST['End_data'] . " " . $_REQUEST['End_time']));

        $data_get = Model::factory('Data')->get_table($start, $end );

        $spreadsheet = Spreadsheet::factory(array(
            'author'  => 'Kohana-PHPExcel',
            'title'      => 'Report',
            'subject' => 'Subject',
            'description'  => 'Description',
            'path' => '/',
            'name' => 'report'
        ));
        $spreadsheet->set_active_sheet(0);
        $as = $spreadsheet->get_active_sheet();
        $as->setTitle('Consumos');
        $as->getDefaultStyle()->getFont()->setSize(9);

        $as->getStyle('A1:G1')->applyFromArray(Kohana::$config->load('styles.header'));
        $as->getRowDimension(1)->setRowHeight(24);
        $as->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $as->getStyle('A1:G1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $as->getColumnDimension('A')->setWidth(8);
        $as->getColumnDimension('B')->setWidth(12);
        $as->getColumnDimension('C')->setWidth(46);
        $as->getColumnDimension('D')->setWidth(36);

        $sh = array(
            1 => array('Day','User','Count','Price'),
            2 => array(1, 'John', 5, 587),
            3 => array(2, 'Den', 3, 981),
            4 => array(3, 'Anny', 1, 214)
        );

        $spreadsheet->set_data($sh, false);
        $spreadsheet->send();



        echo "<a href='/Download/meteo/$name'>Скачать отчет</a>";
    }
}