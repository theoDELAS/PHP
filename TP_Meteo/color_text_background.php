<?php
    date_default_timezone_set('Europe/Paris');
    $text_color = 'black';
    $background_color = 'white';
    $a_color = 'black';
    $date = date('d/m/Y');
    $heure = date('H:i');

    if (intval($heure) > 7 && intval($heure) < 19) 
    {
        $text_color = 'black';
        $background_color = 'white';
    } else 
    {
        $text_color = 'white';
        $background_color = 'black';
    }

?>