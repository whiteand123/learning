
<?php
require 'point.php';

$p1 = new Point();
$p1->x = 10;
$p1->y = 24;

$p2 = new Point();
$p2->x = 3;
$p2->y = 10;
$p2->z = 'eee';

$distance = sqrt(pow(($p2->x - $p1->x), 2) + pow(($p2->x - $p1->y), 2));
echo $distance;
// должно получится 25

?>
