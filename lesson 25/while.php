<?php
    $i = 0;
    while($i <= 5 ){ //обязательно ограничение чтобы когда-то было false (иначе бесконечный цикл)
        $i++; //сначала добавляется +1, после выводится число в echo
        if($i == 4) continue; //пропускает 4, если поставить < 4  то пропустит все до выполнения условия
        if($i > 5) break;
        echo "$i<br>";
    }