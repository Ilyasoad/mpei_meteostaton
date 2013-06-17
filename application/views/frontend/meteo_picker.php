<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 10.06.13
 * Time: 22:02
 * To change this template use File | Settings | File Templates.
 */
?>
<script type="text/javascript" src="/assets/js/jquery.json-2.3.js"></script>
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="/assets/jqplot/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="/assets/jqplot/jquery.jqplot.js"></script>
<!--[if IE]><script type="text/javascript" src="/assets/jqplot/excanvas.js"></script><![endif]-->

<script class="include" language="javascript" type="text/javascript" src="/assets/jqplot/plugins/jqplot.cursor.min.js"></script>
<script class="include" language="javascript" type="text/javascript" src="/assets/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="/assets/jqplot/plugins/jqplot.json2.min.js"></script>


<script type="text/javascript">

    $(document).ready(function(){

        $("form").live("submit", function(){
            var start_data = $("input[name = 'Start_data']").val();
            var start_time = $("input[name = 'Start_time']").val();

            var end_data = $("input[name = 'End_data']").val();
            var end_time = $("input[name = 'End_time']").val();


            if((start_data != '')&&(start_time != '')&&(end_data != '')&&(end_time != '')){
                $('#data_block').submit();
                /*$('.data_block label input:checkbox:checked').each(function(){
                    //alert($(this).attr('name'));

                    var param = $(this).attr('name');
                    var formData = {
                        "parametr"      : param,

                        "start"    : start_data + ' ' + start_time,
                        "end"      : end_data + ' ' + end_time
                    };
                    ajax(formData,param);
                });*/

            }else{
                alert("Пожалуйста Укажите интервалы времени");
            }

            return false;

        });
        function ajax(formData, param){
            $.ajax({
                url:'/data/get'
                , type:'POST'
                , data:'jsonData=' + $.toJSON(formData)
                , success: function(res) {
                    //alert(res);
                    var name = 'chart';
                    alert(res);
                    var points = JSON.parse(res);
                    alert(points);
                    //$('.block_content').show();
                    //draw(name,goog);
                }
            });
        }

        /*function draw(name,graph){
            var plot = $.jqplot(name, graph, {
                title: 'Данные с Метеостанции',

                series: [{
                    label: 'Данные с Метеостанции',
                    neighborThreshold: -1
                }],
                axes: {
                    xaxis: {
                        renderer: $.jqplot.DateAxisRenderer,
                        numberTicks:4,
                        tickOptions: {
                            mark: 'inside',    // Where to put the tick mark on the axis
                            // 'outside', 'inside' or 'cross',
                            showMark: true,
                            showGridline: true, // wether to draw a gridline (across the whole grid) at this tick,
                            markSize: 4,        // length the tick will extend beyond the grid in pixels.  For
                            // 'cross', length will be added above and below the grid boundary,
                            show: true,         // wether to show the tick (mark and label),
                            showLabel: true    // wether to show the text label at the tick,
                        }
                    },
                    yaxis: {
                        numberTicks: 7,
                        rendererOptions: { numberTicks:4 },    // options to pass to the renderer.  LinearAxisRenderer
                        // has no options,
                        tickOptions: {
                            mark: 'inside',    // Where to put the tick mark on the axis
                            // 'outside', 'inside' or 'cross',
                            showMark: true,
                            showGridline: true, // wether to draw a gridline (across the whole grid) at this tick,
                            markSize: 4,        // length the tick will extend beyond the grid in pixels.  For
                            // 'cross', length will be added above and below the grid boundary,
                            show: true,         // wether to show the tick (mark and label),
                            showLabel: true,    // wether to show the text label at the tick,
                            formatString: ''   // format string to use with the axis tick formatter
                        }
                    }
                },
                cursor:{
                    show: true,
                    zoom:true,
                    showTooltip:true
                }
            });

            $('#button-reset').click(function() { plot.resetZoom() });
        }*/

    });
</script>

<script type="text/javascript" src="/assets/time-picker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/time-picker/jquery.timepicker.css" />

<script type="text/javascript" src="/assets/time-picker/lib/base.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/time-picker/lib/base.css" />

<script src="/assets/time-picker/lib/datepair.js"></script>

<!--Главная страничка -->
<!--<div class="left_panel"></div>-->
<div style="height: 350px" class="container view_container">
    <div class="row">
        <div class="top_conteiner">
            <form id="data_block" class="data_block" action="/admin/graph" method="POST">
                <h3>Параметры выборки</h3>
                <div class="sides">
                    <h4>Участвующие параметры</h4>
                    <label class="checkbox">
                        <input type="checkbox" name="temperature" id="temperature" > Температура
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="humidity" id="humidity"> Влажность
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="wind_speed" id="wind_speed"> Скорость ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="wind_direction" id="wind_direction"> Направление ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> Направление ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> Направление ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> Направление ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> Направление ветра
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> Направление ветра
                    </label>

                </div>

                <div class="sides">
                    <h4>Время</h4>

                    <p class="datepair"  id="date_pair" data-language="javascript">
                        <span class="date_str">
                            Данные с
                            <input type="text" class="date start" name="Start_data"/>
                            <input type="text" class="time start" name="Start_time"/>
                        </span>
                        <span class="clearfix"></span>
                        <span class="date_str">
                            по
                            <input type="text" class="time end" name="End_time"/>
                            <input type="text" class="date end" name="End_data"/>
                        </span>
                    </p>
                    <button id="get_gr" formaction="/admin/graph" class="btn btn-primary " >Построить граффики </button>
                    <button id="get_tb" formaction="/admin/table" class="btn btn-success" > Вывести в таблицы </button>
                </div>


            </form>
        </div>
    </div>
</div>

<!-- Button to trigger modal -->