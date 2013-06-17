<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 11.06.13
 * Time: 12:41
 * To change this template use File | Settings | File Templates.
 */


?>
<div class="container view_container">
    <div class="row">
        <div class="top_conteiner" style="height: inherit;min-height: 500px;">

            <h2>Таблица данных метеостанции за периуд </h2>
            <h3>с <?php echo date("'Y-m-d H:i:s'", $start);?> по <?php echo date("'Y-m-d H:i:s'", $end);?></h3>
            <span>Вы можете скачать отчет в формате xlsx :<?php Request::factory('phpexcel/index')->post(array("parameters" => $parameters ,"start" =>$start ,"end" => $end))->execute();?></span>
            <table class="table table-hover">
                <thead><tr>
                    <td>Время</td>
                    <td>Температура</td>
                    <td>Влажность</td>
                </tr></thead>
                <tbody>
                <?php
                foreach($table as $str){
                    echo("<tr>");
                    echo("<td>".$str['time_stamp']."</td>");
                    echo("<td>".round($str['temp'],2)."</td>");
                    echo("<td>".round($str['hum'],2)."</td>");
                    echo("</tr>");
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>