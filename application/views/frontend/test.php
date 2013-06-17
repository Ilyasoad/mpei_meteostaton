<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 10.05.13
 * Time: 19:16
 * To change this template use File | Settings | File Templates.
 */
foreach($parameters as $parameter){
    echo Request::factory('draw/draw')->post(array('param'=>$parameter,'start'=>$start,'end'=>$end))->execute()->body();
};

?>
