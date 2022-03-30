<?php
    $arr = [1, 2, 3];
    list($one, $two, $three) = $arr;
    echo $one . "<br>";
    echo $two . "<br>";
    echo $three . "<br>";

    //использовать можно при обмене значений переменных без дополнительнной переменной
    $x = 6;
    $y = 3;

    echo "до:<br>";
    echo "x: $x<br>";
    echo "y: $y<br>";

    list($y, $x) = [$x, $y];

    echo "после:<br>";
    echo "x: $x<br>";
    echo "y: $y<br>";
