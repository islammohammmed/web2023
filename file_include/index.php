
<html>
<body>
<?php include 'header.php';?>
<h1>Welcome to my home page!</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
     possimus accusantium aliquam, fugit natus error autem ducimus 
     doloribus rem deserunt quae beatae quasi saepe quo nulla. Similique
     vero eius consequuntur!</p><br>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Consequatur saepe facere fugiat temporibus autem optio modi dolores
     ut perferendis doloremque? Quos eius aperiam nesciunt similique?
     Blanditiis vel eos et iusto.</p>
<?php include 'footer.php';
echo "I have a $color $car.";
?>

<?php require 'footer.php';
echo "I have a $color $car.";
?>

</body>
</html>


<?php
echo readfile("webdictionary.txt");
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
//https://www.w3schools.com/php/php_file_open.asp


?>






