<?php
    $number = ['1', '2', '3', 'hello', true, 54];
    for($i=0; $i<count($number); $i++) {
        echo "$number[$i] <br>";
    }

    $arr = [
        'auto' => 'Ford',
        'plane' => 'IL-2',
        'ship' => 'Black Pearl'
    ];
    foreach($arr as $key => $value) {
        echo "$key : $value <br>"; //если ключи не нужны, то не передаем эту переменную и выводим только значения
    }

    $transport = [
    'auto' => ['Lanos', 'Chevrolet', 'Ford'], //асоциативный массив 'auto' ключ строковый
    'planes' => ['IL -42', 'Boeing 707', 'Boeing 313'], //пример: ключ индексный/числовой [2] - 'Boeing 707'
    'ships' => ['Titanic', 'Lilu', 'Esminets']
    ];
    foreach ($transport as $key => $array) {
        echo "<b>$key</b><br>";
        for($i=0; $i<count($array); $i++) {
            echo "<li>$array[$i]</li>";
        }
    }

