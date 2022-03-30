<?php
    $array = [   //вкладываем один массив в другой
        'auto' => ['Lanos', 'Chevrolet', 'Ford'], //асоциативный массив 'auto' ключ строковый
        'planes' => ['IL -42', 'Boeing 707', 'Boeing 313'], //пример: ключ индексный/числовой [2] - 'Boeing 707'
        'ships' => ['Titanic', 'Lilu', 'Esminets']
    ];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo $array['auto']['2']; //отдельный элемент массива в массиве

?>