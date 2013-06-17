<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ����
 * Date: 27.05.13
 * Time: 3:26
 * To change this template use File | Settings | File Templates.
 */
?>
<script type="text/javascript" src="/assets/js/jquery.json-2.3.js"></script>

<!--������� ��������� -->
<!--<div class="left_panel"></div>-->
<div class="container view_container">
    <div class="row">
       <div class="top_conteiner">


           <div class="mimic_panel">
               <a class="modal_open" >Настройки</a>
               <div class="values">
                   <div id="g_gs"></div>
                   <div id="t_sk_vh"></div>
                   <div id="t_sk_vih"></div>
                   <div id="t_b"></div>
               </div>
               <div class="buttons">
                   <div id="tn_but"><img src="/assets/img/circle.png"></div>

                   <div id="g">
                       <div id="g_minus"><img src="/assets/img/minus.png"></div>
                       <div id="g_plus"><img src="/assets/img/plus.png"></div>
                   </div>


                   <div id="ten_but"><img src="/assets/img/circle.png"></div>
                   <div id="sk_but"><img src="/assets/img/circle.png"></div>

               </div>

           </div>
       </div>


    </div>
</div>


<!------------------------------------------------------------------------------------------------------------->
<!-- arcticModal -->
<script src="http://vfmpei.141592.org/assets/arctick-modal/jquery.arcticmodal-0.3.min.js"></script>
<link rel="stylesheet" href="http://vfmpei.141592.org/assets/arctick-modal/jquery.arcticmodal-0.3.css">

<!-- arcticModal theme -->
<link rel="stylesheet" href="http://vfmpei.141592.org/assets/arctick-modal/themes/simple.css">
<script type="text/javascript">
    function refresh(){
        $.ajax({
            url:'/data/get_moment'
            , type:'POST'
            , success: function(res) {
                //alert(res);
                var points = JSON.parse(res);
                jQuery.each(points,function(index,value){
                    var var_index_array = [ 't_b', 'g_gs', 't_sk_vh','t_sk_vih' ];
                    for (var j in var_index_array) {
                        if( index == var_index_array[j]) {$('#'+index).html(value)}
                    }
                    var but_index_array = [ 'tn_but', 'ten_but', 'sk_but' ];
                    for (var k in but_index_array) {
                        if( index == but_index_array[k]){
                            if(value == '1'){
                                $('#'+index).css('background-color','green');
                                $('#'+index).attr('val','1');
                            }else{
                                $('#'+index).css('background-color','red');
                                $('#'+index).attr('val','0');
                            }
                        }
                    }

                })
                //dump(points);
            }
        });
    }
    function set_mode(val){
        $.ajax({
            url:'/data/set_mode'
            , type:'POST'
            , data: {mode: val}
            , success: function(res) {
                alert(res);
            }
        });
    }
    function set_but(){
        var tn_but  = $('#tn_but').attr('val');
        var ten_but = $('#ten_but').attr('val');
        var sk_but  = $('#sk_but').attr('val');
        var g_gs    = parseFloat($('#g_gs').text());

        $.ajax({
            url:'/data/set_but'
            , type:'POST'
            , data: {
                g_gs:       g_gs,
                tn_but:     tn_but,
                ten_but:    ten_but,
                sk_but:     sk_but
            }
            , success: function(res) {
                alert(res);
            }
        });
    }

    function set_g(val){
        if($('#mode').val() == "Ручной"){
            var g  = parseFloat($('#g_gs').text()) + val;

            $('#g_gs').html(g);
            $('#g_minus,#g_plus').css('background-color','green');

            set_but();
        }else{
            alert('Для начала переключитесь на ручное управление');
            $('#g_minus,#g_plus').css('background-color','red');
        }


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
    function r_toggle(){
        $('#mode').toggle(function(){
            $(this).val('Автоматический');
            $(this).addClass('btn-success');
            $(this).removeClass('btn-danger');
            $('#g_minus,#g_plus').css('background-color','red');
            $(this).removeClass('btn-danger');
            set_mode(1);
        },function(){
            $(this).val('Ручной');
            $(this).addClass('btn-danger');
            $(this).removeClass('btn-success');
            $('#g_minus,#g_plus').css('background-color','green');
            set_mode(0);
        })
    }
    $(document).ready(function(){
        r_toggle();
        $('.modal_open').click(function(){
            $('#mail_modal').arcticmodal();
        });
        $('#mode').live('click',function(){
            r_toggle();
        });
        $('#g_minus').live('click',function(){
            set_g(-0.1);
        });
        $('#g_plus').live('click',function(){
            set_g(+0.1);
        });

        $("#sk_but").live('click', function (){
            if($('#mode').val() == "Ручной"){
            if($(this).attr('val') == '0'){
                $(this).css('background-color','green');
                $(this).attr('val','1');
            }else{
                $(this).css('background-color','red');
                $(this).attr('val','0');
            }set_but()}else{
                alert('Для начала перейдите на ручной режим');
            }

        });
        setInterval(refresh, 6000);
    })
</script>

<style>
    .modal_open{
        cursor: pointer;
        margin-left:1090px;
        -moz-margin-start:-100px;
        margin-top: 10px;
        padding: 8px;
        position: absolute;
        border: 1px solid;

        background-color: #ffffff;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;

    }
    .data_str{
        display: block;
        height: 20px;
    }
    .data_str span{
        float: left;
    }
    .data_str input{
        float: right;
        width: 50%;
    }

</style>

<div style="display: none;">
    <div class="box-modal" id="mail_modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="body">
            <h3>Настройки</h3>
            <p class="data_str">
                <span>Режим: </span>
                <input class="btn btn-danger" id="mode" type="button" value="Ручной"/>
            </p>
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="thanks">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="body">
            Спасибо за заказ. Наш менеджер свяжется с вами в течении суток.
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="error">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="body">
            Пожалуйста, заполните свои имя и телефон, чтобы Наши специалисты смогли связаться с Вами
        </div>
    </div>
</div>