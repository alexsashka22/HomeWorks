<?php
$x = rand(0,3);
echo "Число ".$x." - ";
$y = 1;
$z = 1;
while (is_numeric($x))  {
  if ($y > $x) {
  echo "Задуманное число НЕ входит в числовой ряд";
  break;
  }
  elseif ($y == $x) {
  echo "Задуманное число входит в числовой ряд";
  break;
  }
  else {
    $q = $y;
    $y=$y+$z;
    $z = $q;
  }
}
?>
