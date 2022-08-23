<?php
//index array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$car = array("Volvo", "BMW", "Toyota");
$arrlength = count($car);

for($x = 0; $x < $arrlength; $x++) {
  echo $car[$x];
  echo "<br>";
}
//Assoiative array
$Stuent1="Ahmed";
$Stuent2="Ali";
$Students=["Ali","Omar"];
array_push($Students,"Ayman");
print_r($Students);
echo "<br>";
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
//multidimensional arrys
$cars=array(
    array("sami",1,2),
    array("Yazan",1,2),
    array("waleed",1,2),
    array("Ali",1,2)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";



?>