<!DOCTYPE html>

<html>

<?php

 

if(isset($_POST['Area'])) {

 $x= $_POST['Length'];



$y= $_POST['Width'];
$z=$x*$y;

echo "the area of Rectangle is $z";
}
if(isset($_POST['Perimeter'])) {
$x= $_POST['Length'];



$y= $_POST['Width'];
$z= 2 * ($x+$y);

echo "the Perimeter is $z";

}
?>
</html>