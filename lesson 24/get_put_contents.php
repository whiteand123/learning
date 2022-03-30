<?php
    $homepage = file_get_contents('text.txt');
    $homepage .= "\nOne more stripe";
    $date = date("Y-m-d-H-i-s");

    file_put_contents('text1.txt', $homepage);
    file_put_contents($date.'.txt', $homepage);
    echo $homepage;