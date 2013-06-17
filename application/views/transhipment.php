<?php

/**
 * @author soadilya
 * @copyright 2012
 */


$_POST['textarea']=$textarea;
?>
<h2>Проверка <?=$file_name?> перед отправкой</h2>
    <form method="POST">
        <div>
            <input type="hidden" name="file_name" value="<?=$file_name?>">
            <textarea name="textarea" style="width: 900px; height: 270px;"><?php echo $textarea;?></textarea>
        </div>
        <input type="submit" class="btn btn-large btn-primary" formaction="send" value="Отправить"/>
    </form>