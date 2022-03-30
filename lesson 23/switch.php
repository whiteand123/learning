<?php //From lesson 20
    $var = 'c++';
    switch ($var) {
    case 'PHP':
        ?>
    <h1>PHP language</h1>
    <?php
        break;
        case 'js';
        ?>
    <h1>JS language</h1>
    <?php
        break;
        default:
            ?>
            <h1>Differnt language</h1>
        <?php

    }
    ?>
<?php
    $number = 90;
    switch (true){
        case ($number > 0 && $number <= 10):
            echo "$number less than 10 and more than 0";
            break;
        case ($number > 10 && $number <= 100):
            echo "$number less than 100 and more than 10";
            break;
        case ($number > 100 && $number <= 1000):
            echo "$number less than 100 and more than 10";
            break;
        default:
            echo "$number more than 1000 or less than 0";
            break;
    }
?>