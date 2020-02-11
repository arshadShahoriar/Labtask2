<DOCTYPE html>

<html>
<?php
$x=$_POST['num1'];
	$y=$_POST['num2'];
	$z=$_POST['num3'];


	if(($x>=$y)&&($x>=$z))
   echo "the largest number is $x";
else if (($y>=$z)&&($y>=$x))
	echo "the largest number is $y";
else
	echo "the largest number is $z";

?>
</html>