<?php
//if statment
$num1 =7;
if ($num1 < 5) {
  echo "very good !";
}
echo "<br>";
//if else
$num2=15;
if ($num2 < 7) {
  echo "good lack!";
} else {
  echo "very  good !";
}
echo "<br>";
//if-else-if
$speed=110;
if ($speed < 60) {
  echo "safe driving speed!";
} elseif ($speed >60 && $speed<100) {
  echo "average speed";
} else {
  echo "its dangerous!";
}


?>