<script type="text/javascript">
    $(document).ready(function(){
        var plot1 = $.jqplot('chart1', [goog], {
            title: 'Google, Inc.',
            series: [{
                label: 'Google, Inc.',
                neighborThreshold: -1
            }],
            axes: {
                xaxis: {
                    renderer: $.jqplot.DateAxisRenderer,
                    min:'August 1, 2007 16:00:00',
                    tickInterval: '4 months',
                    tickOptions:{formatString:'%Y/%#m/%#d'}
                },
                yaxis: {
                    tickOptions:{formatString:'$%.2f'}
                }
            },
            cursor:{
                show: true,
                zoom:true,
                showTooltip:false
            }
        });

        $('.button-reset').click(function() { plot1.resetZoom() });
    });
</script>

<div class="container">
    <div class="row">
        <br />
        <!-- Button to trigger modal -->
        <button class="btn" id="colum_count_add_1" style="margin-left: 30px;" title="Добавляет к списку одну позицию"><i class="icon-plus"></i> Одну позицию</button>
        <a href="#add_more_" role="button" class="btn btn-info" data-toggle="modal"  title="Добавляет к списку несколько позиций стандартного наполнения"><i class="icon-plus"></i> Несколько</a>
        <a href="#add_more_as" role="button" class="btn btn-success" data-toggle="modal"  title="Добавляет к списку несколько позиций произвольного наполнения"><i class="icon-plus"></i> Несколько похожих</a>
        <button class="btn btn-danger" id="del"  title="Удаляет позиции отмеченные галочкой"><i class="icon-trash"></i> Удалить выделенные</button>
        <!--  -->

        </div>-->
        <div class="span11 table_active">
            <form method="post" action="transhipment" >
                <div id="table_obi">
                    <div id="labels" class="controls controls-row">
                        <label class="span1" style="width: 30px;"></label>
                        <label class="span2">Колличесвто карт</label>
                        <label class="span3">Тип карт</label><>
                        <label class="span5">Дополнительно наносимая информация</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-large btn-primary table_active" value="Отправить"/>
            </form>
        </div>
    </div>
</div>



<!-- Modal -->

<div id="add_more_as" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="add_more_as_label">Добавить несколько похожих</h3>
    </div>
    <div class="modal-body">
        <div class="tipical_div_activ">
            Колличесвто карт
        </div>
        <input type="text" id="count_cart" name="count_cart" value="0" /><br />
        <div class="tipical_div_activ">
            Тип карт
        </div>
        <input type="text" id="cart_type" name="cart_type" value="0" /><br />
        <!--<select class="span" id="cart_type" name="cart_type">
            <option value="0">Обыкновенная карта</option>
            <option value="1">Волшебная карта</option>
        </select>--><br />
        <div class="tipical_div_activ"><>
            Дополнительно наносимая информация
        </div>
        <input type="text" id="additional_information" value="8" /><br />
        <div class="tipical_div_activ">
            Колличество
        </div>
        <input type="text" id="colum_count_identic" value="8" /><br />
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
        <button class="btn btn-primary" data-dismiss="modal" id="add_more_identic">Добавить</button>
    </div>
</div>
<div id="add_more_" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel1">Добавить несколько</h3>
    </div>
    <div class="modal-body">
            <div class="tipical_div_activ">Колличество  </div><input  type="text" id="colum_count" />
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
        <button class="btn btn-primary" data-dismiss="modal" id="colum_count_add">Добавить</button>
    </div>
</div>