<?php
$analysis = $_POST['analysis'];
$design = $_POST['design'];
$implementation= $_POST['implementation'];
$evaluation = $_POST['evaluation'];
$total = $analysis + $design + $implementation + $evaluation;
echo "the sum of you numbers is ", $total;
?>