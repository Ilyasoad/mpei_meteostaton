<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 09.06.13
 * Time: 16:48
 * To change this template use File | Settings | File Templates.
 */


foreach($parameters as $parameter){
    $g_tmpl = View::factory('frontend/graph_tmpl')
        ->set('parameter', $parameter)
        ->set('start', $start)
        ->set('end', $end);

    echo $g_tmpl->render();
}
echo '
    <script src="/assets/hightstock/js/highstock.js"></script>
    <script src="/assets/hightstock/js/modules/exporting.js"></script>
';