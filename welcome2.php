<?php
$analysis = $_POST['analysis'];
$design = $_POST['design'];
$implementation= $_POST['implementation'];
$evaluation = $_POST['evaluation'];
$total = $analysis + $design + $implementation + $evaluation;

$grade = "";
$next = 0;
switch ($total) {
case $total<4:
  $grade = "U";
  $next = 4-$total;
  break;
case $total>3 && $total<14:
  $grade = "G";
  $next = 14-$total;
  break;
case $total<13 && $total<22:
   $grade = "F";
   $next = 21-$total;
  break;
case $total>21 && $total<31:
  $grade = "E";
  $next = 30-$total;
  break;
case $total>30 && $total<41:
  $grade = "D";
  $next = 40-$total;
  break;
case $total>40 && $total<54:
  $grade = "C";
  $next = 53-$total;
  break;
case $total>53 && $total<67:
  $grade = "B";
  $next = 66-$total;
  break;
case $total>66 && $total<80:
  $grade = "A";
  $next = 80-$total;
  break;
case $total>79:
  $grade = "A*";
  $next = 0;
  break;
}

echo "total: ", $total;
echo ", grade: ", $grade;
echo ", points needed to next grade: ", $next;
?>