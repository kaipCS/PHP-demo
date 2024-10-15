<?php
$current = $_POST['current'];
$rate = $_POST['rate'];
$desired = $_POST['desired'];

while ($current < $desired) {
    $current = $current * $rate;
    echo $current;
    echo " ";
}
?>