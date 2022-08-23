<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo check_palindrome('madam')."\n";
?>
<?php
function Palindrome($string){ 
    if (strrev($string) == $string)
    { 
        return 1; 
    }
    else
    {
        return 0;
    }
} 
$a = "1211";
if(Palindrome($a))
{ 
    echo "Palindrome"; 
}
else
 { 
echo "Not a Palindrome"; 
}
?>