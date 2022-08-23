<?php
$x=5;
$y=10;
function mytest(){
global $x,$y;
$z=$x+$y;
echo $z; 
}
mytest();
echo "<br>";

//global variable
function mytest2(){
    $GLOBALS['y']= $GLOBALS['x']*$GLOBALS['y'];
    echo $GLOBALS['y'];
}
mytest2();
echo "<br>";


//local variable
function mytest3(){
        $x=3;
        $y=4;
        echo $x+$y;
    }
        mytest3();
        echo $x+$y;
