<?php
    $total = 0;
    $num = 0;
    $howmany = $_POST['howmany'];
    for ($k = 1; $k <= $howmany; $k++) {
        $name = 'input'.$k;
        $num = $_POST[$name];
        $total = $total + $num;
    }

$mean = $total / $howmany;
echo "total = ", $total;
echo ", average= ", $mean;
?>