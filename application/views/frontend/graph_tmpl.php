<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Илья
 * Date: 09.06.13
 * Time: 18:55
 * To change this template use File | Settings | File Templates.
 */
?>
<script type="text/javascript">
    $(function() {
        $.ajax({
            url:'/data/graph_json'
            , type:'POST'
            , data:{
                param   :"<?= $parameter ?>",
                start   :"<?= $start ?>",
                end     :"<?= $end ?>"
            }
            , success: function(res) {
            var points = JSON.parse(res);
                draw(points);
            }
            , error: function(res) {
                //alert(res);
                alert("К cожалению произошла ошибка. Возможно все дело в интервале значений.");
                setTimeout(function(){ history.back(); }, 1000);
            }
        });

        function draw(data) {
            // Create a timer
            var start = + new Date();

            // Create the chart
            $("#<?= $parameter ?>").highcharts("StockChart", {
                chart: {
                    events: {
                        load: function(chart) {
                            this.setTitle(null, {
                                text: "График потроен за  "+ (new Date() - start) +"мс"
                            });
                        }
                    },
                    zoomType: "x"
                },

                rangeSelector: {
                    buttons: [{
                        type: "day",
                        count: 3,
                        text: "3д"
                    }, {
                        type: "week",
                        count: 1,
                        text: "1н"
                    }, {
                        type: "month",
                        count: 1,
                        text: "1м"
                    }, {
                        type: "month",
                        count: 6,
                        text: "6м"
                    }, {
                        type: "year",
                        count: 1,
                        text: "1г"
                    }, {
                        type: "all",
                        text: "Все"
                    }],
                    selected: 3
                },

                yAxis: {
                    title: {
                        text: "Температура (°C)"
                    }
                },

                title: {
                    text: "Температура в период с начала времен до сегодня"
                },

                subtitle: {
                    text: "Потроенно за..." // dummy text to reserve space for dynamic subtitle
                },

                series: [{
                    name: "Температура",
                    data: data,
                    pointStart: Date.UTC(2011, 3, 1),       //Дата начала
                    pointInterval: 600 * 1000,              //Интервал
                    tooltip: {
                        valueDecimals: 1,
                        valueSuffix: "°C"
                    }
                }]

            });
        }
        function dump(obj) {
            var out = "";
            if(obj && typeof(obj) == "object"){
                for (var i in obj) {
                    out += i + ": " + obj[i] + "\n";
                }
            } else {
                out = obj;
            }
            alert(out);
        }
    });
</script>
<div id="<?= $parameter ?>" style="height: 500px; min-width: 500px"></div>