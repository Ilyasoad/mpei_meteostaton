<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Система управления комплексом альтернативных источников энергии</title>
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="/assets/js/addelement.js"></script>
    <!--<script src="/assets/js/drag_and_drop.js"></script>-->
    <script src="/assets/js/bootstrap.js"></script>
    <script type="text/javascript">

    </script>
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="/"><img style="max-height: 22px;" src="/assets/img/logo.gif" /></a>
    <ul class="nav">
        <li id="main">
                    <a data-toggle="dropdown" href="#">
                Полигоны <span class="caret" style="vertical-align: super;"></span>
            </a>
            <ul class="dropdown-menu">
                <!-- dropdown menu links -->
                <li><a tabindex="-1" href="#">Метеостанция</a></li>
                <li><a tabindex="-1" href="#">Другая станция</a></li>
                <li><a tabindex="-1" href="#">Еще какая-нибудь станциая</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#">Separated link</a></li>
            </ul>
        </li>
        <li id="activation" <?php if(isset($active)){echo($active);};?>><a href="/admin/index">Данные метеостанции</a></li>
        <li id="changestatus" <?php if(isset($changestatus)){echo($changestatus);};?>><a href="/admin/changestatus">Данные со станции солнечных коллекторов</a></li>
        <!--<li id="result" <?php if(isset($result)){echo($result);}; ?>><a href="/admin/history">История</a></li>-->
        <li id="help" <?php if(isset($help)){echo($help);};?>><a href="/admin/help">Помощь</a></li>
    </ul>
    <span class="span5 nav_login"><?php if(isset($privetstvie)){echo $privetstvie;}?></span>
  </div>
</div>

<br />
    <?php echo $content; ?>
</body>
    <?php echo $footer;?>
</html>