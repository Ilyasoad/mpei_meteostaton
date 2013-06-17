<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @var array    $files
 * @var array    $errors
 * @var string   $message
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 */
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OBI - возьми и сделай</title>
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <style type="text/css">
        *{ margin: 0; padding: 0; }
        html, body{ width: 100%; height: 100%; }
        a:hover{ text-decoration: none; }
        #wrap{ margin: 0 auto; padding-top: 20px; width: 960px; }
        #wrap h2{ margin-bottom: 15px; }
        #wrap .pictures img{ vertical-align: middle; margin-bottom: 10px; }
        #wrap .message{ padding: 5px; border: 3px solid #00f; color: #00f; margin-bottom: 20px; }
        #wrap .error{ padding: 5px; border: 3px solid #f00; color: #f00; margin-bottom: 20px; }
        input[type="file"] {
            height: 100%;
        }
        #redirect input{height: 50px; width: 20%;}
        #wrap .row, #wrap label{ display: block; margin-bottom: 5px; }
    </style>
<script type="text/javascript">
    $(document).ready(function() {
        $("#menu").change(function(){
            var post_rock=$("#menu :selected").val();
            //alert(post_rock);

            switch($('#menu').val()) {
                case "2": second(); break;
                case "3": third(); break;
                case "4": fourth(); break;
                default: second(); break;
            };
            function second(){
                alert('second');
            }
            function third(){
                alert('third');
                //$('#add_one').show();
                //$('#add_more').hide();
                //$('#delete_cheked').hide();
                //$('#add_more_as').hide();
            };
            function fourth(){
                alert('fourth');
                /*$('#add_one').hide();
                $('#add_more').show();
                $('#delete_cheked').hide();
                $('#add_more_as').hide();*/
            };

        });

    });
</script>

</head>

<body>
<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="/">Obi</a>
        <ul class="nav">
            <li id="activation"><a href="/admin/index">Запрос номеров карт</a></li>
            <li id="changestatus" class="active"><a href="/admin/changestatus">Смена статуса карт</a></li>
            <li id="result"><a href="/admin/history">История</a></li>
            <li id="help"><a href="/admin/help">Помощь</a></li>
        </ul>
    </div>
</div>
<div id="wrap">
    <h2>Загрузка</h2>
    <form action="<?php echo Route::url('default', array('controller' => 'files', 'action' => 'upload')) ?>" method="post" enctype="multipart/form-data">
        <label for="image_control">Для загрузки файла выбирите его, и нажмите кнопку "Загрузить"</label>
        <div class="row_file">
            <input type="file" name="image" id="image_control" />
            <input type="submit" class="btn btn-success" value="Загрузить" />
            <input type="submit" class="btn btn-danger" form="clear" value="Очистить дерикторию" />
        </div>
    </form>
    <form id="redirect" action="/files/convert" method="post">
        <!--<input type="hidden" id="post_rock" name="post_rock" />-->
        <input type="submit" class="btn btn-primary" form="redirect" value="Продолжить" />
        <p></p>
        <!--
        <p>Cтатус </p>
        <select name="menu" id="menu">
            <option value="2" selected="selected">Второй </option>
            <option value="3">Третий </option>
            <option value="4">Четвертый</option>
            <!--<option value="fourth">Четвертая позиция</option>
        </select>-->


    </form>
    <form id="clear" action="clear" style="display: none;">
    </form>
    <?php if ($message) : ?>
    <div class="message"><?php echo HTML::chars($message) ?></div>
    <?php endif; ?>
    <?php foreach ($errors as $error) : ?>
    <div class="error"><?php echo HTML::chars($error) ?></div>
    <?php endforeach; ?>
    <h2>Содержание файла</h2>
    <?php if (empty($files)) : ?>
    <p>Файл пока не загружен</p>
    <?php else : ?>
    <div class="pictures">
        <?php foreach ($files as $file) : ?>
        <div><?php echo Request::factory(Route::url('content', array('filename' => $file)))->execute()->body();?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>
</body>
<?php echo View::factory('footer');?>
</html>