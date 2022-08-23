<?php
echo strlen("hello world!");  //output12
echo "<br>";
echo str_word_count("hello world!"); //output 2
echo "<br>";
echo strrev("hello world!");  //output  !dlrow olleh
echo "<br>";
echo strpos("hello world!","world"); //output 6 
echo "<br>";
echo str_replace("world","Dolley","hello world!");  //output hel
echo "<br>";
echo substr("hello world",4,7);  // ( يعني الطول حيكون سبعة ارقاام اقطع من اربعة الى سبعة)عدد  الحروف المقطوعة
echo "<br>";
$str="hello world!,hh";
echo "<br>";
echo substr($str,0,strpos("$str",'!')+1); // لحد علامة التعجب نقطة البداية صفر

?>
<?php
//concatenation
$text1="learn php";
$text2="webschool.com";
$x=9;
$y=8;
echo "<br>";
print "<h2>" .$text1."</h2>";
echo "<br>";
print "study php at" ."   ".$x;
?>
