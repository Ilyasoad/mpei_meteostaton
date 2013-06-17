<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ����
 * Date: 19.05.13
 * Time: 20:58
 * To change this template use File | Settings | File Templates.
 */?>
<!--������� ��������� -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#get_data").live("click", function(){
            var start_data = $("input[name = 'Start_data']").val();

            var start_time = $("input[name = 'Start_time']").val();
            var end_data = $("input[name = 'End_data']").val();
            var end_time = $("input[name = 'End_time']").val();


            if((start_data != '')&&(start_time != '')&&(end_data != '')&&(end_time != '')){
                $('.data_block label input:checkbox:checked').each(function(){
                    alert($(this).attr('name'));

                    var param = $(this).attr('name');
                    var formData = {
                        "parametr"      : param,

                        "start"    : start_data + ' ' + start_time,
                        "end"      : end_data + ' ' + end_time
                    };
                    ajax(formData,param);
                });
            }
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
                    draw(name,goog);
                }
            });
        }
    });
</script>

<script type="text/javascript" src="/assets/time-picker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/time-picker/jquery.timepicker.css" />

<script type="text/javascript" src="/assets/time-picker/lib/base.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/time-picker/lib/base.css" />

<script src="/assets/time-picker/lib/datepair.js"></script>

<div class="container view_container">
    <div class="row">
        <div class="top_conteiner">
            <div class="block_content">
                <div class="data_block">
                    <h3>��������� �������</h3>
                    <h4>����������� ���������</h4>
                    <label class="checkbox">
                        <input type="checkbox" name="temperature" id="temperature" > �����������
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="humidity" id="humidity"> ���������
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="some_other" id="some_other"> �����-������ ������
                    </label>

                    <h4>�����</h4>

                        <p class="datepair" data-language="javascript">
                            ������ �
                            <br />
                            <input type="text" class="date start" name="Start_data"/>
                            <input type="text" class="time start" name="Start_time"/>
                            <br />
                            �� <br />
                            <input type="text" class="time end" name="End_time"/>
                            <input type="text" class="date end" name="End_data"/>
                        </p>
                        <div id="get_data" class="btn btn-large" >���������</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

